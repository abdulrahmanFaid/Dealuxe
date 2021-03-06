<?php

namespace App;

use Cart;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
//use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \TCG\Voyager\Models\User implements MustVerifyEmail
{
    use Notifiable;

    protected static function boot(){
        parent::boot();
        static::created(function($user){
            $user->createProfile();
        });
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $withCount = ['wishlist'];
    protected $with = ['wishlist'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function cartItems(){
        return Cart::session(auth()->id())->getContent();
    }

    public function cartItemsCount(){
        return Cart::session(auth()->id())->getContent()->count();
    }

    public function cartTotal($toDollar = true, $dollarSign = true){
        $dollarSign = $dollarSign ? "$" : null;
        $total = Cart::session($this->id)->getTotal();
        return $dollarSign . ($toDollar ? $total/100 : $total);
    }

    /**
     * Get user wishlist
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function wishlist(){
        return $this->belongsToMany('App\Product', 'user_wishlist', 'user_id', 'product_id');
    }

    /**
     * Get user orders
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders(){
        return $this->hasMany('App\Order');
    }

    public function newOrder($data){
       return $this->orders()->create($data);
    }
    /**
     * Add product to user wishlist
     * @param $product
     */
    public function addToWishlist($product){
        $wishlist = $this->wishlist();

        if(! $wishlist->where(['product_id' => $product->id])->exists()){
            return $this->wishlist()->attach($product->id);
        }
        return;
    }

    /**
     * Remove a product from user wish list
     * @param $product
     * @return int|void
     */
    public function removeFromWishlist($product){
        $wishlist = $this->wishlist();
        if($wishlist->where(['product_id' => $product->id])->exists()){
            return $wishlist->detach($product->id);
        }
        return;
    }

    /**
     * Determine if the user can checkout or not
     * @return bool
     */
    public function canCheckout(){
        return (bool) ( count($this->cartItems()) > 0 && $this->hasCompletedProfile() );
    }

    /**
     * Get user profile
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profile(){
        return $this->hasOne('App\Profile');
    }

    /**
     * Create a profile for a user
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function createProfile(){
        return $this->profile()->create();
    }

    /**
     * Determine if the profile for a user is completed
     * @return mixed
     */
    public function hasCompletedProfile(){
        return $this->profile->isCompleted();
    }

    /**
     * Complete a profile for a user
     * @param $data
     */
    public function completeProfile($data){
        $this->profile->fill($data);
    }
}

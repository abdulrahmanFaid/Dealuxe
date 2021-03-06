<?php

namespace Tests\Unit;

use App\Order;
use Illuminate\Support\Collection;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OrderTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function it_belongs_to_a_user(){
        $order = $this->createOrder();
        $this->assertInstanceOf('App\User', $order->user);
    }

    /** @test */
    function it_has_a_products(){
        $order = $this->createOrder();
        $this->assertInstanceOf(Collection::class, $order->products );
    }

    function createOrder(){
        return Order::create([
            'user_id' => factory('App\User')->create()->id,
            'total' => '10000'
        ]);
    }
}

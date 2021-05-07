<?php

namespace Tests\Feature;

use App\Models\Order;
use http\Client\Curl\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class OrdersTest extends TestCase
{

    /** @test */
    public function registering_order_creates_unique_identification_code()
    {

        $user = \App\Models\User::first();
        $this->actingAs($user);
        $token = session('_token');

        $response = $this->post('/admin/orders',[
            '_token' => $token,
            'fname'=>'Justas',
            'lname' => 'Ars',
            'phone' => '1234568',
            'email' => 'email@test.lt',
            'product' => 'Remontas',
            'additional_info' => '',
            'bussines' => '',
        ]);
        if (Order::latest()->first()->order_review_code!= null){

            $this->assertTrue(true);
        }
        else{

            $this->assertTrue(false);
        }



    }



    /** @test */
    public function unauthenticated_user_cannot_access_admin()
    {


        $response = $this->get('/admin/orders');

        $response->assertStatus(302);
    }

    /** @test */
    public function authenticated_user_can_access_admin()
    {

        $user = \App\Models\User::first();
        $this->actingAs($user);
        $response = $this->get('/admin/orders/create');

        $response->assertStatus(200);
    }


    /** @test */
    public function authenticated_user_can_access_orders()
    {

        $user = \App\Models\User::first();
        $this->actingAs($user);
        $response = $this->get('/admin/orders');

        $response->assertStatus(200);
    }

    /** @test */
    public function authenticated_user_can_view_order_data()
    {

        $user = \App\Models\User::first();
        $this->actingAs($user);
        $response = $this->get('/admin/orders/1');

        $response->assertStatus(200);
    }

    /** @test */
    public function generate_order_pdf_is_working()
    {
        $user = \App\Models\User::first();
        $this->actingAs($user);

        $response = $this->get('/admin/generate-pdf/1');

        $response->assertStatus(200);
    }


    /** @test */
    public function user_can_not_see_hidden_orders()
    {
        $order = Order::factory()->create([ 'findable' => false]);

        $response = $this->get('/search?search='. $order->order_review_code);
        $response->assertSeeText('Toks užsakymas neegzistuoja');
    }


    /** @test */
    public function user_can_see_visible_orders()
    {
        $order = Order::factory()->create([ 'findable' => true]);

        $response = $this->get('/search?search='. $order->order_review_code);
        $response->assertSeeText('Užsakymo duomenys');

    }
    /** @test */
    public function updated_order_status_is_visible_for_user()
    {
        $order = Order::factory()->create([ 'status' => 2, 'findable' => true]);

        $response = $this->get('/search?search='. $order->order_review_code);
        $response->assertSeeText('Užsakymas įvykdytas');
    }

    /** @test */
    public function admin_can_edit_text_elements()
    {
        $user = \App\Models\User::first();
        $this->actingAs($user);

        $response = $this->get('/admin/text_components');
        $response->assertSeeText('Teksto komponentai');
    }





}

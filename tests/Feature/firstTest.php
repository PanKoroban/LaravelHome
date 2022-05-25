<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class firstTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_news()
    {
        $response = $this->get('news');

        $response->assertStatus(200);
    }

    public function test_category()
    {
        $response = $this->get('category');

        $response->assertStatus(200);
    }



    public function test_create()
    {
        $data = ['name'=>'some name'];
        $response = $this->post(route('store'), $data);

        $response->assertJson($data)->assertStatus(201);
    }

    public function test_order_create()
    {
        $data = ['name'=>'some name'];
        $response = $this->post(route('orderstore'), $data);

        $response->assertJson($data)->assertStatus(202);
    }

    public function test_news_id()
    {
        $data = 1;
        $response = $this->get('news/'.$data);

        $response->assertStatus(200);
    }

    public function test_news_id_2()
    {
        $data = 'asdasda';
        $response = $this->get('news/'.$data);

        $response->assertStatus(500);
    }

    public function test_cat_id()
    {
        $data = 1;
        $response = $this->get('category/'.$data);

        $response->assertStatus(200);
    }

    public function test_cat_id_2()
    {
        $data = 'asdasda';
        $response = $this->get('category/'.$data);

        $response->assertStatus(404);
    }

    public function test_create_2()
    {
        $response = $this->post(route('store'));

        $response->assertCreated();
    }

    public function test_create_3()
    {
        $data = ['name'=>'Alexander'];
        $response = $this->post(route('store'), $data);

        $response->assertJsonPath('name', 'Alexander');
    }

}

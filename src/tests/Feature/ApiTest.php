<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Task;
use App\Models\Tag;
use DB;

class ApiTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_get_apis()
    {
        dump('--------------------------------');
        $response = $this->get('/api/tags');
        $data = collect(json_decode($response->content()))->toArray();
        dump($data);
        dump('--------------------------------');
        $response = $this->get('/api/tasks');
        $data = collect(json_decode($response->content()))->toArray();
        dump($data);
        dump('--------------------------------');
        $response->assertStatus(200);
    }
}

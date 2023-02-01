<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Task;
use App\Models\Tag;

class ApiTest extends TestCase
{
    // /**
    //  * A basic test example.
    //  *
    //  * @return void
    //  */
    // public function test_post_apis()
    // {
    //     $request = [
    //         'title' => 'title',
    //         'tag' => 2,
    //         'tag_name' => 'cording'
    //     ];
    //     $response = $this->json(
    //         'post',
    //         '/api/tasks',
    //         $request
    //     );
    //     $data = collect(json_decode($response->content()))->toArray();
    //     $response->assertStatus(200);
    // }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_get_apis()
    {
        // dump('--------------------------------');
        // $response = $this->get('/api/tags');
        // $data = collect(json_decode($response->content()))->toArray();
        // dump($data);

        dump('--put------------------------------');
        $request = [
            "title" =>  "Unit test for feature BBBBB",
            "tag" =>  3
        ];
        $response = $this->json('put', '/api/tasks/2', $request);
        dump('--create------------------------------');
        $request = [
            "title" =>  "DDDDD",
            "tag" =>  3
        ];
        $response = $this->json('post', '/api/tasks', $request);
        $createId = collect(json_decode($response->content()))['id'];
        dump('--delete------------------------------');
        $response = $this->delete('/api/tasks/' . $createId);
        dump('--get------------------------------');
        $response = $this->get('/api/tasks');
        $data = collect(json_decode($response->content()))->toArray();
        dump($data);
        $response->assertStatus(200);
        dump('--end------------------------------');
    }

    // /**
    //  *
    //  * @params
    //  * @return
    //  */
    // public function test_delete_tasks()
    // {
    //     $id = 1;
    //     $response = $this->json(
    //         'delete',
    //         '/api/tasks/' . $id
    //     );
    //     $response->assertStatus(200);
    // }
}

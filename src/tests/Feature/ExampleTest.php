<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Task;
use App\Models\Tag;
use DB;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        dump('---テーブル一覧--------------');
        $tables = DB::select("SHOW TABLES");
        dump($tables);

        dump('---カラム名--------------');
        $task = app(Task::class);
        $table = $task->getTable();
        $columns = $task->getConnection()->getSchemaBuilder()->getColumnListing($table);
        dump($columns);

        dump('---データ--------------');
        $tasks = app(Task::class)->query()->get()->toArray();
        dump($tasks);


        $response = $this->get('/');
        $response->assertStatus(200);
    }
}

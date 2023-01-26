<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Task;

class ApiController extends Controller
{
    /**
     * tasks
     * @params
     * @return
     */
    public function getTags()
    {
        $tags = app(Tag::class)->query()->get()->all();
        return $tags;
    }
    /**
     * tasks
     * @params
     * @return
     */
    public function getTasks()
    {
        $tags = app(Task::class)->query()->get()->all();
        return $tags;
    }
}

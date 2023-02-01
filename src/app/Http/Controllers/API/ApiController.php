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
        $tasks = app(Task::class)
            ->query()
            ->select(
                'tasks.id',
                'tasks.title',
                'tasks.tag',
                'tags.name as tag_name'
            )
            ->leftjoin('tags', 'tags.id', '=', 'tasks.tag')
            ->get()
            ->all();
        return $tasks;
    }

    /**
     * Task新規追加
     * @params
     * @return
     */
    public function postTask(Request $request)
    {
        $task = app(Task::class);
        $task->title = $request->input('title', 'default');
        $task->tag = $request->input('tag', 1);
        $task->save();

        $result = [
            'id' => $task->id,
            'title' => $task->title,
            'tag' => $task->tag,
            'tag_name' => Tag::find($task->tag)->name,
        ];
        return $result;
    }

    /**
     *
     * @params
     * @return
     */
    public function updateTask(Request $request, $id)
    {
        $task = Task::find($id);
        $task->fill($request->all())->save();
        $task->save();
        return $task;
    }

    /**
     *
     */
    public function destroyTask($id)
    {
        app(Task::class)->where('id', $id)->delete();
    }
}

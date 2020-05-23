<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function create(Request $request)
    {
        $this->validate($request, [
            "title" => "required"
        ]);

        $task = new Task();
        $task->title = $request->title;
        $task->save();
        return redirect("/");
    }

    public function delete(string $id)
    {
        $task = Task::where("id", $id)->first();
        $task->deleted = 1;
        $task->save();
        return redirect("/");
    }
}

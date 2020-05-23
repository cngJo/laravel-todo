<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Chow the application dashboard
     *
     * @return Renderable
     */
    public function index() : Renderable
    {
        $tasks = Task::where("deleted", "0")->get();
        return view("home", [
            "tasks" => $tasks
        ]);
    }
}

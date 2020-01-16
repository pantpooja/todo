<?php

namespace App\Http\Controllers;

use App\todo;

use Illuminate\Http\Request;

class TodoController extends Controller
{

    public function index()
    {
        $allTasks = todo::all();
        return view('tasks.index', compact('allTasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function edit($id)
    {
        $todo = todo::find($id);
        return view('tasks.edit', compact('alltasks'));
    }
}

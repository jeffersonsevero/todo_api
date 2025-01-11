<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTodoRequest;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::query()->paginate();

        return response()->json($todos);

    }

    public function store(StoreTodoRequest $request)
    {

        $todo = Todo::create($request->all());

        return response()->json($todo);

    }
}

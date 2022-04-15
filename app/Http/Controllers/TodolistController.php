<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{

    public function index()
    {
        $todolists=Todolist::all();
       return view('ksiegagosci', compact('todolists'));
    }
    public function edit(Todolist $todolist)
    {
        return view('edit',['todolist'=>$todolist]);
    }
    public function update(Todolist $todolist)
    {
        request()->validate([
            'content' => 'required',
            'content2' => 'required',
        ]);

        $todolist->update([
            'content' => request('content'),
            'content2' => request('content2'),
        ]);

        return back();
    }



    public function store(Request $request)
    {
$data = $request->validate([
    'content'=> 'required',
    'content2'=> 'required'
]);
Todolist::create($data);
return back();
    }

    public function destroy(Todolist $todolist)
    {
$todolist->delete();
return back();
    }
}

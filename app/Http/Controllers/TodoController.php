<?php

namespace App\Http\Controllers;
use App\Models\Todo;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()

    {
        $todos = Todo::all();
        return view('todos.index',compact('todos'));
    }
    public function create()
    {
        return view('todos.create');
    }
    public function show($id){
        $todo =Todo::find($id);
        return view('todos.show',compact('todo'));

    }
    public function store(Request $request)
    {
        $this->validate(request(),[
            'name' => 'required|min:6|max:20',
            'details' => 'required'
        ]);
        $todo = new Todo;
        $todo->name = $request->name;
        $todo->details = $request->details;
        $todo->complated = false;
        $todo->save();
        session()->flash('success', 'Todo Inserted successful!');
        return redirect('todos/');
    }
    public function edit($id){
        $todo =Todo::find($id);

        return view('todos.edit',compact('todo'));

    }
    public function update(Request $request,$id)
    {
        $this->validate(request(),[
            'name' => 'required|min:6|max:20',
            'details' => 'required'
        ]);
        $todo = Todo::find($id);
        $todo->name = $request->name;
        $todo->details = $request->details;
        $todo->complated = false;
        $todo->save();
        session()->flash('success', 'Todo Updated successful!');
        return redirect('todos/');
    }
    public function destroy($id){
        $todo =Todo::find($id)->delete();

        session()->flash('success', 'Todo Deleted successful!');
        return redirect('/todos');

    }
    public function complate($id)
    {
        $todo = Todo::find($id);
        $todo->complated = true;
        $todo->save();
        session()->flash('success', 'Todo complated successful!');
        return redirect('/todos');
    }
}

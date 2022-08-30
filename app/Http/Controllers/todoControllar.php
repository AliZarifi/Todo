<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class todoControllar extends Controller
{
    public function info()
    {

        return view('info');
    }
    //
    public function index()
    {
        $todo = Todo::all();
        return view('todo')->with('todos', $todo);
    }
    public function delete($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        // dd($id);
        return redirect()->back();
    }
    public function update($id)
    {
        $todo = Todo::find($id);
        return view('todoUpdate')->with('todo', $todo);
        // dd($id);
    }

    public function save(Request $request, $id)
    {
        // dd($request->all());
        $todo = Todo::find($id);
        $todo->todo = $request->Item;
        $todo->save;
        return redirect('/todo')->with('success', 'todo update');
    }


    public function store(Request $request)
    {
        // dd($request->all());  
        $todo = new Todo;
        $todo->todo = $request->newItem;
        $todo->save();
        return redirect()->back();
    }
}

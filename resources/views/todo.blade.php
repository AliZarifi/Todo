@extends('layout.app')


@section('content')
<h1>Todo Item</h1>
<div class="row">
    <div class="col-md-8 col-md-offset-4">
        <form action="/create/todo" method="post">
            {{ csrf_field() }}
            <input type="text" name="newItem" class="form-controler input-lg">
        </form>
    </div>
    <div class="col-md-8 pt-2  px-3">

        @foreach($todos as $todo)
        <div>
            {{ $todo->todo}}
            {{ $todo->complete}}
            <a href="{{ route('todo.delete',['id'=>$todo->id]) }}" class="btn btn-danger " >X</a>
            <a href="{{ route('todo.update',['id'=>$todo->id]) }}" class="btn btn-info " >update</a>
        </div>
        <hr>
        @endforeach

    </div>
</div>
@endsection
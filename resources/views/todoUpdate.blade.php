@extends('layout.app')


@section('content')

<div class="row">
    <div class="col-md-12 col-lg-12">

        <form action="{{ route('todo.save',['id'=>$todo->id]) }}" method="post">
            {{ csrf_field() }}
            <input type="text" name="Item" value="{{ $todo->todo }}">
    </div>
</div>

</form> 
@endsection
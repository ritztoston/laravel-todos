@extends('layout')

@section('content')
    <div>
        <form action="{{route('todos.save',['id' => $todo->id])}}" method="post">
            {{csrf_field()}}
            <input type="text" class="form-control
            input-lg" name="todo"
                   value="{{$todo->todo}}">
        </form>
    </div>
@stop
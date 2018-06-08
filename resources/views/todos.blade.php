@extends('layout')

@section('content')
        <div>
            <form action="/create/todo" method="post">
                {{csrf_field()}}
                <input type="text" class="form-control
            input-lg" name="todo"
                       placeholder="Create a new todo">
            </form>
        </div>
    <hr>
        <div class="content">
            <ul>
            @foreach($todos as $todo)
                <li>
                {{$todo->todo}}
                <a href="{{route('todo.delete',['id' => $todo->id])}}" class="btn btn-danger main-buttons" >Delete</a>
                <a href="{{route('todo.edit',['id' => $todo->id])}}" class="btn btn-success main-buttons">Edit</a>


                </li>
                <br>
                <hr>
            @endforeach
            </ul>
        </div>

@stop
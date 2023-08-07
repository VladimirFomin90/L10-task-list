@extends('layout.app')

@section('title', $task->title)

@section('content')
<h3>{{$task->description}}</h3>

@if ($task->long_description)
        <p>{{$task->long_description}}</p>
@endif

<p>{{$task->created_at}}</p>
<p>{{$task->updated_at}}</p>

<div>
    <form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Delete</button>
    </form>
</div>

@endsection

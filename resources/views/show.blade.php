@extends('layout.app')

@section('title', $task->title)

@section('content')
<h3>{{$task->description}}</h3>

@if ($task->long_description)
        <p>{{$task->long_description}}</p>
@endif

<p>{{$task->created_at}}</p>
<p>{{$task->updated_at}}</p>

<p>
    @if ($task->completed)
        Completed
    @else
        Not Completed
    @endif
</p>

<div>
    <a href="{{ route('tasks.edit', ['task' => $task->id]) }}">Edit</a>
</div>

<div>
    <form method="POST" action="{{ route('tasks.toggle-complete', ['task' => $task->id]) }}">
        @csrf
        @method('PUT')
        <button>
            Mark as {{ $task->completed ? 'not complete' : 'completed'}}
        </button>
    </form>
</div>

<div>
    <form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Delete</button>
    </form>
</div>

@endsection

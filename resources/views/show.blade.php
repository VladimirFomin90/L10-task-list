@extends('layout.app')

@section('title', $task->title)

@section('content')

<button class="my-4 font-bold">
    <a href="{{ route('tasks.index') }} "
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Task List</a>
</button>
<h3 class="my-2 ">{{$task->description}}</h3>

@if ($task->long_description)
        <p class="my-2 ">{{$task->long_description}}</p>
@endif

<p class="my-2">Created: {{$task->created_at->diffForHumans()}}</p>
<p class="my-2">Updated: {{$task->updated_at->diffForHumans()}}</p>

<p class="my-2">
    @if ($task->completed)
           <span class="font-medium text-lime-700">Completed</span>
    @else
    <span class="font-medium text-rose-700">Not Completed</span>
    @endif
</p>

<div class="flex gap-2">
    <button class="btn">
        <a href="{{ route('tasks.edit', ['task' => $task->id]) }}"
            >Edit</a>
    </button>

    <form method="POST" action="{{ route('tasks.toggle-complete', ['task' => $task->id]) }}">
        @csrf
        @method('PUT')
        <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded inline my-4">
            Mark as {{ $task->completed ? 'not complete' : 'completed'}}
        </button>
    </form>

    <form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn">Delete</button>
    </form>
</div>

@endsection

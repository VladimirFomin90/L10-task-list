@extends('layout.app')

@section('title', 'The list of tasks')

@section('content')

    <button class="my-4 font-bold">
        <a href="{{ route('tasks.create') }} "
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add task</a>
    </button>

    @forelse ( $tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['task' => $task->id]) }}"
                @class(['line-through' => $task->completed, 'font-bold'])>{{ $task->title }}</a> <br />
        </div>
    @empty
        <div>There are no tasks!</div>
    @endforelse

    @if ($tasks->count())
        <nav class="my-3">
            {{ $tasks->links() }}
        </nav>
    @endif

@endsection

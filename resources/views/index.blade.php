<h1>
    Im a blade Task Php
</h1>

<div>
    @forelse ( $tasks as $task)
    <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
    @empty
        <div>I dont have tasks</div>
    @endforelse ()
</div>
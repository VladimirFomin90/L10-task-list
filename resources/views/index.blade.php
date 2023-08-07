@extends('layout.app')

@section('title', 'Im a blade Task Php')

@section('content')

@forelse ( $tasks as $task)
<a href="{{ route('tasks.show', ['task' => $task->id]) }}">{{ $task->title }}</a> <br />
@empty
<div>I dont have tasks</div>
@endforelse ()

@endsection

@extends('layout.app')
 
@section('title', 'Im a blade Task Php')

@section('content')
    
@forelse ( $tasks as $task)
<a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
@empty
<div>I dont have tasks</div>
@endforelse ()

@endsection
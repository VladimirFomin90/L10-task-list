@extends('layout.app')

@section('title', isset($task) ? 'Edit Task' : 'Add Task')

@section('content')
    <form method="post" action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <div class="mb-2">
            <label for="title" class="block uppercase text-slate-700 mb-2">
                Title
            </label>
            <input type="text" name="title" id="title"
            @class(['border-red-500' => $errors->has('title')])
                value="{{ $task->title ?? old('title') }} "/>
            @error('title')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-2">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="5"
            @class(['border-red-500' => $errors->has('description')])>
                {{ $task->description ?? old('description') }}</textarea>
            @error('description')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-2">
            <label for="long_description">Long Description</label>
            <textarea name="long_description" id="long_description" rows="10"
            @class(['border-red-500' => $errors->has('long_description')])>
                {{ $task->long_description ?? old('long_description') }}</textarea>
            @error('long_description')
                <p class="error">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-2 flex items-center justify-center">
            <button class="btn"">
                @isset($task)
                Edit task
                @else
                Add Task
                @endisset
            </button>
            <button class="bg-amber-500 hover:bg-amber-700 text-white font-bold mx-2 py-2 px-4 rounded inline my-4">
                <a href="{{route('tasks.index')}}">Cancel</a>
            </button>
        </div>

    </form>
@endsection

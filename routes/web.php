<?php

use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Task;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return 'Main Page';
});

// GET All tasks
Route::get('/tasks', function () {
    return view('index', [
        'tasks' => Task::latest()->paginate(12)
    ]);
})->name('tasks.index');

// Create a new task
Route::view('/tasks/create', 'create')->name('tasks.create');

// Edit task
Route::get('/tasks/{task}/edit', function (Task $task) {
    return view('edit', [
        'task' => $task
    ]);
})->name('tasks.edit');

// GET id task
Route::get('/tasks/{task}', function (Task $task) {
    return view('show', [
        'task' => $task
    ]);
})->name('tasks.show');

Route::post('/tasks', function (TaskRequest $request) {

    $task = Task::create($request->validated());

    return redirect()->route('tasks.show', ['task' => $task->id])->with('success', 'Task created successfully!');

})->name('tasks.store');

// edit a task
Route::put('/tasks/{task}', function (Task $task, TaskRequest $request) {

    $task->update($request->validated());

    return redirect()->route('tasks.show', ['task' => $task->id])->with('success', 'Task updated successfully!');

})->name('tasks.update');

// delete a task

Route::delete('/tasks/{task}', function (Task $task) {
    $task->delete();

    return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
})->name('tasks.destroy');

Route::fallback(function () {
    return 'Still got somewhere!';
});


<?php

use Illuminate\Support\Facades\Route;

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

class Task
{
  public function __construct(
    public int $id,
    public string $title,
    public string $description,
    public ?string $long_description,
    public bool $completed,
    public string $created_at,
    public string $updated_at
  ) {
  }
}

$tasks = [
  new Task(
    1,
    'Work',
    'Task 1 description',
    'Task 1 long description',
    false,
    '2023-08-2 22:42:00',
    '2023-08-2 22:42:00'
  ),
  new Task(
    2,
    'Housework',
    'Task 2 description',
    null,
    false,
    '2023-08-01 20:00:00',
    '2023-08-01 20:00:00'
  ),
  new Task(
    3,
    'Learn programming',
    'Task 3 description',
    'Task 3 long description',
    true,
    '2023-08-03 18:00:00',
    '2023-08-03 18:00:00'
  ),
  new Task(
    4,
    'take the cat to the vet',
    'Task 4 description',
    null,
    false,
    '2023-08-02 17:00:00',
    '2023-08-02 17:00:00'
  ),
];

Route::get('/', function () use ($tasks) {
    return view('index', [
        'tasks' => $tasks,
    ]);
})->name('tasks.index');

Route::get('/{id}', function($id) {
  return 'Task';
})->name('tasks.show');
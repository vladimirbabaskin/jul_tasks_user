<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Task;

class TaskController extends Controller {

    public function __construct() {
	$this->middleware('auth');
    }

    public function index(Request $request) {
	$tasks = $request->user()->tasks()->get();
	return view('tasks.index', [
	    'tasks' => $tasks,
	]);
    }

    public function create() {
	return view('tasks.create');
    }

    public function store(Request $request) {
	$this->validate($request, [
	    'name' => 'required|max:255',
	]);
	$request->user()->tasks()->create([
	    'name' => $request->name,
	]);

	return redirect()->route('tasks.index');
    }

    public function show() {
	
    }

    public function edit(Task $task) {
	return view('tasks.edit', [
	    'task' => $task,
	]);
    }

    public function update() {
	
    }

    public function destroy(Request $request, Task $task) {
	$this->authorize('destroy', $task);
	$task->delete();
	return redirect()->route('tasks.index');
    }

}

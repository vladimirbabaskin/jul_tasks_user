<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TaskController extends Controller
{
    public function __construct() {
	$this->middleware('auth');
    }
    public function index() {
	return view ('tasks.index');
    }
    public function create() {
	
    }
    public function store(Request $request) {
	$this->validate($request, [
	    'name'=>'required|max:255',
	]);
	echo $request->name;
    }
    public function show() {
	
    }
    public function edit() {
	
    }
    public function update() {
	
    }
    public function destroy() {
	
    }
}

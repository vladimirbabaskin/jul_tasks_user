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
	echo 'all tasks';
    }
    public function create() {
	
    }
    public function store() {
	
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

@extends('layouts.app')

@section('content')

<div class="panel-body">
    <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')

    <!-- Форма новой задачи -->
    <form action="{{ route('tasks.edit', $task->id) }}" method="GET" class="form-horizontal">
	{{ csrf_field() }}

	<!-- Имя задачи -->
	<div class="form-group">
	    <label for="task" class="col-sm-3 control-label">Новая редакция</label>

	    <div class="col-sm-6">
		<input type="text" name="name" id="task-name" class="form-control">
	    </div>
	</div>
	<!-- Кнопка сохранить задачу -->
	<div class="form-group">
	    <div class="col-sm-offset-3 col-sm-6">
		<button type="submit" class="btn btn-default">
		    <i class="fa fa-plus"></i> Сохранить
		</button>
	    </div>
	</div>
    </form>
</div> 
@endsection
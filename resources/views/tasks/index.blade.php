@extends('layouts.app')

@section('content')

	<!-- Bootstrap шаблон... -->
	<div class="panel-body">
		<a href="{{route('tasks.create')}}"
		   class="btn btn-default">
			<i class="fa fa-plus"></i> Новая задача
		</a>
	</div>
	<h2>Текущие задачи</h2>
	@if (count($tasks) > 0)
		<div class="panel panel-default">
			<div class="panel-heading">
				Текущая задача
			</div>
			<div class="panel-body">
				<table class="table table-striped task-table">
					<!-- Заголовок таблицы -->
					<thead>
						<th>Задача</th>
						<th>Действие</th>
					</thead>
					<!-- Тело таблицы -->
					<tbody>
						@foreach ($tasks as $task)
							<tr>
								<!-- Имя задачи -->
								<td class="table-text">
									<div>{{ $task->name }}</div>
								</td>
								<td>
									<!-- TODO: Кнопка Удалить -->
									<form action="{{ route('tasks.destroy', $task->id) }}"
									      method="POST">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										<button type="submit"
										        class="btn btn-danger">
											<i class="fa fa-btn fa-trash"></i>Удалить
										</button>
									</form>
								</td>
								<td>
									<!-- TODO: Кнопка Редактировать -->
									<a href="{{ route('tasks.edit', $task->id) }}">
										<button type="submit"
										        class="btn btn-primary">
											<i class="fa fa-btn fa-edit"></i>
											<text>Редактировать</text>
										</button>
									</a>
									{{--			<form action="{{ route('tasks.edit', $task->id) }}" method="GET">--}}
									{{--			    {{ csrf_field() }}--}}
									{{--			    {{ method_field('EDIT') }}--}}
									{{--			    <button type="submit" class="btn btn-primary">--}}
									{{--				<i class="fa fa-btn fa-edit"></i>Редактировать--}}
									{{--			    </button>--}}
									{{--			</form>--}}
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	@endif
@endsection

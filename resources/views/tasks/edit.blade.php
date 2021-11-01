@extends('layouts.app')

@section('content')
    <h2>Change Task</h2>
    <!-- Bootstrap шаблон... -->
    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')
    <!-- Форма новой задачи -->
        <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        {{method_field('PUT')}}

        <!-- Имя задачи -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Статья</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task" class="form-control" value="{{old('name') ?? $task->name}}">
                </div>
            </div>

            <div class="form-group">
                <label for="article" class="col-sm-3 control-label">Текст статьи</label>
                <div class="col-sm-6">
                    <input type="text" name="text" id="task" class="form-control" value="{{old('text') ?? $task->text}}">
                </div>
            </div>
            <!-- Кнопка добавления задачи -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-save"></i> save
                    </button>
                </div>
            </div>
        </form>
    </div>
    <a href="{{route('tasks.create')}}" class="btn btn-success"><i class="fa fa-save"></i>save task</a>
@endsection
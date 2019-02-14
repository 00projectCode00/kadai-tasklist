@extends('layouts.app')

@section('content')

    <h1>タスクID={{ $task->id }} の詳細ページ</h1>
    
    <p>{{ $task->content }}</p>
    
    {!! Form::model($task, ['route' => ['tasks.destroy', 'id' => $task->id], 'method' => 'delete']) !!}
    
    {!! Form::submit('タスクの削除') !!}
    
    {!! Form::close() !!}
    
    {!! link_to_route('tasks.edit', 'このタスクを編集する', ['id' => $task->id]) !!}
    
    {!! link_to_route('tasks.index', '一覧ページへ戻る') !!}
    
@endsection
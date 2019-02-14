@extends('layouts.app')

@section('content')

    <h1>タスクID={{ $task->id }} のタスク編集ページ</h1>
    
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!} 
    
        {!! Form::label('content', 'タスク:') !!}
    
        {!! Form::text('content') !!}
    
        {!! Form:: submit('更新') !!}
        
    {!! Form::close() !!}
    
    {!! link_to_route('tasks.show', 'キャンセル', ['id' => $task->id]) !!}
    
    {!! link_to_route('tasks.index', 'タスク一覧に戻る') !!}

@endsection
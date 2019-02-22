@extends('layouts.app')

@section('content')

    <h1>タスクID= " {{ $task->id }} " のタスク編集ページ</h1>
    
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!} 
    
        {!! Form::label('title', 'タスク名:') !!}
        {!! Form::text('title') !!}
        
        {!! Form::label('content', '内容:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status', '状態:') !!}
        {!! Form::select('status', array('free' => 'free', 'busy' => 'busy', 'complete' => 'complete')) !!}
        <!--{!! Form::text('status') !!}-->
    
        {!! Form:: submit('更新') !!}
        
    {!! Form::close() !!}
    
    {!! link_to_route('tasks.show', 'キャンセル', ['id' => $task->id]) !!}
    
    {!! link_to_route('tasks.index', 'タスク一覧に戻る') !!}

@endsection
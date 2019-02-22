@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        {!! Form::label('title', 'タスク名:') !!}
        {!! Form::text('title') !!}
        
        {!! Form::label('content', '内容:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status', '状態:') !!}
        {!! Form::select('status', array('free' => 'free', 'busy' => 'busy', 'complete' => 'complete')) !!}
        <!--{!! Form::text('status') !!}-->
         
        {!! Form::submit('登録') !!}
        
    {!! Form::close() !!}
    
    {!! link_to_route('tasks.index', '一覧ページへ戻る') !!}
    
@endsection
@extends('layouts.app')

@section('content')

    <h1>タスクID= {{ $task->id }}「{{ $task->title }} 」の詳細ページ</h1>
    
    <p>内容= [ {{ $task->content }} ] , タスクの状態= [ {{ $task->status }} ]</p>
    
    {!! Form::model($task, ['route' => ['tasks.destroy', 'id' => $task->id], 'method' => 'delete']) !!}
    
    {!! Form::submit('タスクの削除') !!}
    
    {!! Form::close() !!}
    
    {!! link_to_route('tasks.edit', 'このタスクを編集する', ['id' => $task->id]) !!}
    
    {!! link_to_route('tasks.index', '一覧ページへ戻る') !!}
    
@endsection
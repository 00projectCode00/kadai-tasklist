@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>
   
    @if ( count($tasks) > 0 )
        <ul>
            @foreach ($tasks as $task)
                <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} 「 {{ $task->title }} 」( {{ $task->content }} ) -----状態-----[ {{ $task->status }} ]
                </li>
            @endforeach
        </ul>
    @endif

    {!! link_to_route('tasks.create', 'タスクの新規作成') !!}

@endsection


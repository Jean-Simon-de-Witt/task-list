@extends('layouts.app')

@section('title', 'The list of tasks:')

@section('content')
    @forelse($tasks as $task)
        <div>
            <a href="{{route('tasks.show', ['task' => $task->id])}}">{{$task->title}}</a>
        </div>
    @empty
        <div>There are no tasks!</div>
    @endforelse

    <div>
        <a href="{{route('tasks.create')}}">Create Task</a>
    </div>

    @if ($tasks->count())
        <nav>
            {{$tasks->links()}}
        </nav>
    @endif
@endsection
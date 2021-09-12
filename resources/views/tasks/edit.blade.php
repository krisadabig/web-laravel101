@extends('layouts.main')

@section('content')
<div class="text-center">
    <a href="{{ route('tasks.index') }}" class=" hover:bg-green-300 ">ALL TASK</a>
</div>
<h1 class="text-center text-5xl py-3">EDIT TASKS</h1>

<form action="{{ route('tasks.update', ['task' => $task->id]) }}" method="POST" class="text-center space-y-3 ">
    @csrf
    @method('PUT')
    <div class="grid grid-cols-3 w-1/2 m-auto my-3">
        <label for="name" class="justify-self-end mr-8">Task Title</label>
        <input type="text" name="title" class="col-span-2 w-full py-1 px-3" value="{{ $task->title }}" placeholder="Task title" autocomplete="off">
        <label for="detail" class="justify-self-end my-4 mr-8">Detail</label>
        <input type="text" name="detail" class="col-span-2 my-4 w-full py-1 px-3" value="{{ $task->detail }}" placeholder="detail" autocomplete="off">
        <label for="due_date" class="justify-self-end mr-8">Due date</label>
        <input type="date" name="due_date" class="col-span-2 w-full py-1 px-3" value="{{ $task->due_date->format('Y-m-d')  }}" placeholder="due date" autocomplete="off">
    </div>
    <div class="text-xl">
    </div>
    <div>
        <button type="submit" class="bg-green-400 rounded-xl p-2 hover:bg-green-300">Confirm Edit</button>
    </div>
</form>
@endsection
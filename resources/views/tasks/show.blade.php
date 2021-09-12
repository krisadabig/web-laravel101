@extends('layouts.main')

@section('content')
<div class="w-2/5 m-auto flex-nowrap">
    <div class="text-center   items-end my-4">
        <a href="{{ route('tasks.index') }}" class=" hover:bg-green-300 ">ALL TASK</a>
        &nbsp&nbsp|&nbsp&nbsp
        <a href="{{ route('tasks.edit', ['task' => $task->id])  }}" class=" hover:bg-green-300">EDIT TASK</a>
    </div>
    <div class="items-end my-4 text-center">
        <span class="text-4xl font-serif">Task : </span>&nbsp&nbsp
        <span class="font-serif text-3xl"> {{ $task->title }}</span>
        <p class="text-lg">
            {{ $task->detail }}
        </p>
    </div>
    <div class=" text-xl my-4">
    </div>
    <div class="text-center text-xl text-red-500 my-4">Due Date : {{ $task->due_date->format('d-M-y') }}
    </div>
    <div class="border-t-2 border-indigo-300 py-3">
        <h1 class="text-center font-bold text-3xl font-serif">Delete Task</h1>
    </div>
    <div class=" ">
        <form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST" class="text-xl items-center space-x-4 font-bold flex whitespace-nowrap ">
            @method('DELETE')
            @csrf
            <label for="destroy" class="text-xl flex flex-nowrap">Type task title to delete</label>
            <input type="text" placeholder="Type task title to delete" name="title" class="my-4 p-3 ">
            <button type="submit" class="bg-red-500 rounded-full py-2 px-8  hover:bg-red-300">DELETE</button>
        </form>
    </div>
</div>
@endsection
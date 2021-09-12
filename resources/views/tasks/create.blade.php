@extends('layouts.main')

@section('content')
<div class="text-center">
    <a href="{{ route('tasks.index') }}" class=" hover:bg-green-300 ">ALL TASK</a>
</div>
<h1 class="text-center text-5xl py-3">CREATE TASK</h1>

<form action="{{ route('tasks.store') }}" method="POST" class="text-center space-y-3">
    @csrf
    <div class="text-xl grid grid-cols-3 w-1/2 m-auto my-3">
        <label for="name" class="justify-self-end mr-8 place-self-center">Task Title</label>
        <input type="text" name="title" class="col-span-2 w-full p-2 " placeholder="Task title" autocomplete="off">
        <label for="detail" class="justify-self-end mr-8 my-4 place-self-center">Detail</label>
        <input type="text" name="detail" class="col-span-2 w-full p-2 my-4" placeholder="Detail" autocomplete="off">
        <label for="due_date" class="justify-self-end mr-8 place-self-center">Due date</label>
        <input type="date" value="<?php echo date('Y-m-d'); ?>" name="due_date" class="col-span-2 w-full p-2" placeholder="detail" autocomplete="off">
    </div>
    <div>
        <button type="submit" class="text-xl bg-green-400 rounded-full px-4 py-2 hover:bg-green-300">Add Task</button>
    </div>
</form>

@endsection
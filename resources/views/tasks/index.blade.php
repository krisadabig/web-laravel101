@extends('layouts.main')

@section('content')
<div class='text-center'>
    <h2 class="text-5xl font-serif font-bold text-black  ">
        Tasks List
    </h2>
</div>

<div class="my-6 text-center">
    <a class="border-2 bg-green-300 px-4 py-2 shadow-lg hover:shadow-md" href="{{ route('tasks.create') }}">
        + New Task
    </a>
</div>
<div class='w-2/3 m-auto text-center'>
    <table class="w-full ">
        <thead>
            <tr class="text-md   text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                <th class="px-4 py-3">Name</th>
                <th class="px-4 py-3">Due Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr class="hover:bg-gray-200">
                <td class="px-4 py-3 border">
                    <a href="{{route('tasks.show', ['task' => $task->id])}}">

                        {{ $task->title }}
                    </a>
                </td>
                <td class="px-4 py-3 border">
                    {{ $task->due_date->format('d-M-y') }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
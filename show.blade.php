@extends('layout')

@section('content')
    <h1 class="title">{{ $clothes->title }}</h1>

    <div class="content">
        {{ $clothes->description }}
    
        <p>
            <a href="/projects/{{ $clothes->id }}/edit">Edit</a>
        </p>
    
    </div>


    @if ($clothes->tasks->count())
        <div>
            @foreach ($clothes->tasks as $task)
        
            <div>   
                <form method="POST" action="/tasks/{{$task->id}}">
                    @method('PATCH')
                    @csrf

                    <label class="checkbox" for="completed">
                        <input type="checkbox" name="completed" onChange="this.form.submit()">
                        {{ $task->description}}
                </form>

            </div>

            @endforeach

        </div>
        
    @endif

  
@endsection
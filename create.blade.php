@extends('layout')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create a  New Project</h1>

   <form method="POST" action="/projects">
    {{ csrf_field() }}
    <div class="field"> 
        
        <label class="label" for="title">Project Title</label>
        
        <div class="control">

            <input type="text" class="input" {{$errors->has('title') ? 'is-danger' : ''}} name="title" value="{{old('title')}}" required >

        </div>
    </div>

    <div class="field"> 
        
        <label class="label" for="description">Project Description</label>

        <div class="control">
        <textarea name="description" class="textarea" required>{{old('description')}}</textarea>
    </div>
  <div>

  <div class="field"> 
  <div class="control"> 
        <button type="submit" class="button is-link">Create Project</button>
        </div>

    @if ($errors->any())
        <div class="notification is-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            
            
            </ul>
        </div>
    @endif    
    </form>
</body>
@endsection
</html>
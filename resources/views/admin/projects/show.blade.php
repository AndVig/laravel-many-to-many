@extends ('layouts.app')

@section ('content')
<div class="container py-4">

    <div class="header-page d-flex justify-content-between align-items-center mb-3">
        <h1>{{$project->title}}</h1>
        <a href="{{route('admin.projects.edit', $project->id)}}" as="button" class="btn btn-primary">Edit</a>
        <!-- <button class="btn btn-primary">Edit</button> -->
    </div>


    <p>{{$project->content}}</p>
    <hr>
    
    Category: {{$project->type?->name}}
    
    <hr>
    <ul>
        @foreach($project->technologies as $technology)
        <li>{{$technology->name}}</li>
        @endforeach
    </ul>
    <hr>
    <a href="{{route('admin.projects.index')}}" class="btn btn-info">Torna alla lista dei project</a>
</div>
@endsection
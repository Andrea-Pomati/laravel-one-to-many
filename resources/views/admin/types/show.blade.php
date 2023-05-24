@extends('layouts.admin')

@section('content')

<div class="container py-3">

    <h1>Tutti i progetti di tipo {{$type->name}}</h1>

    <table class="mt-5 table table-striped mb-4">
        <thead>
            <th>
                Titolo
            </th>
            <th>
                Contenuto
            </th>
            <th>
                Slug
            </th>
            <th>
                Comandi
            </th>
        </thead>
    
        <tbody>
            @foreach($type->projects as $project)
            <tr>
                <td>{{$project->title}}</td>
                <td>{{$project->content}}</td>
                <td>{{$project->slug}}</td>
                <td><a href="{{route('admin.projects.show', $project->slug)}}"><i class="fa-solid fa-magnifying-glass"></i></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>   

</div>

@endsection
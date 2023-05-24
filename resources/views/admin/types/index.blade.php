@extends('layouts.admin')

@section('content')

    <div class>
        <h1>Tipi</h1>

        <table class="table table-striped">
            <thead>
                <th>Nome</th>
                <th>Descrizione</th>
                <th>Slug</th>
                <th>Comandi</th>
            </thead>

            <tbody>

                @foreach($types as $type)
                <tr>
                    <td>{{$type->name}}</td>
                    <td>{{$type->description}}</td>
                    <td>{{$type->slug}}</td>
                    <td><a href="{{route('admin.types.show', $type)}}"><i class="fa-solid fa-magnifying-glass"></i></a></td>
                </tr>
                @endforeach
            </tbody>


        </table>
    </div>

@endsection
@extends('layouts.admin')

@section('content')


<div class="container">
    <h1 class="mb-3">Crea un progetto</h1>
    <form action="{{route('admin.projects.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}">
            @error('title')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type_id">Tipo</label>
            <select name="type_id" id="Type_id" class="form-select">
                
                <option value="">Nessuna</option>

                @foreach ($types as $type)
                    <option value="{{$type->id}}"">{{$type->name}}</option>
                @endforeach



            </select>
        </div>

        

        <div class="mb-3">
            <label for="content">Contenuto del progetto</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control @error('content') is-invalid @enderror">{{old('content')}}</textarea>
            @error('content')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <button class="btn btn-primary" type="submit">Aggiungi</button>
    </form>
</div>

@endsection
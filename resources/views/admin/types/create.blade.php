@extends('layouts.admin')

@section('content')
<div class="container">
    
    <h1 class="mb-3">Aggiungi un tipo</h1>

    <form action="{{route('admin.types.store')}}" method="POST">
        @csrf
        
        
        <div class="mb-3">
            <label for="name">Nome</label>
            <input id="name" name="name" class="form-control" type="text">
        </div>
        
        <div class="mb-3">
            <label for="description">Descrizione</label>
            <textarea id="description" name="description" class="form-control"></textarea>
        </div>
        
        <button class="btn btn-primary" type="submit">Aggiungi</button>

        </form>
        
</div>



@endsection
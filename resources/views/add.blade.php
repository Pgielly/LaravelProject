@extends('layouts.base')
@section('css', '/css/add.css')


@section('title', 'Ajout')

@section('content')
    <h2>Ajouter une statuette</h2>
    <form action="/add" method="post">
        @csrf
        <div>
            <label for="name">Le nom de la statuette</label>
            <input class="input"type="text" name="name" id="" value="Victoire de Samothrace">
        </div>

        <div>
            <label for="creation_date">L'année de création</label>
            <input class="input" type="number" name="creation_date" id="" value="1863">
        </div>

        <div>
            <label for="origin_country">Le pays d'origine</label>
            <input class="input" type="text" name="origin_country" id="" value="Samothrace">
        </div>

        <div>
            <label for="price">Son prix</label>
            <input class="input" type="number" name="price" id="" value="12303">
        </div>
        
        <div>
            <label for="creator">Le nom de son créateur</label>
            <input class="input" type="text" name="creator" id="" value="Un super mec">
        </div>

        <input class="btn" type="submit" value="Ajouter !">
    </form>
@endsection

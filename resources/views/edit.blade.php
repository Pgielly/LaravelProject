@extends('layouts.base')
@section('css', '/css/edit.css')

@section('title', 'Editer')

@section('content')
    <h2>Éditer votre statue:</h2>
    <form action="/update" method="post">
        @csrf
        <label for="name"> Changez le nom</label>
        <input class="input" type="text" name="name" id="" value="{{$statue->name}}">

        <label for="creation_date">Changez l'année de création</label>
        <input class="input" type="text" name="creation_date" id="" value="{{$statue->creation_date}}">

        <label for="origin_country">Changez le pays d'origine</label>
        <input class="input" type="text" name="origin_country" id="" value="{{$statue->origin_country}}">

        <label for="price"> Changez son prix</label>
        <input class="input" type="text" name="price" id="" value="{{$statue->price}}">

        <label for="creator">Changer son créateur</label>
        <input class="input" type="text" name="creator" id="" value="{{$statue->creator}}">

    <input type="hidden" name="id" value="{{ $statue->id}}">
        <input class="btn" type="submit" value="Changez !">
    </form>
@endsection
@extends('layouts.base')
@section('css', '/css/list.css')


@section('title', 'Liste')

@section('content')

<h2>Liste des statues que l'on accueille :</h2>

<table>
    <thead>
        <tr>
            <th> Nom </th>
            <th> Date de création </th>
            <th> Pays d'origine </th>
            <th> Prix </th>
            <th> Créateur </th>
            <th> Supprimer </th>
            <th> Éditer </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($statues as $statue)
            <tr>
                <td> {{ $statue->name }} </td>
                <td> {{ $statue->creation_date }} </td>
                <td> {{ $statue->origin_country }} </td>
                <td> {{ $statue->price }} </td>
                <td> {{ $statue->creator }} </td>
                <td> 
                    <form action="/delete" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $statue->id }}">
                        <input type="submit" value="✖️"> 
                    </form>
                </td>
                <td>
                    <form action="/edit" method="POST">
                        @csrf
                    <input type="hidden" name="id" value="{{ $statue->id }}">
                        <input type="submit" value="✏️">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>



@endsection

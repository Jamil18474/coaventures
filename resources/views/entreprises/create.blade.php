@extends('layouts.app')

@section('page_title', "Création d'une entreprise")
@section('content')
    @vite('resources/css/entreprise.create.css')
    @vite(['resources/js/entreprise.create.js'])

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <section class="formulaire">
        <form action="{{ route('entreprise.store') }}" method="POST">
            @csrf
            @method('POST')
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <br><label for="nom">Le nom de votre enseigne :</label><br>
            <input type="text" id="nom" name="nom"><br>
            <label for="siret">Numero SIRET :</label><br>
            <input type="number" id="siret" name="siret"><br>
            <label for="activite">Activité :</label><br>
            <input type="text" id="activite" name="activite"><br>
            <label for="password">Mot de passe :</label><br>
            <input type="" id="password" name="password"><br>
            
            <input type="submit" value="Créer l'entreprise">

        </form>
    </section>
@endsection
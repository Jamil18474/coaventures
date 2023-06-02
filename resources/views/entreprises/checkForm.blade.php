@extends('layouts.app')

@section('page_title', "Connexion")
@section('content')
    @vite('resources/css/entreprise.create.css')
    @vite(['resources/js/entreprise.create.js'])

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <section class="formulaire">
        <form action="{{ route('entreprise.checkForm') }}" method="POST">
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
            <label for="siret">Numero SIRET :</label><br>
            <input type="number" id="siret" name="siret"><br>
            <label for="password">Mot de passe :</label><br>
            <input type="password" id="password" name="password"><br>
            <input type="submit" value="Se connecter">

        </form>
        <a href="{{ route('entreprise.create') }}">{{ __('Créer une entreprise') }}</a>
    </section>
@endsection
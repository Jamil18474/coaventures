@extends('layouts.app')

@section('content')
    @vite('resources/css/home.css')
    @vite(['resources/js/home.js'])
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Accueil</title>
        

        @vite(['resources/js/app.js'])

        
    </head>

    
   
    

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>

    </body>
@endsection

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Projeto Laravel - Cadastro de Funcionários</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <strong>Cadastro de usuários</strong>
                    </a>   
                    <div class="d-flex">
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Início</a>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-success">Entrar</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn btn-outline-primary">Registre-se</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>       
                </div>
            </nav>
        </div>

        <div class="container mx-auto">
            <div class="row ">
              <div class="col-4 my-auto">
                <p class="h2 bold"><strong>Bem vindo ao site de cadastramento de funcionários</strong></p>
                <div class="row mt-4">
                    @if (Route::has('login'))
                            @auth  
                            @else 
                                <div class="col-6">
                                    <a href="{{ route('login') }}" class="btn btn-success float-end">Entrar</a>
                                </div>
                                <div class="col-6">
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn btn-outline-primary float-start">Registre-se</a>
                                    @endif
                                </div>
                            @endauth
                    @endif
                </div>
              </div>
              <div class="col-4">
                <div class="mx-auto">
                    <img src="https://animateriastudios.com/wp-content/uploads/2019/10/exemplo-de-vetor2.jpg" width="600px">
                </div>
              </div>
            </div>
        </div>
    </body>
</html>

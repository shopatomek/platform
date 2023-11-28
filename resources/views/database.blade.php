@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Database') }}</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Here will be some data') }}
                    <br>
                    <br>

                    <div class="row justify-content-center"> <!-- Utworzenie wiersza, który będzie wyśrodkowany -->
                        <div class="col-md-6"> <!-- Utworzenie kolumny dla Users -->
                            <div class="card">
                                <div class="card-body">
                                    Users Count:
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3"> <!-- Utworzenie kolumny dla Name -->
                            <div class="card">
                                <div class="card-body">
                                    Name
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3"> <!-- Utworzenie kolumny dla Email -->
                            <div class="card">
                                <div class="card-body">
                                    Email
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
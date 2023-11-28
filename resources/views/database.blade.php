@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Database') }}</div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    Users Count: {{ $usersCount }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    Name
                                </div>
                            </div>
                            @foreach($users as $user)
                            <div class="card">
                                <div class="card-body">
                                    {{ $user->name }}
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    Email
                                </div>
                            </div>
                            @foreach($users as $user)
                            <div class="card">
                                <div class="card-body">
                                    {{ $user->email }}
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
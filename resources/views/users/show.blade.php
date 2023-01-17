@extends('layouts.app')
@section('content')
    <div class="container center">
        <div style="display: flex; align-items: center; justify-content: center; height: 100vh">
            <div class="mx-auto" style="width: 50%; height: 40%;">
                <div class="card text-center">
                    <div class="card-body">
                        <ul style="display: inline-block;
                        text-align: left; ">
                        <li>Name {{ $user->id }}</li>
                        <li>Phone {{ $user->phone }}</li>
                        <li>Email {{ $user->email }}</li>
                        <li>Code {{ $user->code }}</li>
                        <li>Guia {{ $user->guiaId ?? 'null' }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

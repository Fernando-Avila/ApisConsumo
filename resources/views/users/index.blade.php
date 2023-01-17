@extends('layouts.app')
@section('content')
    <div class="container">
        <div style="display: flex; align-items: center; justify-content: center; height: 100vh">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <form action="{{ route('clientapi.search') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="search">Search ID</label>
                                <div class="col-2">
                                    <input type="text" name="search" id="search" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </div>

                </div>
                <div class="table-responsive">
                    <table
                        class="table table-striped
                table-hover
                table-borderless
                table-primary
                align-middle">

                        <thead class="table-light">

                            <tr>
                                <th>ID</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Code</th>
                                <th>Roll</th>
                                <th>Guia</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @if (isset($users))
                                @foreach ($users as $user)
                                    <tr class="table-primary">
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->code }}</td>
                                        <td>{{ $user->rol->nombre }}</td>
                                        <td>{{ $user->guiaId ?? 'null' }}</td>
                                        <td><a href="{{ route('clientapi.show', ['clientapi' => $user->id]) }}"
                                                type="btn btn-success"> Show </a></td>
                                    </tr>
                                @endforeach
                            @elseif (isset($user))
                                <tr class="table-primary">
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->code }}</td>
                                    <td>{{ $user->rolId }}</td>
                                    <td>{{ $user->guiaId ?? 'null' }}</td>
                                    <td><a href="{{ route('clientapi.show', ['clientapi' => $user->id]) }}"
                                            type="btn btn-success"> Show </a></td>
                                </tr>
                            @else
                                <tr class="table-primary">
                                    <td colspan="7">No hay usuarios</td>
                                </tr>
                            @endif
                        </tbody>

                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection

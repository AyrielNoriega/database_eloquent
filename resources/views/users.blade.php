@extends('base')

@section('content')



        <header class="shadow p-3 mb-5 bg-body rounded">
            <div class=" d-flex justify-content-between">
                <div>

                <h1>Usuarios</h1>
                <h6 class="text-muted">hasOne</h6>

                </div>

                <div>
                {{-- <a href="{{ route('create') }}" type="button"  class="btn btn-primary mt-2">Crear</a> --}}
                </div>
            </div>

        </header>


        <table class="table table-success table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Usuario</th>
                <th scope="col">email</th>
                {{-- <th scope="col">City</th> --}}
                <th scope="col">Activo/inactivo</th>
                <th scope="col">Tel</th>
                {{-- <th scope="col" class="tex1t-center">&nbsp;</th> --}}
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>
                            <a href="{{ route('info', [ 'id' => $user->id ]) }}">
                                {{ $user->name }}
                            </a>
                        </td>
                        <td>{{ $user->email }}</td>
                        {{-- <td>{{ $user->city }}</td> --}}

                        <td>

                            @if ( $user->active )
                                <span class="badge bg-success">Activo</span>
                            @else
                                <span class="badge bg-danger">Inactivo</span>
                            @endif

                        </td>
                        <td>{{ $user->phone->phone }}</td>

                        <td class="text-center">

                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <button type="button" class="btn btn-primary btn-sm">Editar</button>
                                <button type="button" class="btn btn-danger btn-sm">Borrar</button>
                            </div>

                        </td>
                    </tr>
                @endforeach





            </tbody>
        </table>
        <div>

             {{-- {{ $users->links() }} --}}
        </div>

@endsection

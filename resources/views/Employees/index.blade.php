@extends('layout')
@section('content')
    <div class="d-flex justify-content-center mt-5">
        <div class="card" style="width:90%;">
            <div class="card-body">
                <div class="mb-2">
                    <h2 class="card-title">Lista de empleados</h2>
                </div>
                <div class="d-flex justify-content-end mb-3 w-100">
                    <a href="{{ route('create') }}" class="btn btn-primary"><i class="bi bi-person-plus-fill"></i> Crear</a>

                </div>
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width:20%"><i class="bi bi-person-fill"></i> Nombre</th>
                                    <th style="width:20%"><i class="bi bi-envelope"></i> Email</th>
                                    <th style="width:10%"><i class="bi bi-gender-ambiguous"></i> Sexo</th>
                                    <th style="width:20%"><i class="bi bi-briefcase-fill"></i> Área</th>
                                    <th style="width:10%"><i class="bi bi-envelope-fill"></i> Boletin</th>
                                    <th class="text-center" style="width:10%">Modificar</th>
                                    <th class="text-center" style="width:10%">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                    <tr>
                                        <th>{{ $employee->name }}</th>
                                        <td>{{ $employee->email }}</td>
                                        <td>{{ $employee->gender }}</td>
                                        <td>{{ $employee->area->name }}</td>
                                        <td>{{ $employee->bulletin == 1 ? 'Si' : 'No' }}</td>
                                        <td class="text-center fs-4"><i class="bi bi-pencil-square"></i></td>
                                        <td class="text-center fs-4">
                                            <form method="POST" action="{{ route('destroy', $employee) }}">
                                                @csrf
                                                {{-- @method('DELETE') --}}
                                                <button class="btn btn-warning" type="submit">
                                                    <i class="bi bi-trash-fill"></i> Eliminar
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

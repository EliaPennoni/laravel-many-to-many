@extends('layouts.app')

@section('page-title', 'Tutti le tecnologie')

@section('main-content')
    <div class="row">
        <div class="col">
            <h1>tutti le tecnologie</h1>
            <a href="{{ route('admin.technologies.create') }}" class="btn btn-success w-100 mb-3">crea</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>

                        <th scope="col">Data</th>


                        <th scope="col">Vai</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($technologies as $technology)
                        <tr>
                            <th scope="row">{{ $technology->id }}</th>
                            <td> {{ $technology->name }} </td>
                            <td>{{ $technology->created_at }}</td>

                            <td>
                                <a href="{{ route('admin.technologies.show', ['technology' => $technology->id]) }}"
                                    class="btn btn-success">Visualizza</a>
                            </td>
                            <td>
                                <a href="{{ route('admin.technologies.edit', ['technology' => $technology->id]) }}"
                                    class="btn btn-warning">Aggiorna</a>
                            </td>
                            <td>
                                <form action="">
                                    <a href="{{ route('admin.technologies.edit', ['technology' => $technology->id]) }}"
                                        class="btn btn-danger">Elimina</a>
                                </form>

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

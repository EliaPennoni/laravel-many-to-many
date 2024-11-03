@extends('layouts.app')

@section('page-title', 'Tutti i progetti')

@section('main-content')
    <div class="row">
        <div class="col">
            <h1>Tutti i progetti</h1>
            <a href="{{ route('admin.projects.create') }}" class="btn btn-success w-100 mb-3">Crea</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Immagine</th>
                        <th scope="col">Data Creazione</th>
                        <th scope="col">Tecnologie</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <th scope="row">{{ $project->id }}</th>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->slug }}</td>
                            <td>{{ $project->price }}</td>
                            <td>
                                @if ($project->type)
                                    <a href="{{ route('admin.types.show', ['type' => $project->type->id]) }}">
                                        {{ $project->type->name }}
                                    </a>
                                @else
                                    -
                                @endif
                            </td>
                            <td>{{ $project->description }}</td>
                            <td>{{ $project->image }}</td>
                            <td>{{ $project->created_at->format('d/m/Y') }}</td>
                            <td>
                                @foreach ($project->technologies as $technology)
                                    <a href="{{ route('admin.technologies.show', ['technology' => $technology->id]) }}"
                                        class="badge rounded-pill badge-primary">
                                        {{ $technology->name }}
                                    </a>
                                @endforeach
                            </td>
                            <td>
                                <a href="{{ route('admin.projects.show', ['project' => $project->id]) }}"
                                    class="btn btn-success">Visualizza</a>
                                <a href="{{ route('admin.projects.edit', ['project' => $project->id]) }}"
                                    class="btn btn-warning">Aggiorna</a>
                                <form action="{{ route('admin.projects.destroy', ['project' => $project->id]) }}"
                                    method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Elimina</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

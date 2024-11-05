@extends('layouts.app')

@section('page-title', 'Il mio progetto')

@section('main-content')
    <div class="row">
        <div class="col">
            <h1>Il mio progetto</h1>

            <ul>

                <li>
                    ID:{{ $technology->id }}</th>
                </li>

                <li>
                    Titolo: {{ $technology->name }}
                </li>

                <li>
                    Data:{{ $technology->created_at }}
                </li>
                <li>
                    Progetti collegati:
                    <ul>
                        @foreach ($technology->projects as $project)
                            <li>
                                <a href="{{ route('admin.projects.show', ['project' => $project->id]) }}">
                                    {{ $project->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>

            </ul>


        </div>
    </div>
@endsection

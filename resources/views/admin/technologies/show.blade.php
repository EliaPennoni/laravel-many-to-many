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
                    Titolo: {{ $technology->title }}
                </li>

                <li>
                    Data:{{ $technology->created_at }}
                </li>

            </ul>


        </div>
    </div>
@endsection

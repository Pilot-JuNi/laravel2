@extends('layouts.app')

@section('title', 'Kurs Übersicht')

@section('content')
<div class="container">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="row mb-4">
        <div class="col-md-6">
            <h1>Kurs Übersicht</h1>
        </div>
        {{-- optionally add create button if desired later --}}
        {{-- <div class="col-md-6 text-end">
            <a href="{{ route('kurse.create') }}" class="btn btn-primary">+ Neuer Kurs</a>
        </div> --}}
    </div>

    @if($kurse->count() > 0)
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Kursname</th>
                        <th>Beschreibung</th>
                        <th>Anzahl Studenten</th>
                        <th>Lehrer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kurse as $kurs)
                        <tr>
                            <td>{{ $kurs->kursname ?? '-' }}</td>
                            <td>{{ $kurs->beschreibung ?? '-' }}</td>
                            <td>{{ $kurs->anzahl_studenten ?? '-' }}</td>
                            <td>
                                @if($kurs->teacher)
                                    <a href="{{ route('teachers.show', $kurs->teacher->id) }}">
                                        {{ $kurs->teacher->name }}
                                    </a>
                                @else
                                    -
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="alert alert-info">
            Keine Kurse vorhanden.
        </div>
    @endif
</div>
@endsection

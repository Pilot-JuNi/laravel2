@extends('layouts.app')

@section('title', $kurs->kursname)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">{{ $kurs->kursname }}</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="fw-bold">Kursname:</label>
                        <p>{{ $kurs->kursname }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="fw-bold">Beschreibung:</label>
                        <p>{{ $kurs->beschreibung ?? '-' }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="fw-bold">Anzahl Studenten:</label>
                        <p>{{ $kurs->anzahl_studenten }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="fw-bold">Anzahl Stunden:</label>
                        <p>{{ $kurs->anzahl_stunden }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="fw-bold">Lehrer:</label>
                        <p>
                            @if($kurs->teacher)
                                <a href="{{ route('teachers.show', $kurs->teacher->id) }}">
                                    {{ $kurs->teacher->name }}
                                </a>
                            @else
                                -
                            @endif
                        </p>
                    </div>
                    
                    <div class="d-flex gap-2">
                        <a href="{{ route('kurse.edit', $kurs->id) }}" class="btn btn-warning">Bearbeiten</a>
                        <form action="{{ route('kurse.destroy', $kurs->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Möchten Sie diesen Kurs wirklich löschen?')">Löschen</button>
                        </form>
                        <a href="{{ route('kurse.index') }}" class="btn btn-secondary">Zurück</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

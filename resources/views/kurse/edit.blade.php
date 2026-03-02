@extends('layouts.app')

@section('title', 'Kurs bearbeiten')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Kurs bearbeiten</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('kurse.update', $kurs->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label for="kursname" class="form-label">Kursname:</label>
                            <input type="text" class="form-control @error('kursname') is-invalid @enderror" id="kursname" name="kursname" value="{{ old('kursname', $kurs->kursname) }}" required>
                            @error('kursname')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="beschreibung" class="form-label">Beschreibung:</label>
                            <textarea class="form-control @error('beschreibung') is-invalid @enderror" id="beschreibung" name="beschreibung" rows="3">{{ old('beschreibung', $kurs->beschreibung) }}</textarea>
                            @error('beschreibung')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="anzahl_studenten" class="form-label">Anzahl Studenten:</label>
                            <input type="number" class="form-control @error('anzahl_studenten') is-invalid @enderror" id="anzahl_studenten" name="anzahl_studenten" value="{{ old('anzahl_studenten', $kurs->anzahl_studenten) }}" min="0" max="30" required>
                            @error('anzahl_studenten')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="anzahl_stunden" class="form-label">Anzahl Stunden:</label>
                            <input type="number" class="form-control @error('anzahl_stunden') is-invalid @enderror" id="anzahl_stunden" name="anzahl_stunden" value="{{ old('anzahl_stunden', $kurs->anzahl_stunden) }}" min="0" required>
                            @error('anzahl_stunden')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="teacher_id" class="form-label">Lehrer:</label>
                            <select class="form-control @error('teacher_id') is-invalid @enderror" id="teacher_id" name="teacher_id" required>
                                <option value="">-- Lehrer wählen --</option>
                                @foreach($teachers as $teacher)
                                    <option value="{{ $teacher->id }}" {{ old('teacher_id', $kurs->teacher_id) == $teacher->id ? 'selected' : '' }}>
                                        {{ $teacher->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('teacher_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">Speichern</button>
                            <a href="{{ route('kurse.index') }}" class="btn btn-secondary">Abbrechen</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

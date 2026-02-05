@extends('layouts.app')

@section('title', 'Lehrer bearbeiten')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Lehrer bearbeiten</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('teachers.update', $teacher->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $teacher->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="kuerzel" class="form-label">Kürzel:</label>
                            <input type="text" class="form-control @error('kuerzel') is-invalid @enderror" id="kuerzel" name="kuerzel" value="{{ old('kuerzel', $teacher->kuerzel) }}" required maxlength="3">
                            @error('kuerzel')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="deputat" class="form-label">Deputat:</label>
                            <input type="number" class="form-control @error('deputat') is-invalid @enderror" id="deputat" name="deputat" value="{{ old('deputat', $teacher->deputat) }}">
                            @error('deputat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">Speichern</button>
                            <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Abbrechen</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

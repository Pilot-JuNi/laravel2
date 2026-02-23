@extends('layouts.app')

@section('title', $teacher->name)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">{{ $teacher->name }}</h5>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <p class="text-muted mb-1">Name</p>
                            <h6>{{ $teacher->name }}</h6>
                        </div>
                        <div class="col-md-6">
                            <p class="text-muted mb-1">Kürzel</p>
                            <h6><span class="badge bg-info">{{ $teacher->kuerzel }}</span></h6>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <p class="text-muted mb-1">Deputat</p>
                            <h6>{{ $teacher->deputat ?? '-' }}</h6>
                        </div>
                        <div class="col-md-6">
                            <p class="text-muted mb-1">Erstellt am</p>
                            <h6>{{ optional($teacher->created_at)->format('d.m.Y H:i') ?? '-' }}</h6>
                        </div>
                    </div>

                    @if($teacher->updated_at && $teacher->updated_at != $teacher->created_at)
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <p class="text-muted mb-1">Zuletzt bearbeitet am</p>
                                <h6>{{ optional($teacher->updated_at)->format('d.m.Y H:i') ?? '-' }}</h6>
                            </div>
                        </div>
                    @endif

                    <div class="d-flex gap-2">
                        <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-primary">Bearbeiten</a>
                        <a href="{{ route('teachers.confirmDelete', $teacher->id) }}" class="btn btn-danger">Löschen</a>
                        <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Zurück</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('title', 'Lehrer löschen - Bestätigung')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-danger">
                <div class="card-header bg-danger text-white">
                    <h5 class="mb-0">Lehrer löschen - Bestätigung erforderlich</h5>
                </div>

                <div class="card-body">
                    <p class="lead">Möchten Sie den folgenden Lehrer wirklich löschen?</p>
                    
                    <div class="alert alert-warning" role="alert">
                        <strong>⚠️ Warnung:</strong> Diese Aktion kann nicht rückgängig gemacht werden!
                    </div>

                    <div class="card mb-4 bg-light">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="text-muted mb-1">Name</p>
                                    <h6>{{ $teacher->name }}</h6>
                                </div>
                                <div class="col-md-4">
                                    <p class="text-muted mb-1">Kürzel</p>
                                    <h6><span class="badge bg-info">{{ $teacher->kuerzel }}</span></h6>
                                </div>
                                <div class="col-md-4">
                                    <p class="text-muted mb-1">Deputat</p>
                                    <h6>{{ $teacher->deputat ?? '-' }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-lg">Ja, unwiederbringlich löschen</button>
                        </form>
                        <a href="{{ route('teachers.index') }}" class="btn btn-secondary btn-lg">Abbrechen</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

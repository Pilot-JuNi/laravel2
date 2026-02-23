@extends('layouts.app')

@section('title', 'Lehrer Übersicht')

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
            <h1>Lehrer Übersicht</h1>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('teachers.create') }}" class="btn btn-primary">+ Neuer Lehrer</a>
        </div>
    </div>

    @if($teachers->count() > 0)
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Kürzel</th>
                        <th>Deputat</th>
                        <th class="text-end">Aktionen</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($teachers as $teacher)
                        <tr>
                            <td>
                                <a href="{{ route('teachers.show', $teacher->id) }}">{{ $teacher->name ?? '-' }}</a>
                            </td>
                            <td>{{ $teacher->kuerzel ?? '-' }}</td>
                            <td>{{ $teacher->deputat ?? '-' }}</td>
                            <td class="text-end">
                                <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-sm btn-outline-primary">Bearbeiten</a>
                                <a href="{{ route('teachers.confirmDelete', $teacher->id) }}" class="btn btn-sm btn-outline-danger">Löschen</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="alert alert-info">
            Keine Lehrer vorhanden. <a href="{{ route('teachers.create') }}">Fügen Sie einen neuen Lehrer hinzu.</a>
        </div>
    @endif
</div>
@endsection   
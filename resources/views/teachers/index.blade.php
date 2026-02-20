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
        <div class="row">
            @foreach($teachers as $teacher)
                <div class="col-md-6 col-lg-4 mb-4">
                    <x-teacher-card :teacher="$teacher" />
                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-info">
            Keine Lehrer vorhanden. <a href="{{ route('teachers.create') }}">Fügen Sie einen neuen Lehrer hinzu.</a>
        </div>
    @endif
</div>
@endsection   
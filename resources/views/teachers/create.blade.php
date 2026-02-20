@extends('layouts.app')

@section('title', 'Neuer Lehrer')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Neuen Lehrer hinzufügen</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('teachers.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="kuerzel" class="form-label">Kürzel:</label>
                            <input type="text" class="form-control @error('kuerzel') is-invalid @enderror" id="kuerzel" name="kuerzel" value="{{ old('kuerzel') }}" required maxlength="3">
                            @error('kuerzel')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="deputat" class="form-label">Deputat:</label>
                            <input type="number" class="form-control @error('deputat') is-invalid @enderror" id="deputat" name="deputat" value="{{ old('deputat') }}">
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


        <!--

<x-layout>
 
    <h1>Lehrer einstellen</h1>
    <form method="POST" action="{{route('teachers.store')}}">
        @csrf
        <x-input-field label="Name" name="name" required />
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <x-input-field label="Kürzel" name="kuerzel" />
            <x-input-field label="Deputat" name="deputat" type="number" />
        </div>
        <div class="pt-2 flex justify-end gap-3">
            <a href="{{route('teachers.index')}}">Abbruch</a>
            <button type="submit">Speichern</button>
        </div>
 
 
 
 
 
 
         <label>Name</label>
        <input type="text" name="name" required>
 
        <label>Kürzel</label>
        <input type="text" name="kuerzel">
 
        <label>Deputat</label>
        <input type="number" name="deputat">
        <button type="submit">Knopf</button> 
    </form>
</x-layout>   -->
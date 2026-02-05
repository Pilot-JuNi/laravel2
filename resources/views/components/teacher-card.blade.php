<div class="card h-100 shadow-sm">
    <div class="card-body">
        <h5 class="card-title text-primary">
            <a href="{{ route('teachers.show', $teacher->id) }}" class="text-decoration-none text-primary">{{ $teacher->name }}</a>
        </h5>
        <div class="card-text">
            <p class="mb-2"><strong>Kürzel:</strong> <span class="badge bg-info">{{ $teacher->kuerzel ?? '-' }}</span></p>
            <p class="mb-0"><strong>Deputat:</strong> {{ $teacher->deputat ?? '-' }}</p>
        </div>
    </div>
    <div class="card-footer bg-light">
        <div class="d-grid gap-2">
            <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-sm btn-outline-primary">Bearbeiten</a>
            <a href="{{ route('teachers.confirmDelete', $teacher->id) }}" class="btn btn-sm btn-outline-danger">Löschen</a>
        </div>
    </div>
</div>
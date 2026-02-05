<div class="teacher-card">
    <div class="teacher-meta">
        <strong>{{ $teacher->name }}</strong>
        <div>Kürzel: {{ $teacher->kuerzel ?? '-' }}</div>
        <div>Deputat: {{ $teacher->deputat ?? '-' }}</div>
    </div>
    <div class="teacher-actions">
        <a href="{{ route('teachers.edit', $teacher->id) }}">Bearbeiten</a>
        <a href="{{ route('teachers.confirmDelete', $teacher->id) }}">Löschen</a>     
    </div>
</div>
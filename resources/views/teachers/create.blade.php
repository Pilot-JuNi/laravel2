<x-layout>

<H1>Create</H1>

<form action="{{ route('teachers.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="Kürzel">Kürzel:</label>
        <input type="text" id="Kürzel" name="Kürzel" required>
    </div>
     <div>
        <label for="Deputat">Deputat:</label>
        <input type="number" id="Deputat" name="Deputat" required>
    </div>
    <button type="submit">Create Teacher</button>
</form>

</x-layout>
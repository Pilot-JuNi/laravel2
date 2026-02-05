<x-layout>

<h1>Index</h1>

<ul> 
@foreach($teachers as $teacher)
    <li>
        <x-teacher-card :teacher="$teacher" />
    </li>
@endforeach
</ul>

</x-layout>
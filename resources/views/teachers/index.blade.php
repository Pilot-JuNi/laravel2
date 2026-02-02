<h1>Index</h1>

<ul> 
@foreach($teachers as $teacher)
<li>
    <h3>
        {{$teacher->name}}
    </h3>
</li>
@endforeach
</ul>
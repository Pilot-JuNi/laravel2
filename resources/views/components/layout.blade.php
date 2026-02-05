<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('teachers.index')}}">Teachers</a>
            <a href="{{ route('teachers.create')}}">Create Teacher</a>
        </nav>
    </header>

    <main>
        {{ $slot }}
    </main>
</body>
</html>
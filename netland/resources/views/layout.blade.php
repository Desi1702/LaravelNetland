<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netland</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Netland</a>
            <a class="btn btn-outline-light" href="{{ route('media.index') }}">Media</a>
            <a class="btn btn-outline-light" href="{{ route('actors.index') }}">Acteurs</a>
            <form class="d-flex ms-auto" method="GET" action="{{ route('media.search') }}">
                <input class="form-control me-2" type="search" name="query" placeholder="Zoeken..." aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Zoeken</button>
            </form>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>

</html>
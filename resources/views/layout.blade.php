<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <script src="{{ asset("js/app.js") }}" defer></script>
    <title>Giant Book Supplier</title>
</head>
<body class="min-vh-100 d-flex flex-column">

    <header class="container-fluid bg-warning py-4">
        <p class="fs-1 text-center text-light">Giant Book Supplier</p>
    </header>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active text-primary" aria-current="page" href="/books">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-primary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu">
                    @foreach ($categories as $category)
                    <li><a class="dropdown-item" href="/categories/{{ $category->id }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link text-primary" href="/publishers">Publisher</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-primary" href="/contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="flex-shrink-0">@yield('content')</div>

    <footer class="container-fluid bg-primary w-75 mt-auto">
        <p class="text-center text-light mb-0">&copy; Happy Book Store 2022</p>
    </footer>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HealthMart - @yield('title', 'Healthcare Store')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="/">HealthMart</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="/products">Medicines</a></li>
                <li class="nav-item"><a class="nav-link" href="/cart">Cart</a></li>
                <li class="nav-item"><a class="nav-link" href="/profile">Profile</a></li>
            </ul>
            <div class="d-flex gap-2">
                <a class="btn btn-outline-primary" href="/login">Login</a>
                <a class="btn btn-primary" href="/register">Register</a>
            </div>
        </div>
    </div>
</nav>

<main class="py-4">
    @yield('content')
</main>

<footer class="bg-white border-top py-4">
    <div class="container d-flex flex-wrap justify-content-between">
        <div>
            <h6 class="fw-bold">HealthMart</h6>
            <p class="text-muted mb-0">Trusted online pharmacy for your daily wellness.</p>
        </div>
        <div>
            <p class="text-muted mb-0">Support: care@healthmart.test</p>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

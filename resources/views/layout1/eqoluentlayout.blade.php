<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eqoluent Model</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>

    <header class="bg-dark text-white text-center py-3">
        <h1 class="m-0">Eqoluent</h1>
    </header>

    @yield('content');

    <footer class="bg-dark text-white text-center py-3 mt-4">
        <p class="m-0">&copy; {{ date('Y') }} Eqoluent. All rights reserved.</p>
    </footer>
</body>
</html>
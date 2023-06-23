<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CNweb</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <header style="display: flex; padding: 20px 0; justify-content: space-around; align-items: center; border-bottom: inset;">
        <div>
            <i class="fa-solid fa-user"></i>
            <nav style="display: inline-block;">NguyenMay</nav>
        </div>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('students.index') }}">Student</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link link-light bg-danger" href="#">Logout</a>
            </li>
        </ul>
    </header>
    @yield('content')
</body>

</html>

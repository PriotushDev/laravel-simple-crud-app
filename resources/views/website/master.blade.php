<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- ===== HEADER / NAVBAR ===== -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="{{route('student.home')}}">Student Management</a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{route('student.add')}}">Add Student</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('student.manage')}}">Manage Student</a></li>
            </ul>
        </div>
    </div>
</nav>

@yield('body')

<!-- ===== FOOTER ===== -->
<footer class="bg-dark text-white text-center py-3">
    <small>© 2026 Student Management System</small>
</footer>

</body>
</html>

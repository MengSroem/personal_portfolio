<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Personal Portfolio')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="container">
            <a href="/#home" class="logo">SROEM MENG</a>
            <ul class="nav-menu">
                <li><a href="/#home" class="nav-link">Home</a></li>
                <li><a href="/#about" class="nav-link">About</a></li>
                <li><a href="/#education" class="nav-link">Education</a></li>
                <li><a href="/#skills" class="nav-link">Skills</a></li>
                <li><a href="/#projects" class="nav-link">Projects</a></li>
                <li><a href="/#experience" class="nav-link">Experience</a></li>
                <li><a href="/#contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="content">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} Sroem Meng. All rights reserved.</p>
            <div class="social-links">
                <a href="https://github.com/MengSroem" target="_blank">GitHub</a>
                <a href="https://linkedin.com/in/meng-sroem" target="_blank">LinkedIn</a>
                <a href="https://www.facebook.com/meng.sroem.2025/" target="_blank">Facebook</a>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
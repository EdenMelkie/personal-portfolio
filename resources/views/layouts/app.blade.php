<!-- layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Hailemariam Eyayu Portfolio')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />

    <style>
        body {
            overflow-x: hidden;
            transition: background-color 0.3s, color 0.3s;
        }

        #sidebar {
            min-width: 250px;
            max-width: 250px;
            background: #0d6efd;
            color: white;
            transition: all 0.3s;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 56px;
            /* Height of navbar */
            overflow-y: auto;
        }

        #sidebar.collapsed {
            margin-left: -250px;
        }

        #content {
            margin-left: 250px;
            padding: 20px;
            transition: margin-left 0.3s;
        }

        #content.expanded {
            margin-left: 0;
        }

        .sidebar-header {
            padding: 1rem;
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            background-color: #0b5ed7;
            user-select: none;
        }

        .nav-link {
            color: white;
        }

        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
        }

        /* Dark mode */
        body.dark-mode {
            background-color: #121212;
            color: #e0e0e0;
        }

        body.dark-mode #sidebar {
            background: #1e1e1e;
        }

        body.dark-mode .nav-link:hover {
            background-color: #444;
        }
    </style>
    @stack('styles')
</head>

<body>

    <!-- Top Navbar -->
    <nav class="navbar navbar-dark bg-primary fixed-top shadow">
        <div class="container-fluid">
            <button class="btn btn-primary" id="sidebarToggle" aria-label="Toggle sidebar">
                <i class="fas fa-bars"></i>
            </button>
            <a class="navbar-brand ms-2 fw-bold d-flex align-items-center" href="#">
                <img src="images/HME.png" alt="HME" width="30" height="30" class="rounded-circle me-2" />
                Hailemariam Eyayu
            </a>

            <button id="darkModeToggle" class="btn btn-outline-light">
                <i class="fas fa-moon"></i>
            </button>
        </div>
    </nav>


    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">Menu</div>
        <ul class="nav flex-column px-2">
            <li class="nav-item">
                <a class="nav-link" href="#about"><i class="fas fa-user me-2"></i>About Me</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#skills"><i class="fas fa-code me-2"></i>Skills</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#portfolio"><i class="fas fa-briefcase me-2"></i>Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#downloads"><i class="fas fa-download me-2"></i>CV & Certificates</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact"><i class="fas fa-envelope me-2"></i>Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Main content -->
    <main id="content" class="pt-4">
        @yield('content')
    </main>

    <footer>
        @include('partials.footer')
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 800,
        });

        // Sidebar toggle
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('sidebar');
        const content = document.getElementById('content');

        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
            content.classList.toggle('expanded');
        });

        // Dark mode toggle
        const darkModeToggle = document.getElementById('darkModeToggle');
        darkModeToggle.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
            // Optional: Change icon on toggle
            const icon = darkModeToggle.querySelector('i');
            icon.classList.toggle('fa-moon');
            icon.classList.toggle('fa-sun');
        });
    </script>

    @stack('scripts')
</body>

</html>
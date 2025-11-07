<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@100..900&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LSP Data Management System</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>
<link rel="icon" type="image/png" href="{{ asset('images/up.png') }}">

<body>

    <!-- Navbar -->
<nav class="navbar">
    <div class="left">

        <span class="logo-text">LSPDMS</span>
    </div>
    <div class="right-link">
        <a href="#home">Home</a>
        <a href="#technologies">Technologies</a>
        <a href="#features">Features</a>
        <a href="#disclaimer">Disclaimer</a>
        <a href="#disclaimer">Login</a>
    </div>
</nav>


    <!-- Hero Section -->
  <!-- Hero Section -->
<section class="hero">
    <!-- Hero Logo -->
    <img src="{{ asset('images/background remove.png') }}" alt="Logo" class="hero-logo">

    <!-- Main Heading -->
    <h1 class="hero-heading">Welcome to LSP Data Management System</h1>

    <!-- Optional subtitle -->
    <div class="hero-subtitle"></div>
</section>


<section class="technologies">
    <h2>Technologies Used</h2>
    <div class="tech-marquee">
        <div class="tech-logos">
            <img src="{{ asset('images/html logo.png') }}" alt="HTML Logo">
            <img src="{{ asset('images/css logo.png') }}" alt="CSS Logo">
            <img src="{{ asset('images/laravel logo.png') }}" alt="Laravel Logo">
            <img src="{{ asset('images/php logo.png') }}" alt="PHP Logo">
            <img src="{{ asset('images/mysql logo.png') }}" alt="MySQL Logo">
            <img src="{{ asset('images/electron logo.png') }}" alt="Electron JS Logo">
            <img src="{{ asset('images/laragon.jpg') }}" alt="Laragon Logo">

            <!-- Repeat the logos for seamless looping -->
            <img src="{{ asset('images/html logo.png') }}" alt="HTML Logo">
            <img src="{{ asset('images/css logo.png') }}" alt="CSS Logo">
            <img src="{{ asset('images/laravel logo.png') }}" alt="Laravel Logo">
            <img src="{{ asset('images/php logo.png') }}" alt="PHP Logo">
            <img src="{{ asset('images/mysql logo.png') }}" alt="MySQL Logo">
            <img src="{{ asset('images/electron logo.png') }}" alt="Electron JS Logo">
            <img src="{{ asset('images/laragon.jpg') }}" alt="Laragon Logo">
              <img src="{{ asset('images/html logo.png') }}" alt="HTML Logo">
            <img src="{{ asset('images/css logo.png') }}" alt="CSS Logo">
            <img src="{{ asset('images/laravel logo.png') }}" alt="Laravel Logo">
            <img src="{{ asset('images/php logo.png') }}" alt="PHP Logo">
            <img src="{{ asset('images/mysql logo.png') }}" alt="MySQL Logo">
            <img src="{{ asset('images/electron logo.png') }}" alt="Electron JS Logo">
            <img src="{{ asset('images/laragon.jpg') }}" alt="Laragon Logo">
              <img src="{{ asset('images/html logo.png') }}" alt="HTML Logo">
            <img src="{{ asset('images/css logo.png') }}" alt="CSS Logo">
            <img src="{{ asset('images/laravel logo.png') }}" alt="Laravel Logo">
            <img src="{{ asset('images/php logo.png') }}" alt="PHP Logo">
            <img src="{{ asset('images/mysql logo.png') }}" alt="MySQL Logo">
            <img src="{{ asset('images/electron logo.png') }}" alt="Electron JS Logo">
            <img src="{{ asset('images/laragon.jpg') }}" alt="Laragon Logo">

            <!-- Repeat the logos for seamless looping -->
            <img src="{{ asset('images/html logo.png') }}" alt="HTML Logo">
            <img src="{{ asset('images/css logo.png') }}" alt="CSS Logo">
            <img src="{{ asset('images/laravel logo.png') }}" alt="Laravel Logo">
            <img src="{{ asset('images/php logo.png') }}" alt="PHP Logo">
            <img src="{{ asset('images/mysql logo.png') }}" alt="MySQL Logo">
            <img src="{{ asset('images/electron logo.png') }}" alt="Electron JS Logo">
            <img src="{{ asset('images/laragon.jpg') }}" alt="Laragon Logo">
              <img src="{{ asset('images/html logo.png') }}" alt="HTML Logo">
            <img src="{{ asset('images/css logo.png') }}" alt="CSS Logo">
            <img src="{{ asset('images/laravel logo.png') }}" alt="Laravel Logo">
            <img src="{{ asset('images/php logo.png') }}" alt="PHP Logo">
            <img src="{{ asset('images/mysql logo.png') }}" alt="MySQL Logo">
            <img src="{{ asset('images/electron logo.png') }}" alt="Electron JS Logo">
            <img src="{{ asset('images/laragon.jpg') }}" alt="Laragon Logo">

        </div>
    </div>
</section>

    <!-- Flashcards Section -->
<section class="flashcards">
    <h2>Main Features of the System</h2>
    <div class="carousel-container">
        <div class="carousel-cards">
            <div class="card">Create 4-01 Forms</div>
            <div class="card">Generate Summaries / Monthly Resumen</div>
            <div class="card">Review and Analyze Records</div>
            <div class="card">Automate Conditions</div>
            <div class="card">R2-10 Deliberation & Status Updates</div>
            <div class="card">Track Legacy Records & History of Individuals and Status of Purok overtime</div>
            <div class="card">Generate Monthly & Weekly Reports</div>
            <div class="card">Produce Special Reports</div>
            <div class="card">Demographic Analysis Age, Gender, Kalagayan</div>
        </div>
        <div class="carousel-controls">
            <button id="prev">&lt;</button>
            <div id="indicator">1 / 9</div>
            <button id="next">&gt;</button>
        </div>
    </div>
</section>


    <script src="{{ asset('js/welcome.js') }}"></script>
</body>
</html>

@extends('layouts.app')

@section('content')

    <div id="preloader">
        <div id="preloader-inner"></div>
    </div><!--/preloader-->


    <header>
        <div class="header-logo-area">
            <img class="header-me-img" src="{{ asset('images/me_1.jpg') }}" alt="">
        </div>
        <div class="header-nav-area">
            <a href="#main-nav-bar"><i class="fas fa-angle-double-down"></i></a>
        </div>

        <div class="row">
            <div class="hero-text-area">
                <h2 class="welcome-text">Welcome</h2>
                <h1 class="name-text">I am Michael Qualls</h1>
                <h2 class="profession-text">Professional Full Stack Developer</h2>
                <h2 class="hero-github-text">&lt;github/&gt; &lt;linkedin/&gt;</h2>
                <!--
                Github, linkedIn ...
                -->
            </div>
        </div>
    </header>

    <nav class="main-nav" id="main-nav-bar">
        <div class="row">
            <div class="nav-branding-area"><a href="#top">Qualls.IO</a></div>
            <ul class="main-nav-ul">
                <li class="nav-item">About</li>
                <li class="nav-item">Services</li>
                <li class="nav-item">Timeline</li>
                <li class="nav-item">Contact</li>
            </ul>
        </div>
    </nav>

    <section id="about-section" class="about-section">
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </section>

    <section id="services-section" class="services-section">

    </section>

    <section id="timeline-section" class="timeline-section">

    </section>

    <section id="contact-section" class="contact-section">

    </section>

@endsection

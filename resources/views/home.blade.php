@extends('layouts.app')

@section('content')

    <div id="preloader">
        <div id="preloader-inner"></div>
    </div><!--/preloader-->


    <header>
        <div class="header-logo-area">
            <i class="fas fa-user-alt"></i>
        </div>
        <div class="header-nav-area">
            <i class="fas fa-angle-double-down"></i>
        </div>

        <div class="row">
            <div class="hero-text-area">
                <h2>Welcome</h2>
                <h1>I am Michael Qualls</h1>
                <h2>Professional Full Stack Developer</h2>
                <h2 class="hero-github-text">&lt;github/&gt; &lt;linkedin/&gt;</h2>
                <!--
                Github, linkedIn ...
                -->
            </div>
        </div>
    </header>

    <nav class="main-nav">
        <div class="row">
            <div class="nav-branding-area">Qualls.IO</div>
            <ul class="main-nav-ul">
                <li class="nav-item">About</li>
                <li class="nav-item">Services</li>
                <li class="nav-item">Timeline</li>
                <li class="nav-item">Contact</li>
            </ul>
        </div>
    </nav>

    <section class="about-section">

    </section>

    <section class="services-section">

    </section>

    <section class="timeline-section">

    </section>

    <section class="contact-section">

    </section>

@endsection

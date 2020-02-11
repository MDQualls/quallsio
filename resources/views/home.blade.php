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
                <li class="nav-item"><a href="#about-section">About Me</a></li>
                <li class="nav-item"><a href="#services-section">Services</a></li>
                <li class="nav-item"><a href="#timeline-section">Timeline</a></li>
                <li class="nav-item"><a href="#contact-section">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section id="about-section" class="about-section">
        <div class="row">
            <h2>About Me</h2>
            <div class="about-text-box">
                <div class="portrait-box">
                    <img src="https://placeimg.com/350/450/any" alt="Portrait">
                </div>
                <div class="about-box">
                    <p class="lead">
                        Lorem Ipsum is simply dummy text of the printing
                    </p>
                    <p class="text">
                        Lor1em Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop.
                    </p>
                    <p class="text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged.
                    </p>
                    <div class="about-button-box">
                        <a href="#contact-section" class="btn btn-secondary">Conact Me</a>
                        <a download href="" class="btn btn-secondary">Resume PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services-section" class="services-section">
        <div class="row">
            <h2>Services</h2>
            <div class="services-text-box">

                <div class="service-box">
                    <div class="service-box-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="service-box-title">
                        Full Stack Development
                    </div>
                    <div class="service-box-content">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry
                    </div>
                </div>
                <div class="service-box">
                    <div class="service-box-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <div class="service-box-title">
                        API Development
                    </div>
                    <div class="service-box-content">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry
                    </div>
                </div>
                <div class="service-box">
                    <div class="service-box-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <div class="service-box-title">
                        Support
                    </div>
                    <div class="service-box-content">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="timeline-section" class="timeline-section">

    </section>

    <section id="contact-section" class="contact-section">

    </section>

@endsection

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
                        <a download href="{{ asset('files/MichaelDQuallsResume02112020.pdf') }}"
                           class="btn btn-secondary">Resume PDF</a>
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
                        I do front end development in HTML5/CSS3/Javascript and backend development in
                        PHP/Laravel/MySql. All of my projects utilize tried and true OOP patterns and SOLID Principles.
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
                        I am experienced in RESTful design. I am comfortable with both the
                        Lumen PHP Framework and the Flask Python Framework for API development.
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
                        I am able to tackle existing legacy applications for maintenance or upgrade.  If you need help
                        with hosting, I am experienced with handling Web properties on both Heroku and AWS.
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="timeline-section" class="timeline-section">
        <div class="row">
            <h2>Timeline</h2>

            <div class="timeline-box">
                <ul>
                    <li class="timeline-item" data-date="2016">
                        <h3>Software Developer IV at Paycom</h3>
                        <p>
                            I am currently at Paycom, an industry leader in the development of Web based Human Capital
                            Management Software.
                        </p>
                        <p>
                            As a member of the Web Application Engineering and Architecture Team,
                            my responsibilities include maintenance, support and extension of the proprietary Paycome
                            PHP MVC framework based on Zend and Symphony, the feature system, the cache system and the
                            long running process (LRP) system.
                        </p>
                    </li>

                    <li class="timeline-item" data-date="2008">
                        <h3>Lead Developer at Claims Management Resources</h3>
                        <p>
                            I coordinated application development, application maintenance and process automation
                            initiatives with the CMR IT Manager. Our work primarily focused around building work
                            flow and claim management applications for the billing department and import/export
                            routines for the exchange of data with our clients.
                        </p>
                    </li>

                    <li class="timeline-item" id="date" data-date="2006">
                        <h3>Internet Application Developer at Onesite.com</h3>
                        <p>
                            Social Networking Application Development utilizing primarily PHP and MySQL Enterprise. Both
                            MVC and non-MVC development in a SVN Environment. Tasks included application development,
                            RESTful SOA design, RSS development, full index searching development.
                        </p>
                    </li>

                    <li class="timeline-item" data-date="2004">

                        <h3>Web Developer at USPS Training Center</h3>
                        <p>
                            We were responsible for building the training, scheduling and reservation software
                            for teh US Postal Service Training Center.
                        </p>
                    </li>

                    <li class="timeline-item" data-date="1999">

                        <h3>Web Master at MIN</h3>

                        <p>
                            I was responsible for building and maintaining the databases and architecture for all
                            company Web sites and applications.
                        </p>
                    </li>

                    <li class="timeline-item" data-date="1998">

                        <h3>Programmer at Alamode Software</h3>

                        <p>
                            This was my first professional programming gig. I spent a year working on Alamode's
                            Real Estate Appraisal Software, WinTotal 2000. I was also responsible for building and
                            maintaining several in-house applications for client servies, e-mailing, faxing and
                            reporing.
                        <p/>
                    </li>
                </ul>
            </div>

        </div>
    </section>

    <section id="contact-section" class="contact-section">
        <div class="row">
            <h2>Contact</h2>
        </div>
    </section>

    <footer>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </footer>

@endsection

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Romer Bormann</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo site_url( '/css/style.css' ) ?>" media="all">
	<?php if ( $this->section( 'css' ) ): ?>
		<?php echo $this->section( 'css' ) ?>
	<?php endif; ?>
</head>
<body>

<!-- NAVIGATION -->
<nav class="navbar smart-scroll navbar-expand-lg navbar-light py-4">
    <div class="container">
        <a class="navbar-brand" href="<?php echo url( 'home' ) ?>">
            <h4 class="logo">Romer Bormann</h4>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="white-color"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link pl-5 link-style" href="#skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-5 link-style" href="#work">Mijn Werk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-5 link-style" href="#in-progress">Mee Bezig</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-5 link-style" href="#about">Over Mij</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-5 link-style" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO SECTION -->
<div class="hero">
    <div class="container">
    <div class="row">
        <div class="col-md-6 hero-text mb-5">
            <h1>Hey, ik ben een <span>creatieve</span> developer.</h1>
            <p>
                Ik ben Romer, een student software developer.<br>
                Projectmanagement, design & programmeren; ik doe mijn vak met passie.
            </p>
            <a class="alt-style" href="#contact"><button class="hero__button" type="button">Neem contact op</button></a>
        </div>
        <div class="col-md-6">
            <img class="rounded-circle" src="<?php echo site_url('/images/romer.png') ?>" alt="Romer Bormann" style="object-fit: cover; width: 350px; max-width: 90vw;">
        </div>
    </div>
    </div>
</div>

<div class="line-break"></div>

<!-- SKILL SECTION -->
<div class="container skills" id="skills">
    <div class="row pb-5">
        <div class="col-lg-12 text-center">
            <div class="title">SKILLS</div>
            <h1>Mijn Expertise</h1>
        </div>
    </div>
    <div class="w-layout-grid skill-grid">
        <div class="skill-item">
            <div class="service-title">
                <div class="service-icon-block-blue">
                    <img src="<?php echo site_url('/images/icons/development.svg') ?>" class="service-icon" alt="development">
                </div>
                <h3 class="service-h3">Development</h3>
            </div>
            <div>
                <p>
                    Ik ben voornamelijk bezig met de front-end. Ik kan inmiddels zonder veel moeite een concept omzetten in een responsive website. <br><br> Op het back-end gebied ben ik minder bekend, maar ik ben nu druk bezig met het leren van o.a. PHP-Framework Laravel.
                </p>
            </div>
        </div>
        <div class="skill-item">
            <div class="service-title">
                <div class="service-icon-block-orange">
                    <img src="<?php echo site_url('/images/icons/briefing.svg') ?>" class="service-icon" alt="development">
                </div>
                <h3 class="service-h3">Project-<br>management</h3>
            </div>
            <div>
                <p>
                    Naast programmeren hou ik mij ook graag bezig met projectmanagement. Een concept tot eindproduct brengen vind ik een mega interessant proces, ik verdiep mij daar ook graag in. <br><br> Ik kan goed overweg met de scrum werkwijze, ik gebruik hiervoor voornamelijk het programma "Trello".
                </p>
            </div>
        </div>
        <div class="skill-item">
            <div class="service-title">
                <div class="service-icon-block-red">
                    <img src="<?php echo site_url('/images/icons/lamp.svg') ?>" class="service-icon" alt="UX design">
                </div>
                <h3 class="service-h3">UX Design</h3>
            </div>
            <div>
                <p>
                    Het idee omzetten naar een prototype; hoe ziet het idee eruit en hoe maken we deze zo gebruiksvriendelijk mogelijk? <br><br> Ik experimenteer veel met Adobe XD. Ik ben geen gevorderde op dit gebied, maar ik vind het wel enorm interessant en probeer er daarom regelmatig mee bezig te zijn.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="purple-box"></div>

<!-- WORK SECTION -->
<div class="container py-5" id="work">
    <div class="row">
        <div class="col-lg-12">
            <div class="title">MIJN WERK</div>
            <h1>Portfolio</h1>
        </div>
    </div>
    <div class="row">
        <div class="work-item col-lg-4 mb-5">
            <a class="alt-a" href="<?php echo url( 'portfolio/work/spark' ) ?>">
                <img src="<?php echo site_url('/images/spark.png') ?>" alt="Studio Spark">
                <div class="card-img-overlay d-flex">
                    <div class="overlay-text">
                        <b>Studio Spark</b> <br>
                        BEDRIJFSWEBSITE
                    </div>
                </div>
            </a>
        </div>
        <div class="work-item col-lg-4 mb-5">
            <a class="alt-a" href="<?php echo url( 'portfolio/work/portfolio' ) ?>">
                <img src="<?php echo site_url('/images/portfolio.png') ?>" alt="Portfolio">
                <div class="card-img-overlay d-flex">
                    <div class="overlay-text">
                        <b>Portfolio</b> <br>
                        DESIGN & WEBSITE
                    </div>
                </div>
            </a>
        </div>
        <div class="work-item col-lg-4 mb-5">
            <a class="alt-a" href="<?php echo url( 'portfolio/work/netwerk' ) ?>">
                <img src="<?php echo site_url('/images/netwerk.png') ?>" alt="Regionaal Netwerk MBO-HBO">
                <div class="card-img-overlay d-flex">
                    <div class="overlay-text">
                        <b>Regionaal Netwerk MBO-HBO</b> <br>
                        FORUM
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="work-item col-lg-4 mb-5">
            <a class="alt-a" href="<?php echo url( 'portfolio/work/globalgoalsjam' ) ?>">
                <img src="<?php echo site_url('/images/goals.png') ?>" alt="Global Goals Jam">
                <div class="card-img-overlay d-flex">
                    <div class="overlay-text">
                        <b>Global Goals Jam</b> <br>
                        PROBLEM SOLVING
                    </div>
                </div>
            </a>
        </div>
        <div class="work-item col-lg-4 mb-5">
            <a class="alt-a" href="<?php echo url( 'portfolio/work/loman-glasbewassing' ) ?>">
                <img src="<?php echo site_url('/images/loman.png') ?>" alt="Loman Glasbewassing">
                <div class="card-img-overlay d-flex">
                    <div class="overlay-text">
                        <b>Loman Glasbewassing</b> <br>
                        BEDRIJFSWEBSITE
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="orange-box"></div>

<div class="container py-5" id="in-progress">
    <div class="row">
        <div class="col-lg-12 text-right">
            <div class="title">MEE BEZIG</div>
            <h1>Huidige Projecten</h1>
        </div>
    </div>
    <div class="row flex-row-reverse">
        <div class="work-item col-lg-4 mb-5">
            <a class="alt-a" href="<?php echo url( 'portfolio/work/twittor' ) ?>">
                <img src="<?php echo site_url('/images/twittor.png') ?>" alt="Twittor">
                <div class="card-img-overlay d-flex">
                    <div class="overlay-text">
                        <b>Twittor</b> <br>
                        LARAVEL APP
                    </div>
                </div>
            </a>
        </div>
        <div class="work-item col-lg-4 mb-5">
            <a class="alt-a" href="<?php echo url( 'portfolio/work/vrijpaleis' ) ?>">
                <img src="<?php echo site_url('/images/vrijpaleis.png') ?>" alt="Vrijpaleis">
                <div class="card-img-overlay d-flex">
                    <div class="overlay-text">
                        <b>Interactief werkstuk voor Vrijpaleis</b> <br>
                        AR APP
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>


<div class="blue-box"></div>

<!-- ABOUT SECTION -->
<div class="container py-5" id="about">
    <div class="row">
        <div class="col-lg-7 align-right">
            <div class="title">AANGENAAM</div>
            <h1>Hey, ik ben Romer, mediadeveloper</h1>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-lg-6">
            <p>
                Hey! Ik ben Romer. In 2019 startte ik met de opleiding "Mediadevelopment" op het <a href="https://www.ma-web.nl/" class="link-style" target="_blank">Mediacollege Amsterdam</a>. Het mooie aan dit beroep vind ik voornamelijk hoeveel kanten je op kan gaan, juist om DIE reden ben ik zelf nooit bezig met alleen het programmeren, maar ben ik ook bezig op andere gebieden zoals design en projectmanagement. Ik ben dus erg breed inzetbaar en vind het enorm leuk om nieuwe dingen te leren.
            </p>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-lg-3 w-100 contact-item ml-4 mb-4">
            <a href="https://github.com/RomerBormann" target="_blank" class="text-decoration-none">
                <div class="py-5 text-center ">
                    <img src="<?php echo site_url('/images/github.png') ?>" alt="github">
                    <h4 class="pt-3">Github</h4>
                </div>
            </a>
        </div>
        <div class="col-lg-3 contact-item ml-4 mb-4">
            <a href="https://www.linkedin.com/in/romer-bormann-3434aa198/" target="_blank" class="text-decoration-none">
                <div class="py-5 text-center ">
                    <img src="<?php echo site_url('/images/linkedin.png') ?>" alt="linkedin">
                    <h4 class="pt-3">Linkedin</h4>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="pink-box"></div>

<!-- CONTACT SECTION -->
<div class="container my-5" id="contact">
    <div class="row mt-4">
        <div class="col-lg-7">
            <div class="title">NEEM CONTACT OP</div>
            <h1>Vertel me wat ik voor jou kan betekenen!</h1>
        </div>
        <div class="final-contact-item col-lg-5 mb-5 p-4  text-center d-flex">
            <div class="pt-3 mx-auto">
                <i class="fas fa-envelope fa-3x pb-3"></i>
                <a href="mailto:contact@romerbormann.nl"><h5>contact@romerbormann.nl</h5></a>
            </div>
        </div>
    </div>
</div>

<!-- FOOTER SECTION -->
<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <p>© 2020 Romer Bormann</p>
        </div>
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>


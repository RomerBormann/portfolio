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
            <h2>Logo</h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="white-color"><i class="fas fa-bars" style="font-size:24px;"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link pl-5" href="#">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-5" href="#">Mijn Werk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-5" href="#">Over Mij</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-5" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO SECTION -->
<div class="container hero">
    <div class="row">
        <div class="col-lg-6 hero-text">
            <h1>Hey, ik ben een <span>creatieve</span> developer.</h1>
            <p>
                Ik ben Romer, een student software developer.<br>
                Projectmanagement, design & programmeren; ik doe mijn vak met passie.
            </p>
            <button class="hero__button" type="button">Neem contact op</button>
        </div>
        <div class="col-lg-6 hero__image__div">
            <img class="hero__image" src="<?php echo site_url('/images/romer.png') ?>" alt="Romer Bormann">
        </div>
    </div>
</div>

<div class="line-break"></div>

<!-- SKILL SECTION -->
<div class="container skills">
    <div class="row pb-5">
        <div class="col-lg-12 text-center">
            <div class="title">SKILLS</div>
            <h1>Mijn Expertise</h1>
        </div>
    </div>
    <div class="w-layout-grid skill-grid">
        <div class="skill-item">
            <div class="service-title">
                <div class="service-icon-block">
                    <img src="<?php echo site_url('/images/icons/development.svg') ?>" class="service-icon" alt="development">
                </div>
                <h3 class="service-h3">Projectmanagement</h3>
            </div>
            <div>
                <p>
                    Zorgen dat alles in goede banen wordt geleidt en dat deadlines gehaald worden. Ik verdiep mijzelf graag in dit onderdeel.
                </p>
            </div>
        </div>
        <div class="skill-item">
            <div class="service-title">
                <div class="service-icon-block">
                    <img src="<?php echo site_url('/images/icons/development.svg') ?>" class="service-icon" alt="development">
                </div>
                <h3 class="service-h3">UX Design</h3>
            </div>
            <div>
                <p>
                    Ik heb ervaring met het vertalen van een bepaald doel tot een design dat geschikt is voor de doelgroep.
                </p>
            </div>
        </div>
        <div class="skill-item">
            <div class="service-title">
                <div class="service-icon-block">
                    <img src="<?php echo site_url('/images/icons/development.svg') ?>" class="service-icon" alt="development">
                </div>
                <h3 class="service-h3">Development</h3>
            </div>
            <div>
                <p>
                    Het liefste werk ik aan de frond-end, maar ook op de back-end (PHP & Databases) ben ik zeer bekend.
                </p>
            </div>
        </div>

    </div>
</div>

<div class="orange-box"></div>

<!-- WORK SECTION -->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="title">MIJN WERK</div>
            <h1>Portfolio</h1>
        </div>
    </div>
    <div class="row">
        <div class="work-item col-lg-4 pb-5">
            <img src="<?php echo site_url('/images/spark.png') ?>" alt="Studio Spark">
        </div>
        <div class="work-item col-lg-4 pb-5">
            <img src="<?php echo site_url('/images/spark.png') ?>" alt="Studio Spark">
        </div>
        <div class="work-item col-lg-4 pb-5">
            <img src="<?php echo site_url('/images/spark.png') ?>" alt="Studio Spark">
        </div>
    </div>
</div>

<div class="blue-box"></div>

<!-- ABOUT SECTION -->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-6">
            <div class="title">AANGENAAM</div>
            <h1 class="">Hey, ik ben Romer, mediadeveloper</h1>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-lg-12">
            <p>
                Hi, my name is Jason and I’m a freelance web designer from San Francisco. I have over 10 years experience in leading teams and shipping complex digital products. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In fermentum, libero id efficitur dapibus, nisl metus euismod ex, non elementum quam urna eu risus.
            </p>
        </div>
    </div>
    <div class="row" style="padding-top: 100px">
        <div class="col-lg-3 contact-item ml-4">
            <a href="https://github.com/RomerBormann" target="_blank" class="text-decoration-none">
                <div class="py-5 text-center ">
                    <img src="<?php echo site_url('/images/github.png') ?>" alt="github">
                    <h4 class="pt-3">Github</h4>
                </div>
            </a>
        </div>
        <div class="col-lg-3 contact-item ml-4">
            <a href="https://www.linkedin.com/in/romer-bormann-3434aa198/" target="_blank" class="text-decoration-none">
                <div class="py-5 text-center ">
                    <img src="<?php echo site_url('/images/linkedin.png') ?>" alt="linkedin">
                    <h4 class="pt-3">Linkedin</h4>
                </div>
            </a>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>


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
    <link rel="stylesheet" href="<?php echo site_url( '/css/work.css' ) ?>" media="all">
	<?php if ( $this->section( 'css' ) ): ?>
		<?php echo $this->section( 'css' ) ?>
	<?php endif; ?>
</head>
<body>

<!-- NAVIGATION -->
<nav class="navbar smart-scroll navbar-expand-lg navbar-light py-4">
    <div class="container">
        <a class="navbar-brand d-flex" href="javascript:history.back()">
            <i class="fas fa-arrow-left my-auto"></i>
            &nbsp;
            <h4 class="my-auto">Ga terug</h4>
        </a>
        <a class="navbar-brand" href="javascript:history.back()">
            <h4 class="logo">Romer Bormann</h4>
        </a>
    </div>
</nav>

<?php echo $this->section( 'content' ) ?>

<!-- FOOTER SECTION -->
<div class="container mb-3">
    <div class="row d-flex">
        <div class="final-contact-item col-lg-5 mb-5 p-4 mx-auto text-center">
            <i class="fas fa-envelope fa-3x pb-3"></i>
            <a href="mailto:contact@romerbormann.nl"><h5>contact@romerbormann.nl</h5></a>
        </div>

    </div>
    <div class="row">
        <p>© 2020 Romer Bormann</p>
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>


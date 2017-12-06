<html lang="en" xmlns="http://www.w3.org/1999/html">
	<head>
		<title>dev-tpurnell</title>
		<!--Google Font-->
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

		<!--FavIcon-->
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>

		<!--Required meta tag-->
		<meta charset="UTF-8">

		<!--Font Awesome-->
		<script src="https://use.fontawesome.com/6a98f5f1db.js"></script>

		<!--Responsive meta tag-->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--jQuery, Popper.js and Bootstrap Javascript-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
				  integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
				  crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
				  integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
				  crossorigin="anonymous"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/jquery-validate.js"></script>

		<!--Bootstrap Stylesheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
				integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

		<!--CSS Stylesheet-->
		<link rel="stylesheet" type="text/css" href="styles/style.css"/>

		<!--Google ReCAPTCHA-->
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	<!--This begins the body tag-->
	<body class="pb-5">
		<header>
			<div class="container bg-secondary">
				<!--Navigation bar-->
				<nav class="fixed-top navbar navbar-expand-lg navbar-light bg-secondary">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
							  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<!---Navbar links-->
					<div class="font collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="#Home">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#AboutMe">About Me</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#Portfolio">Portfolio</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#ContactMe">Contact Me</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>

		<!--Jumbotron-->
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div id="Home" class="carousel-item active">
					<img class="d-block w-100" src="images/hiking.jpg" alt="First slide">
				</div>
			</div>

			<section id="AboutMe" class="bg-secondary text-black py-5">
				<div class="container">
					<div class="row">
						<div class="col-lg-3">
							<img class="position-sticky rounded-circle img-fluid mx-auto mx-lg-0 d-block mb-3"
								  src="images/charleston-sc.jpg" alt="hiking">
						</div>
						<div class="col-lg-9 text-justify">
							<h1 class="font">About Me</h1>

							<p>Tanisha is an Activist, Artist, World Traveler and Web Developer. This site features a portfolio
								of her work as a web developer as well as her social media links. Feel free to explore.
							</p>
						</div>
					</div>
				</div>
			</section>

			<div class="row">
				<div id="font" class="bg-secondary col-sm-6 col-lg-3 my-3 mx-auto">
					<h3 class="font text-center">Back-End</h3>
					<ul class="d-block">
						<li>mySQL</li>
						<li>Object Oriented Programming</li>
						<li>PHP</li>
						<li>Terminal</li>
						<li>Git</li>
						<li>Composer Package Manager</li>
						<li>Swift Mailer</li>
						<li>Data Design</li>
						<li>PHP Unit</li>
					</ul>
				</div>
				<div class="bg-secondary col-sm-6 col-lg-3 my-3 mx-auto"
				">
				<h3 class="font text-center">Front-End</h3>
				<ul>
					<li>UI/UX</li>
					<li>Bootstrap 4</li>
					<li>Javascript</li>
					<li>Angular 5</li>
					<li>HTML5</li>
					<li>CSS3</li>
				</ul>
			</div>
			<div class="bg-secondary col-sm-6 col-lg-3 my-3 mx-auto"
			">
			<h3 class="font text-center">Security</h3>
			<ul>
				<li>Session Security</li>
				<li>Encapsulation</li>
				<li>Angular Form Validation</li>
				<li>SQL Injection</li>
				<li>Shell Injection</li>
			</ul>
		</div>

		<section class="py-5">
			<div id="Portfolio" class="col-sm-6 col-lg-3 my-3 mx-auto">
				<h1 class="font text-center">Portfolio</h1>
				<img class="img-fluid rounded-circle d-block mx-auto my-3" src="" alt="">
				<div class="card text-center">
					<div class="card-body">
						<h4 class="card-title font">ABQ311</h4>
						<p class="card-text">This app will create more efficient ways for city officials to communicate to
							city workers the infrastructure issues in Albuquerque, New Mexico. Follow link for details.</p>
						<a href="https://github.com/Koriganp/infrastructure" class="btn btn-primary">Click Me!</a>
					</div>
				</div>
			</div>
		</section>

		<!--Contact form-->
		<form id="contact-form" action="php/mailer.php" method="post" novalidate class="contact mb-5 container">
			<div id="ContactMe" class="form-group">
				<div class="font col-md-6 mx-auto">
					<h2 class="mb-4 text-center">Contact</h2>


					<div class="font form-group">
						<label for="name">Name <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="name" name="name" placeholder="name"
								 aria-describedby="blah">
					</div>

					<div class="font form-group">
						<label for="name">Email <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="email" name="email" placeholder="email"
								 aria-describedby="blah">
					</div>

					<div class="font form-group">
						<label for="name">Subject <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="subject" name="subject" placeholder="subject"
								 aria-describedby="blah">
					</div>

					<div class="font form-group">
						<label for="name">Message <span class="text-danger">*</span></label>
						<textarea class="form-control" id="message" name="message" placeholder="message" rows="5"></textarea>
					</div>
					<!-- reCAPTCHA -->
					<div class="g-recaptcha" data-sitekey="6LdTlToUAAAAAPeOLHT9V155SLxZHo13ymtzroNe"></div>

					<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
					<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
				</div>
			</div>
		</form>

		<!--empty area for form error/success output-->
		<div class="row">
			<div class="col-xs-12">
				<div id="output-area"></div>
			</div>
		</div>
		<!--Footer-->
		<footer class="bg-dark fixed-bottom py-3">
			<div class="row">
				<div class="col-md-5 mx-auto text-center">
					<a class="position-relative btn btn-default" href="https://www.linkedin.com/in/tanishapurnell/"
						aria-label="linkedin">
						<i class="linkedin fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
					</a>
					<a class="position-sticky btn btn-default" href="https://github.com/Neena93" aria-label="github">
						<i class="github fa fa-github-square fa-2x" aria-hidden="true"></i>
					</a>
				</div>
			</div>
		</footer>
	</body>
</html>
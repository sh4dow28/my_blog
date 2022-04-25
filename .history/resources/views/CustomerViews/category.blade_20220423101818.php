<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/favicon.ico">
<link rel="icon" type="image/png" href="../assets/img/favicon.ico">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>Mundana Template by WowThemesNet</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Source+Sans+Pro:400,700" rel="stylesheet">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<!-- Main CSS -->
<link href="../assets/css/main.css" rel="stylesheet"/>
</head>
<body>
<!--------------------------------------
NAVBAR
--------------------------------------->
	@include('CustomerViews.partials.navbar')
<!-- End Navbar -->
    
<!--------------------------------------
Main
--------------------------------------->
{{ $cat
	@foreach ($cat as $c)
		echo $c->category_title;
	@endforeach
}}
<div class="container mt-5 mb-5">
	<div class="row">
		<div class="col-md-8">
			<h5 class="font-weight-bold spanborder"><span>Rubrique </span></h5>
			<div class="card border-0 mb-5 box-shadow">
				<div style="background-image: url(../assets/img/demo/1.jpg); height: 350px; background-size: cover; background-repeat: no-repeat;">
				</div>
				<div class="card-body px-0 pb-0 d-flex flex-column align-items-start">
					<h2 class="h2 font-weight-bold">
					<a class="text-dark" href="../article.html">Brain Stimulation Relieves Depression Symptoms</a>
					</h2>
					<p class="card-text">
						 Researchers have found an effective target in the brain for electrical stimulation to improve mood in people suffering from depression.
					</p>
					<div>
						<small class="d-block"><a class="text-muted" href="../author.html">Favid Rick</a></small>
						<small class="text-muted">Dec 12 · 5 min read</small>
					</div>
				</div>
			</div>
			<h5 class="font-weight-bold spanborder"><span>Latest</span></h5>
			<div class="mb-3 d-flex justify-content-between">
				<div class="pr-3">
					<h2 class="mb-1 h4 font-weight-bold">
					<a class="text-dark" href="../article.html">Nearly 200 Great Barrier Reef coral species also live in the deep sea</a>
					</h2>
					<p>
						 There are more coral species lurking in the deep ocean that previously thought.
					</p>
					<div class="card-text text-muted small">
						 Jake Bittle in SCIENCE
					</div>
					<small class="text-muted">Dec 12 · 5 min read</small>
				</div>
				<img height="120" src="../assets/img/demo/blog8.jpg">
			</div>
			<div class="mb-3 d-flex justify-content-between">
				<div class="pr-3">
					<h2 class="mb-1 h4 font-weight-bold">
					<a class="text-dark" href="../article.html">East Antarctica's glaciers are stirring</a>
					</h2>
					<p>
						 Nasa says it has detected the first signs of significant melting in a swathe of glaciers in East Antarctica.
					</p>
					<div class="card-text text-muted small">
						 Jake Bittle in SCIENCE
					</div>
					<small class="text-muted">Dec 12 · 5 min read</small>
				</div>
				<img height="120" src="../assets/img/demo/1.jpg">
			</div>
			<div class="mb-3 d-flex justify-content-between">
				<div class="pr-3">
					<h2 class="mb-1 h4 font-weight-bold">
					<a class="text-dark" href="../article.html">50 years ago, armadillos hinted that DNA wasn’t destiny</a>
					</h2>
					<p>
						 Nasa says it has detected the first signs of significant melting in a swathe of glaciers in East Antarctica.
					</p>
					<div class="card-text text-muted small">
						 Jake Bittle in SCIENCE
					</div>
					<small class="text-muted">Dec 12 · 5 min read</small>
				</div>
				<img height="120" src="../assets/img/demo/5.jpg">
			</div>
		</div>
		<div class="col-md-4 pl-4">
			<div class="sticky-top">
				<h5 class="font-weight-bold spanborder"><span>Popular in Science</span></h5>
				<ol class="list-featured">
					<li>
					<span>
					<h6 class="font-weight-bold">
					<a href="../article.html" class="text-dark">Did Supernovae Kill Off Large Ocean Animals?</a>
					</h6>
					<p class="text-muted">
						 Jake Bittle in SCIENCE
					</p>
					</span>
					</li>
					<li>
					<span>
					<h6 class="font-weight-bold">
					<a href="../article.html" class="text-dark">Humans Reversing Climate Clock: 50 Million Years</a>
					</h6>
					<p class="text-muted">
						 Jake Bittle in SCIENCE
					</p>
					</span>
					</li>
					<li>
					<span>
					<h6 class="font-weight-bold">
					<a href="../article.html" class="text-dark">Unprecedented Views of the Birth of Planets</a>
					</h6>
					<p class="text-muted">
						 Jake Bittle in SCIENCE
					</p>
					</span>
					</li>
					<li>
					<span>
					<h6 class="font-weight-bold">
					<a href="../article.html" class="text-dark">Effective New Target for Mood-Boosting Brain Stimulation Found</a>
					</h6>
					<p class="text-muted">
						 Jake Bittle in SCIENCE
					</p>
					</span>
					</li>
				</ol>
			</div>
		</div>
	</div>
</div>
    
<div class="container pt-4 pb-4">
	<div class="border p-5 bg-lightblue">
		<div class="row justify-content-between">
			<div class="col-md-6">
				<h5 class="font-weight-bold secondfont">Become a member</h5>
				 Get the latest news right in your inbox. It's free and you can unsubscribe at any time. We hate spam as much as we do, so we never spam!
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<input type="text" class="form-control" placeholder="First name">
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" placeholder="Last name">
					</div>
					<div class="col-md-12 mt-3">
						<button type="submit" class="btn btn-success btn-block">Subscribe</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Main -->
    
<!--------------------------------------
FOOTER
--------------------------------------->
	@include('CustomerViews.partials.footer')
<!-- End Footer -->
    
<!--------------------------------------
JAVASCRIPTS
--------------------------------------->
<script src="../assets/js/vendor/jquery.min.js" type="text/javascript"></script>
<script src="../assets/js/vendor/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/vendor/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/functions.js" type="text/javascript"></script>
</body>
</html>
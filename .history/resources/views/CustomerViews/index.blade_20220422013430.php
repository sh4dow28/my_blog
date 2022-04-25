<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/favicon.ico">
	<link rel="icon" type="image/png" href="../assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<title>MFI | Mega Flash Info</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Source+Sans+Pro:400,600,700" rel="stylesheet">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<!-- Main CSS -->
	<link href="../assets/css/main.css" rel="stylesheet"/>
</head>
<body>
	@include('CustomerViews.partials.navbar')    
	@include('CustomerViews.partials.header')
	<!--------------------------------------
	MAIN
	--------------------------------------->
    
	<div class="container pt-4 pb-4">
		<div class="row">
			<div class="col-lg-6">
				<div class="card border-0 mb-4 box-shadow h-xl-300">              
					<div style="background-image: url(./assets/img/demo/1.jpg); height: 150px;    background-size: cover;    background-repeat: no-repeat;"></div>               
					<div class="card-body px-0 pb-0 d-flex flex-column align-items-start">
						<h2 class="h4 font-weight-bold">
						<a class="text-dark" href="{{ route('blog.about') }}">Brain Stimulation Relieves Depression Symptoms</a>
						</h2>
						<p class="card-text">
							Researchers have found an effective target in the brain for electrical stimulation to improve mood in people suffering from depression.
						</p>
						<div>
							<small class="d-block"><a class="text-muted" href="../author.html">Favid Rick</a></small>
							{{-- <small class="text-muted">Dec 12 &middot; 5 min read</small> --}}
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="flex-md-row mb-4 box-shadow h-xl-300">
					<div class="mb-3 d-flex align-items-center">
						<img height="80" src="../assets/img/demo/blog4.jpg">
						<div class="pl-3">
							<h2 class="mb-2 h6 font-weight-bold">
							<a class="text-dark" href="{{ route('blog.about') }}">Nasa's IceSat space laser makes height maps of Earth</a>
							</h2>
							<div class="card-text text-muted small">
								Jake Bittle in LOVE/HATE
							</div>
							<small class="text-muted">Dec 12 &middot; 5 min read</small>
						</div>
					</div>
					<div class="mb-3 d-flex align-items-center">
						<img height="80" src="../assets/img/demo/blog5.jpg">
						<div class="pl-3">
							<h2 class="mb-2 h6 font-weight-bold">
							<a class="text-dark" href="{{ route('blog.about') }}">Underwater museum brings hope to Lake Titicaca</a>
							</h2>
							<div class="card-text text-muted small">
								Jake Bittle in LOVE/HATE
							</div>
							<small class="text-muted">Dec 12 &middot; 5 min read</small>
						</div>
					</div>
					<div class="mb-3 d-flex align-items-center">
						<img height="80" src="../assets/img/demo/blog6.jpg">
						<div class="pl-3">
							<h2 class="mb-2 h6 font-weight-bold">
							<a class="text-dark" href="{{ route('blog.about') }}">Sun-skimming probe starts calling home</a>
							</h2>
							<div class="card-text text-muted small">
								Jake Bittle in LOVE/HATE
							</div>
							<small class="text-muted">Dec 12 &middot; 5 min read</small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-md-8">
				<h5 class="font-weight-bold spanborder"><span>Toutes les Nouvelles</span></h5>
				@foreach ($all_posts as $a_post)
					<div class="mb-3 d-flex justify-content-between">
						<div class="pr-3">
							<h2 class="mb-1 h4 font-weight-bold">
								<a class="text-dark" href="{{ route('blog.about') }}">
									{{ Str::title($a_post->post_title) }}
								</a>
							</h2>
							<p>
								{{ Str::limit($a_post->post_content, 100, ' ...') }}
								<a href="{{ route('blog.article/') }}">Lire plus</a>
							</p>
							<div class="card-text text-muted small">
								<span>Source : </span> {{ $a_post->post_source }}
							</div>
							<small class="text-muted">
								{{ $a_post->created_at->format('d M Y') }}
								{{-- Dec 12 &middot; 5 min read --}}
								&middot; Rubrique &middot; {{ Str::ucfirst($a_post->category->category_title) }}
							</small>
						</div>
						<img height="120" src="{{ $a_post->post_img_path }}">
					</div>	
				@endforeach
			</div>
			<div class="col-md-4 pl-4">
				<h5 class="font-weight-bold spanborder"><span>Popular</span></h5>
				<ol class="list-featured">
					<li>
						<span>
						<h6 class="font-weight-bold">
						<a href="{{ route('blog.about') }}" class="text-dark">Did Supernovae Kill Off Large Ocean Animals?</a>
						</h6>
						<p class="text-muted">
							Jake Bittle in SCIENCE
						</p>
						</span>
					</li>
					<li>
						<span>
						<h6 class="font-weight-bold">
						<a href="{{ route('blog.about') }}" class="text-dark">Humans Reversing Climate Clock: 50 Million Years</a>
						</h6>
						<p class="text-muted">
							Jake Bittle in SCIENCE
						</p>
						</span>
					</li>
					<li>
					<span>
					<h6 class="font-weight-bold">
					<a href="{{ route('blog.about') }}" class="text-dark">Unprecedented Views of the Birth of Planets</a>
					</h6>
					<p class="text-muted">
						Jake Bittle in SCIENCE
					</p>
					</span>
					</li>
					<li>
					<span>
					<h6 class="font-weight-bold">
					<a href="{{ route('blog.about') }}" class="text-dark">Effective New Target for Mood-Boosting Brain Stimulation Found</a>
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
    
	@include('CustomerViews.partials.footer')
    
	<!--------------------------------------
	JAVASCRIPTS
	--------------------------------------->
	<script src="../assets/js/vendor/jquery.min.js" type="text/javascript"></script>
	<script src="../assets/js/vendor/popper.min.js" type="text/javascript"></script>
	<script src="../assets/js/vendor/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/functions.js" type="text/javascript"></script>
</body>
</html>
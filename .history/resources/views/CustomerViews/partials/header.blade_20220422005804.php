<!--------------------------------------
HEADER
--------------------------------------->
<div class="container">
	<div class="jumbotron jumbotron-fluid mb-3 pt-0 pb-0 bg-lightblue position-relative">
		<div class="pl-4 pr-0 h-100 tofront">
			<div class="row justify-content-between">
				<div class="col-md-6 pt-6 pb-6 align-self-center">
					<h1 class="secondfont mb-3 font-weight-bold">
						{{ $last_post->post_title }}
					</h1>
					<p class="mb-3">
						{{ Str::words($last_post->post_content, 20, '...') }}
					</p>
					<a href="{{ route('blog.article') }}" class="btn btn-dark">Lire plus</a>
				</div>
				<div class="col-md-6 d-none d-md-block pr-0" style="background-size:cover;background-image:url(./assets/img/demo/home.jpg);">	</div>
			</div>
		</div>
	</div>
</div>
<!-- End Header -->
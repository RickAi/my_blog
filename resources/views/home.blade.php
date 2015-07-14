<<<<<<< HEAD
@extends('_layouts.default')

@section('content')

<div id="index-banner" class="parallax-container valign-wrapper">
	<div class="section no-pad-bot">
		<div class="container">
			<div class="row center">
				<h5 class="header col s12 light">A personal website which record coding and daily activites</h5>
			</div>
		</div>
		<div class="row center">
			<a href="#" id="download-button" class="btn-large waves-effect waves-light light-blue darken-4">About me</a>
		</div>
	</div>
	<div class="parallax"><img src={{asset('images/background1.jpg')}} alt="Unsplashed background img 1"></div>
</div>


<div class="container">
	<div class="section">
		<div class="row">
			<div class="col s12 m4">
				<a href="{{ URL('/blog') }}">
				<div class="icon-block">
					<h2 class="center blue-text"><i class="material-icons">picture_in_picture</i></h2>
					<h5 class="center blue-text">Blog</h5>
				</div>
				</a>
			</div>

			<div class="col s12 m4">
				<div class="icon-block">
					<h2 class="center brown-text"><i class="material-icons">group</i></h2>
					<h5 class="center">Project</h5>
				</div>
			</div>

			<div class="col s12 m4">
				<div class="icon-block">
					<h2 class="center brown-text"><i class="material-icons">library_books</i></h2>
					<h5 class="center">Book</h5>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="section">

		<div class="row">
			<div class="col s12 m4">
				<div class="icon-block">
					<h2 class="center brown-text"><i class="material-icons">movie</i></h2>
					<h5 class="center">Movie</h5>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="icon-block">
					<h2 class="center brown-text"><i class="material-icons">dashboard</i></h2>
					<h5 class="center">Fitness</h5>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="icon-block">
				<h2 class="center brown-text"><i class="material-icons">games</i></h2>
				<h5 class="center">Game</h5>
				</div>
			</div>
		</div>

	</div>
</div>


<div class="parallax-container valign-wrapper">
	<div class="section no-pad-bot">
		<div class="container">
			<div class="row center">
				<h5 class="header col s12 light">Enjoy the life!</h5>
			</div>
		</div>
	</div>
	<div class="parallax"><img src="{{ URL::asset('images/background3.jpg') }}" alt="Unsplashed background img 3"></div>
</div>

@endsection

=======
>>>>>>> 415db0caec5ce27e74d23587adc7f27e96b83a9c

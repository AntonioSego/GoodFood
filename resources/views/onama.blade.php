<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body class="justify-content-center">
		<div id="linkovi">



			</div>
			<div class="sidebar">
		<div class="aboutus">
			<h2 class="heading">O nama</h2>
		<img id="avatar-aboutus" src= "{{ asset('/images/Dario.jpg') }}">
		<div class="shape"></div>
			<div class="shape1"></div>
			<p id="text-aboutus">
		Ja sam Dario Miličević,iz Posušja rođen 14.10.1997 godine. Student sam 3. godine računarstva.Nadam se da ću skupa sa kolegama uspješno dovršiti projekt i steći  nova znanja.
			</p>

			<div class="sidebar">
				<div class="aboutus">

				<img id="avatar-aboutus" src="{{ asset('/images/Sego.jpg') }}">
				<div class="shape"></div>
					<div class="shape1"></div>
					<p id="text-aboutus">
				 Ja sam Antonio Šego,iz Posušja rođen 15.09.1999.Student 3. godine računarstva.Drago mi je što imam priliku sa kolegama raditi na projektu na kojem će mo steći dosta novog znanja i iskustva.
					</p>


					<div class="sidebar">
		<div class="aboutus">
		<img id="avatar-aboutus" src="{{ asset('/images/Kristijan.jpg') }}">
		<div class="shape"></div>
			<div class="shape1"></div>
			<p id="text-aboutus">
				Zovem se Kristijan Anić
	 Veselim se radu na projektu i jedva cekam sa svojom grupom uspjesno rjesavati projekt, zadace i kolokvije s kojima cemo opravdati veliko zanimanje za ovaj predmet ujedno i za fakultet
			</p>

		</div>
	</div>

				</div>
			</div>







		</div>
	</div>



	</body>
</html>

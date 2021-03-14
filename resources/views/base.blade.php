<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>


    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link  {{ Route::is('users') ? 'active' : '' }}" href="{{ route('users') }}">Users</a>
                        <a class="nav-link {{ Route::is('phone') ? 'active' : '' }}"  href="{{ route('phone' ) }}">Phones</a>
                        {{-- <a class="nav-link {{ Route::is('phone') ? 'active' : '' }}"  href="{{ route('phone' ) }}">Info</a> --}}

                    </div>
                </div>
            </div>
        </nav>
			<div class="row">
				<div class="col-md-12">

					@yield('content')


				</div>
			</div>
		</div>
</body>
</html>

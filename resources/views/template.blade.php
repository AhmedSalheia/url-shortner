<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>ShortUrl</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('assets/main.css') . ((env('APP_ENV') == 'local')?'?'.uniqid():'') }}">

    @yield('styles')
</head>
<body>

    <div class='container justify-content-center d-flex text-center w-100 h-100 p-0'>

        <div class="card text-center bg-body rounded px-0">
            <div class="card-body mt-3">
                <h4 class="card-title">Short<span class="text-pink">URL</span></h4>
                <h5 class="card-subtitle text-muted"><span class="text-pink">Sonic-fast</span> Shortening Service</h5>

                @yield('card-body')
            </div>

            @yield('card-footer')
        </div>

        <div class="tm-col-center tm-col-footer m-3 fixed-bottom">
            <footer class="tm-site-footer text-center">
                <p class="mb-0">Made With <i class="fa fa-heart text-pink"></i> By: <a href="https://github.com/AhmedSalheia" class="text-pink">Ahmed Alaa Salheia</a></p>
            </footer>
        </div>

    </div>

@yield('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap-4.3.1/css/bootstrap.min.css') }}">
    <script src="{{ asset('jquery-3.4.1/jquery-3.4.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="{{ asset('bootstrap-4.3.1/js/bootstrap.min.js') }}" charset="utf-8"></script>

    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <title>Booking Confirmed!</title>
</head>

<body>
    <div class="container-fluid mt-3">
        <section class="row">
            <div class="col-md-8">
                <h1 class="title">HotelNest</h1>
            </div>
            <div class="col-md-4">
                <div class=" float-right" role="group">
                    <a class="btn btn-secondary btn-md  mr-3" style="background-color: #586BA4;" href="#"> Register </a>
                    <a class="btn btn-md btn-outline-secondary" tyle="border-color: #586BA4;" href="#"> Sign In </a>
                </div>
            </div>
        </section>
    </div>

    <div class="card mt-5 container shadow-sm" style="width: 30rem;">
        <div class="card-body">
            <h4 class="card-title pl-2" ;> Your booking is confirmed!</h4>
            <h5 class="card-title pl-2" style="color: #586BA4;"> The St.Regis </h5>
            <h6 class="card-subtitle mb-2 pl-2 text-muted">Twin Room</h6>
            <p class="card-text pl-2">10 Oct 2019 to 12 Oct 2019 <br>
                1 Adult and 1 Children <br><br><br>
                Joyce Lee <br>
                1234@gmail.com <br>
                012345678 <br><br><br><br><br><br><br><br><br><br>
            </p>

        </div>
    </div>
</body>

</html>
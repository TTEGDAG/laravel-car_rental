<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>

<body>
    @include('components.navbar')
    <div class="jumbotron">
        <div class="container">
            <h1>Your Journey Starts Here!</h1>
            <p>Looking for a vehicle ? You’re at the right place.</p>
            <div class="col-lg-9 col-md-9 col-sm-12">
                <h4>Search for Car Rental.</h4>
                <hr>

                <form method="post" action="#" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="car_type" class="form-control-label">What type of vehicle?</label>
                                <div class="form-group">
                                    <select name="car_type" class="form-control">
                                        <option></option>
                                        <option value="car">Car</option>
                                        <option value="van">Vans & Trucks</option>
                                        <option value="prestige">Prestige</option>
                                    </select>
                                </div>
                                @error('car_type')
                                <span class="invalid-feedback text-danger" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="city" class="form-control-label">City</label>
                                <div class="form-group">
                                    <select name="car_type" class="form-control">
                                        <option></option>
                                        <option value="car">Warsaw</option>
                                        <option value="van">Gdansk</option>
                                        <option value="prestige">Poznan</option>
                                    </select>
                                </div>
                                @error('car_type')
                                <span class="invalid-feedback text-danger" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="pick_up_date">Pick up date</label>
                                <div>
                                    <div class="input-group">
                                        <input type="date" name="pick_up_date" id="pick_up_date" class="form-control @error('pick_up_date') is-invalid @enderror" placeholder="dd-mm-yyyy" id="datepicker" required>
                                        <span class="input-group-addon bg-custom b-0"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="return_date">Return date</label>
                                <div>
                                    <div class="input-group">
                                        <input type="date" name="return_date" id="date" class="form-control @error('return_date') is-invalid @enderror" placeholder="dd-mm-yyyy" id="datepicker" required>
                                        <span class="input-group-addon bg-custom b-0"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-warning">Search</button>
                    </div>

                </form>
            </div>

        </div>
    </div>



    <div class="container-fluid">

        <hr>

        <footer>

            <p class="text-center">&copy; 2022 Enjoy the Journey.</p>

        </footer>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
@extends('layouts.site')

@section('content')
    @if(session('token') !== null)
        <div class="row">
            <div class="col-md-12 p-3">
                <div class="bg-primary text-center text-white p-4">
                    <h1 style="text-align:center;"><strong>Programma</strong></h1>
                </div>
                <hr>

                <div class="card">
                    <div class="card-body">
                        <div class="container text-center">
                            <div class="row m-5 p-5" style="border-bottom: 1px solid #f9f9f9;">
                                <div class="col-md-4 offset-2 text-center">
                                    <h2 style="font-family: 'Amatic SC'; font-size: 3em;">14.45 uur</h2>
                                    <h3>Aanvang</h3>
                                </div>
                                <div class="col-md-4">
                                    <i class="fa fa-clock" style="font-size:5em"></i>
                                </div>
                            </div>
                            <div class="row  p-5" style="border-bottom: 1px solid #f9f9f9;">
                                <div class="col-md-4 offset-2 text-center"><i
                                        class="fa fa-frog" style="font-size:5em"></i></div>
                                <div class="col-md-4">
                                    <h2 style="font-family: 'Amatic SC'; font-size: 3em;">15.00 uur</h2>
                                    <h3>Trouw Ceremonie</h3>
                                </div>
                            </div>
                            <div class="row p-5" style="border-bottom: 1px solid #f9f9f9;">
                                <div class="col-md-4 offset-2 text-center">
                                    <h2 style="font-family: 'Amatic SC'; font-size: 3em;">16.00 uur</h2>
                                    <h3>Receptie</h3>
                                </div>
                                <div class="col-md-4">
                                    <i class="fa fa-glass-martini-alt" style="font-size:5em"></i>
                                </div>
                            </div>
                            @if($guest->special_guest)
                                <div class="row  p-5" style="border-bottom: 1px solid #f9f9f9;">
                                    <div class="col-md-4 offset-2 text-center"><span class="align-middle"><i
                                                class="fa fa-utensils" style="font-size:5em"></i></span></div>
                                    <div class="col-md-4">
                                        <h2 style="font-family: 'Amatic SC'; font-size: 3em;">18.00 uur</h2>
                                        <h3>Diner</h3>
                                    </div>
                                </div>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-md-12 p-3">
                <div class="bg-primary text-center text-white p-4">
                    <h1 style="text-align:center;"><strong>Programma</strong></h1>
                </div>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <div class="container text-center">
                            <div class="row m-5 p-5" style="border-bottom: 1px solid #f9f9f9;">
                                <div class="col-md-4 offset-2 text-center">
                                    <h2 style="font-family: 'Amatic SC'; font-size: 3em;">14.45 uur</h2>
                                    <h3>Aanvang</h3>
                                </div>
                                <div class="col-md-4">
                                    <i class="fa fa-clock" style="font-size:5em"></i>
                                </div>
                            </div>
                            <div class="row  p-5" style="border-bottom: 1px solid #f9f9f9;">
                                <div class="col-md-4 offset-2 text-center"><i
                                        class="fa fa-frog" style="font-size:5em"></i></div>
                                <div class="col-md-4">
                                    <h2 style="font-family: 'Amatic SC'; font-size: 3em;">15.00 uur</h2>
                                    <h3>Trouw Ceremonie</h3>
                                </div>
                            </div>
                            <div class="row p-5" style="border-bottom: 1px solid #f9f9f9;">
                                <div class="col-md-4 offset-2 text-center">
                                    <h2 style="font-family: 'Amatic SC'; font-size: 3em;">16.00 uur</h2>
                                    <h3>Receptie</h3>
                                </div>
                                <div class="col-md-4">
                                    <i class="fa fa-glass-martini-alt" style="font-size:5em"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endif
@endsection

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
                        15.00 - 16.00 Ceremonie<br/>
                        16.00 - 18.00 Receptie<br/>
                        @if($guest->special_guest)
                            18.00 - 23.00  Diner
                        @endif
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
                        <p>
                            15.00 - 16.00 Ceremonie<br/>
                            16.00 - 18.00 Receptie<br/>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

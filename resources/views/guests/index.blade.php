@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Gastenlijst</div>
                    <div class="card-body">
                        <p>
                            <a class="btn btn-primary" href="{{ url('/dashboard/guests/create') }}"><i class="fa fa-plus"></i> Gast Toevoegen</a>
                        </p>
                        <table class="table table-striped table-hover">
                            <thead>
                            <th>Naam</th>
                            <th>Aanwezig</th>
                            </thead>
                            <tbody>
                            @foreach($guests as $guest)
                                <tr>
                                    <td><a href="{{ url('/dashboard/guests/' . $guest->id) }}">{{ $guest->fullName }}</a></td>
                                    <td width="25px">
                                        @if($guest->is_coming == 1)
                                            <i class="fa fa-circle" style="color:green"></i>
                                        @else
                                            <i class="fa fa-circle" style="color:red"></i>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

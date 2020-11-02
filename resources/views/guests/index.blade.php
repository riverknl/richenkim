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
                            <td width="25px">Aanwezig</th>
                            <td width="25px">RSVP</th>
                            </thead>
                            <tbody>
                            @foreach($guests->where('special_guest', 1) as $guest)
                                <tr>
                                    <td><a href="{{ url('/dashboard/guests/' . $guest->id) }}">{{ $guest->fullName }}</a></td>
                                    <td>
                                        @if($guest->is_coming == 1)
                                            <i class="fa fa-circle" style="color:green"></i>
                                        @else
                                            <i class="fa fa-circle" style="color:red"></i>
                                        @endif
                                    </td>
                                    <td>
                                        {{ $guest->token }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <h2>Gasten</h2>
                        <table class="table table-striped table-hover">
                            <thead>
                            <th>Naam</th>
                            <td width="25px">Aanwezig</th>
                            <td width="25px">RSVP</th>
                            </thead>
                            <tbody>
                            @foreach($guests->where('special_guest', 0) as $guest)

                                <tr>
                                    <td><a href="{{ url('/dashboard/guests/' . $guest->id) }}">{{ $guest->fullName }}</a></td>
                                    <td>
                                        @if($guest->is_coming == 1)
                                            <i class="fa fa-circle" style="color:green"></i>
                                        @else
                                            <i class="fa fa-circle" style="color:red"></i>
                                        @endif
                                    </td>
                                    <td>
                                        {{ $guest->token }}
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

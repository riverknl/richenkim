@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><a href="{{ url('/dashboard/guests') }}">Gasten</a></div>
                    <div class="card-body">
                        <h2>Dag gasten</h2>
                        <table class="table table-striped table-hover">
                            <thead>
                            <th>Naam</th>
                            <td width="25px">Aanwezig</th>
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
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <h2>Gasten</h2>
                        <table class="table table-striped table-hover">
                            <thead>
                            <th>Naam</th>
                            <td width="25px">Aanwezig</th>
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
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Statistieken</div>
                    <div class="card-body">
                        <ul>
                            <li>Aantal genodigde gasten: {{ $guests->count() }}</li>
                            <li>Aantal dag gasten: {{ $guests->where('special_guest', 1)->count() }}</li>
                            <li>Aantal aanwezige dag
                                gasten: {{ $guests->where('special_guest', 1)->where('is_coming', 1)->count() }}</li>
                            <li>Overige gasten: {{ $guests->where('special_guest', 0)->count() }}</li>
                            <li>Overige aanwezige
                                gasten: {{ $guests->where('special_guest', 0)->where('is_coming', 1)->count() }}</li>
                            <li>Aantal aanwezige gasten totaal: {{ $guests->where('is_coming', 1)->count() }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

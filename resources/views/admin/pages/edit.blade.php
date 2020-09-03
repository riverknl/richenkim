@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Gastenlijst</div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                            <th>Naam</th>
                            <th>Aanwezig</th>
                            </thead>
                            <tbody>
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

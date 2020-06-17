@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Programma</div>
                    <div class="card-body">
                        <p>
                            <a class="btn btn-primary" href="{{ url('/dashboard/program/create') }}"><i class="fa fa-plus"></i> Programma Item Toevoegen</a>
                        </p>
                        <table class="table table-striped table-hover">
                            <thead>
                            <th>Titel</th>
                            <th>Omschrijving</th>
                            <th>Van</th>
                            <th>Tot</th>
                            <th></th>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

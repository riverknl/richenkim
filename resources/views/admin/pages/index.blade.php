@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Pagina's</div>
                    <div class="card-body">
                        <p>
                            <a class="btn btn-primary" href="{{ url('/dashboard/pages/create') }}"><i class="fa fa-plus"></i> Pagina Toevoegen</a>
                        </p>
                        <table class="table table-striped table-hover">
                            <thead>
                            <th>Titel</th>
                            </thead>
                            <tbody>
                            @foreach($pages as $page)
                                <tr>
                                    <td><a href="{{ url('/dashboard/pages/edit/' . $page->id) }}">{{ $page->title }}</a></td>
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

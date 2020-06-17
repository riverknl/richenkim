@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Gast toevoegen</div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ url('/dashboard/guests') }}">
                            @csrf
                            <div class="form-group">
                                <label>Voornaam</label>
                                <input class="form-control" name="first_name" value="{{ old('first_name') }}">
                            </div>
                            <div class="form-group">
                                <label>Achternaam</label>
                                <input class="form-control" name="last_name" value="{{ old('last_name') }}">
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <label>Telefoon</label>
                                <input class="form-control" name="phone" value="{{ old('phone') }}">
                            </div>
                            <div class="form-group">
                                <label>Adres</label>
                                <input class="form-control" name="street" value="{{ old('street') }}">
                            </div>
                            <div class="form-group">
                                <label>Postcode</label>
                                <input class="form-control" name="postcode" value="{{ old('postcode') }}">
                            </div>
                            <div class="form-group">
                                <label>Stad</label>
                                <input class="form-control" name="city" value="{{ old('city') }}">
                            </div>
                            <div class="form-group">
                                <label>Aanwezig</label>
                                <input class="form-check" type="checkbox" name="is_coming">
                            </div>
                            <div class="form-group">
                                <label>Dag gast</label>
                                <input class="form-check" type="checkbox" name="special_guest">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Opslaan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

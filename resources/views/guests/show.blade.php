@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Gast</div>
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
                        <form method="POST" action="{{ url('/dashboard/guests/' . $guest->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Voornaam</label>
                                <input class="form-control" name="first_name" value="{{ old('first_name', $guest->first_name) }}">
                            </div>
                            <div class="form-group">
                                <label>Achternaam</label>
                                <input class="form-control" name="last_name" value="{{ old('last_name', $guest->last_name) }}">
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input class="form-control" name="email" value="{{ old('email', $guest->email) }}">
                            </div>
                            <div class="form-group">
                                <label>Telefoon</label>
                                <input class="form-control" name="phone" value="{{ old('phone', $guest->phone) }}">
                            </div>
                            <div class="form-group">
                                <label>Adres</label>
                                <input class="form-control" name="street" value="{{ old('street', $guest->street) }}">
                            </div>
                            <div class="form-group">
                                <label>Postcode</label>
                                <input class="form-control" name="postcode" value="{{ old('postcode', $guest->postcode) }}">
                            </div>
                            <div class="form-group">
                                <label>Stad</label>
                                <input class="form-control" name="city" value="{{ old('city', $guest->city) }}">
                            </div>
                            <div class="form-group">
                                <label>Aanwezig</label>
                                <input class="form-check" type="checkbox" name="is_coming" {{ $guest->is_coming ? 'checked' : '' }}>
                            </div>
                            <div class="form-group">
                                <label>Dag gast</label>
                                <input class="form-check" type="checkbox" name="special_guest" {{ $guest->special_guest ? 'checked' : '' }}>
                            </div>

                            <div class="form-group">
                                <label>RSVP Token</label>
                                <input class="form-control" name="token" value="{{ old('token', $guest->token) }}">
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

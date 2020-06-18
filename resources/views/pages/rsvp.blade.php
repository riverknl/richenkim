@extends('layouts.site')

@section('content')
        <div class="row">
            <div class="col-md-12 p-3">
                <div class="bg-primary text-center text-white p-4">
                    <h1 style="text-align:center;"><strong>RSVP</strong></h1>
                    <p></p>
                </div>
                <hr>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{ url('/rsvp/check') }}">
                    @csrf
                    <div class="form-group">
                        <label>Vul hieronder je RSVP code in.</label>
                        <input class="form-control" name="token" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Invoeren</button>
                    </div>
                </form>
            </div>
        </div>

@endsection

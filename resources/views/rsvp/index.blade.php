@extends('layouts.site')

@section('content')
    <div class="row">
        <div class="col-md-12">
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
            @if (!empty(session('status')))
                <div class="alert alert-{{ Session::get('status')['alert'] }} fade show" role="alert">
                    <div class="alert-text">
                        {{ Session::get('status')['text'] }}
                        @if(isset(Session::get('status')['link']))
                            @if(Session::get('status')['link'] != '')
                                <a href="{{ url( Session::get('status')['link']) }}" class="text-white">{{ SESSION::get('status')['link_title'] }}</a>
                            @endif
                        @endif
                    </div>
                    <div class="alert-close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="la la-close"></i></span></button>
                    </div>
                </div>
            @endif
            <form method="post" action="{{ url('/rsvp/opslaan') }}">
                @csrf
                @foreach($guests as $guest)
                    <div class="card  mb-2">
                        <div class="card-body">
                            <h5 class="card-title">{{ $guest->fullName }}</h5>
                            <p class="card-text"></p>
                            <div class="form-group">
                                <input class="check" name="is_coming[{{ $guest->id }}]" type="checkbox"
                                       {{ $guest->is_coming === 1 ? 'checked' : '' }} data-toggle="toggle"
                                       data-on="Ja, ik ben van de partij!" data-off="Nee, ik ben er niet bij."
                                       data-width="200" data-height="25" data-id="{{ $guest->id }}">
                            </div>

                            @if($guest->special_guest == 1)
                                <div id="info_{{ $guest->id }}" class="form-group">
                                    <label>Heb je allergieën? Laat het ons weten.</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
                <div class="form-group">
                    <button class="btn btn-primary btn-lg">Opslaan!</button>
                </div>
            </form>
        </div>
    </div>

@endsection

@push('js')
    <script>
        $(document).ready(function () {
            $('.check').each(function () {
                checked(this);
            });
        });

        $('.check').change(function () {
            checked(this);
        });

        function checked(deze) {
            var id = $(deze).data('id');
            var checked = deze.checked;
            if (checked == true) {
                $('#info_' + id).show();
            } else {
                $('#info_' + id).hide();
            }
        }
    </script>
@endpush

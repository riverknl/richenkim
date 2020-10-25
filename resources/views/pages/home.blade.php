@extends('layouts.site')

@section('content')
    @if(session('token') !== null)
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Hoi
                            @foreach($guests as $guest)
                                @if($loop->count > 1)
                                    @if($loop->first)
                                        {{ $guest->first_name }},
                                    @elseif($loop->last)
                                        & {{ $guest->first_name }}
                                    @else
                                        {{ $guest->first_name }}
                                    @endif
                                @else
                                    {{ $guest->first_name }}
                                @endif
                            @endforeach
                            !
                        </h5>
                        <p class="card-text">

                            Wij gaan trouwen en nodigen
                            @if(count($guests) > 1)
                                jullie
                            @else
                                jouw
                            @endif uit voor deze mooie dag.
                        </p>
                        <p class="card-text">
                            Op 27 mei 2021 geven wij elkaar het Ja-woord.
                        </p>
                        <p class="card-text">
                            Wij verwachten
                            @if(count($guests) > 1)
                                jullie
                            @else
                                jou
                            @endif om 15.00 uur voor de ceremonie in de Limonaia van Villa Agustus in Dordrecht.
                        </p>
                        <p class="card-text">
                            Aansluitend is de receptie van 16.00 tot 18.00 uur om gezellig met ons een borreltje te
                            drinken en te proosten op een mooie toekomst.

                        </p>
                        @if($guests[0]->special_guest == 1)
                            <p>
                                <strong>Maar wacht, er is meer!</strong>
                            </p>
                            <p class="card-text">
                                Omdat
                                @if(count($guests) > 1)
                                    jullie speciale gasten zijn. Nodigen wij jullie ook uit om aansluitend aan de
                                    receptie met ons te komen dineren in de Wantij kamer.
                                @else
                                    jij een speciale gast bent. Nodigen wij jou ook uit om aansluitend aan de receptie
                                    met ons te komen dineren in de Wantij kamer.
                                @endif
                            </p>
                        @endif
                        <p class="card-text">
                            Laat je ons weten of
                            @if(count($guests) > 1)
                                jullie er bij zijn?
                            @else
                                jij er bij bent?
                            @endif
                        </p>
                        <a href="{{ url('/rsvp') }}" class="btn btn-primary"><i class="fa fa-arrow-right"></i> RSVP</a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-md-12 p-3">
                <div class="card">
                    <div class="card-body">
                        <h2>Welkom!</h2>
                        <p>
                            Welkom op onze trouw website, hier vind je alle informatie die je als gast nodig hebt.
                        </p>
                        <h2>Uitnodiging gehad?</h2>
                        <p>
                            Heb je een uitnodiging van ons gehad? Op de <a href="{{ url('/rsvp') }}">RSVP</a> pagina kan je jouw/jullie persoonlijke code invoeren voor meer
                            informatie over onze trouwdag.
                        </p>
                        <a href="{{ url('/rsvp') }}" class="btn btn-primary"><i class="fa fa-arrow-right"></i> RSVP</a>

                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection

@push('js')

@endpush

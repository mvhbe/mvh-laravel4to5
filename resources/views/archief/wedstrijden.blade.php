@extends('mvh')

@section('pagetitle', 'Archief wedstrijduitslagen')
@section('pagedescription', 'Bekijk het archief met wedstrijduitslagen van visclub moed &amp; volharding herenthout')


@section('content')
	<h4>Archief - Uitslagen</h4>

    <h3>Uitslagen wedstrijdkalender {{ $kalender->jaar }} :</h3>
    @if(count($wedstrijden) == 0)
        Geen wedstrijduitslagen.
    @else
        @include('uitslag.overzicht', ['wedstrijden' => $wedstrijden])
    @endif
@endsection

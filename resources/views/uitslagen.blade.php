@extends('mvh')

@section('pagetitle', 'Uitslagen')
@section('pagedescription', 'Bekijk de recentste uitslagen van visclub moed &amp; volharding herenthout')


@section('content')
	<h4>Uitslagen</h4>

    @if (count($wedstrijden) === 0)
        Geen uitslagen beschikbaar.
    @else
        @include("uitslag.overzicht", ['wedstrijden' => $wedstrijden])
    @endif
@endsection

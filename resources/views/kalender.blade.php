@extends('mvh')

@section('pagetitle', "Kalender")
@section('pagedescription', 'Bekijk de recentste kalender met wedstrijden van visclub moed &amp; volharding herenthout')

@section('content')
	<h4>Kalender</h4>

    @include("kalenders.kalendertabel", ["kalender" => $kalender, "wedstrijden" => $wedstrijden])
@endsection

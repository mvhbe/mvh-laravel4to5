@extends('mvh')

@section('pagetitle', 'Archief - Kalenders')
@section('pagedescription', 'Bekijk oudere kalenders van visclub moed &amp; volharding herenthout')


@section('content')
	<h4>Archief - Kalenders</h4>

    @include("kalenders.kalendertabel", ['kalender' => $kalender, 'wedstrijden' => $wedstrijden])
@endsection

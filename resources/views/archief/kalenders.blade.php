@extends('mvh')

@section('pagetitle', 'Archief kalenders')
@section('pagedescription', 'Bekijk het archief met kalenders van visclub moed &amp; volharding herenthout')


@section('content')
	<h4>Archief - Kalenders</h4>

    <h3>Kalenders :</h3>
    @if($kalenders->count() == 0)
        Geen kalenders.
    @else
        @include('kalenders.overzicht', ['kalenders' => $kalenders])
    @endif
@endsection

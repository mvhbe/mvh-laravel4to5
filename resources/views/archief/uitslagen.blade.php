@extends('mvh')

@section('pagetitle', 'Archief - Uitslagen')
@section('pagedescription', 'Bekijk het archief met uitslagen van visclub moed &amp; volharding herenthout')


@section('content')
	<h4>Archief - Uitslagen</h4>

    @if($kalenders->count() == 0)
        Geen Uitslagen.
    @else
        <h3>Uitslagen :</h3>
        @include('uitslagen.uitslagen', ['kalenders' => $kalenders])
    @endif
@endsection

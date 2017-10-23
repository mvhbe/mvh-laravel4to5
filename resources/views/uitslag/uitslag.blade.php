@extends('mvh')

@section('pagetitle', 'WedstrijdUitslag')
@section('pagedescription', 'Bekijk de wedstrijduitslag van visclub moed &amp; volharding herenthout')


@section('content')
    <h3>Uitslagen</h3>
	@if(!isset($wedstrijd))
		Geen wedstrijduitslag beschikbaar.
	@else
        <h4>Wedstrijduitslag : {{ $wedstrijd->datum }} - {{ $wedstrijd->omschrijving }}</h4>

        <table class="table table-striped table-hover">
            @php($totaal = 0)
            <tr class="info">
                <th>Volgorde</th>
                <th>Deelnemer</th>
                <th>Plaats R1</th>
                <th>Gewicht R1</th>
                @if ($wedstrijd->aantal_reeksen > 1)
                    <th>Plaats R2</th>
                    <th>Gewicht R2</th>
                @endif
                @if ($wedstrijd->aantal_reeksen > 2)
                    <th>Plaats R3</th>
                    <th>Gewicht R3</th>
                @endif
                <th>Totaal</th>
                <th>Opmerkingen</th>
            </tr>
            @foreach($uitslagen as $uitslag)
                <tr>
                    <td align="center">{{ $uitslag->volgorde }}</td>
                    <td align="left">{{ $uitslag->deelnemer }}</td>
                    <td align="center">{{ $uitslag->plaats1 }}</td>
                    <td align="right">{{ number_format($uitslag->gewicht1, 0, ",", ".") }}</td>
                    @if ($wedstrijd->aantal_reeksen > 1)
                        <td align="center">{{ $uitslag->plaats2 }}</td>
                        <td align="right">{{ number_format($uitslag->gewicht2, 0, ",", ".") }}</td>
                    @endif
                    @if ($wedstrijd->aantal_reeksen > 2)
                        <td align="center">{{ $uitslag->plaats3 }}</td>
                        <td align="right">{{ number_format($uitslag->gewicht3, 0, ",", ".") }}</td>
                    @endif
                    <td align="right">{{ number_format($uitslag->totaal_gewicht, 0, ",", ".") }}</td>
                    <td align="left">{{ $uitslag->opmerkingen }}</td>
                </tr>
                @php($totaal = $totaal + $uitslag->totaal_gewicht)
            @endforeach
            <tfoot>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    @if ($wedstrijd->aantal_reeksen > 1)
                        <td></td>
                        <td></td>
                    @endif
                    @if ($wedstrijd->aantal_reeksen > 2)
                        <td></td>
                        <td></td>
                    @endif
                    <td align="right"><b>Totaal</b></td>
                    <td align="right"><b>{{ number_format($totaal, 0, ",", ".") }}</b></td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    @endif
@endsection

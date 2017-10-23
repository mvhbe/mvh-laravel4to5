@if(count($kalender) === 0)
    Geen kalender.
@else
    <h3>Wedstrijdkalender {{ $kalender->jaar }}</h3>
    @if(count($wedstrijden) > 0)
        <table class="table table-striped table-hover ">
            <tr class="info">
                <th>Datum</th>
                <th>Omschrijving</th>
                <th>Aanvang</th>
                <th>Opmerkingen</th>
            </tr>
            @foreach($wedstrijden as $wedstrijd)
                <tr>
                    <td>{{ $wedstrijd->datum }}</td>
                    <td>{{ $wedstrijd->omschrijving }}</td>
                    <td>{{ $wedstrijd->aanvang }}</td>
                    <td>{{ $wedstrijd->opmerkingen }}</td>
                </tr>
            @endforeach
        </table>
    @endif
@endif

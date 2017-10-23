<table class="table table-striped table-hover ">
    <tr class="info">
        <th>Datum</th>
        <th>Omschrijving</th>
    </tr>
    @foreach($wedstrijden as $wedstrijd)
        <tr>                            
            <td><a href="{{ URL::to('/uitslag/' . $wedstrijd->wedstrijd_id) }}" title="{{ $wedstrijd->datum }}">{{ $wedstrijd->datum }}</a></td>
            <td>{{ $wedstrijd->omschrijving }}</td>
        </tr>
    @endforeach
</table>

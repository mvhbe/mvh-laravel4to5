<table class="table table-striped table-hover ">
    <tr class="info">
        <th>Uitslagen</th>
    </tr>
    @foreach($kalenders as $kalender)
        <tr>
            <td><a href="{{ URL::to('/archief/uitslagen/' . $kalender->id) }}" title="Wedstrijdkalender {{ $kalender->jaar }}">Wedstrijdkalender {{ $kalender->jaar }}</a></td>
        </tr>
    @endforeach
</table>


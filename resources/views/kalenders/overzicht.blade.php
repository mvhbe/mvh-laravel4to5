<table class="table table-striped table-hover ">
    <tr class="info">
        <th>Kalenders</th>
    </tr>
    @foreach($kalenders as $kalender)
        <tr>
            <td><a href="{{ URL::to('/archief/kalender/' . $kalender->id) }}" title="Wedstrijdkalender {{ $kalender->jaar }}">Wedstrijdkalender {{ $kalender->jaar }}</a></td>
        </tr>
    @endforeach
</table>

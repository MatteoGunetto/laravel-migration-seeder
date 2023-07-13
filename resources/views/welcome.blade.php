@section('content')
    <ul>
        @foreach ($trains as $train)
            <li>
                <div><span>Azienda: </span>{{ $train->azienda }}</div>
                <div><span>Stazione di partenza: </span>{{ $train->stazione_partenza }}</div>
                <div><span>Stazione di arrivo: </span>{{ $train->stazione_arrivo }}</div>
                <div><span>Orario di partenza: </span>{{ $train->orario_partenza }}</div>
                <div><span>Orario di arrivo: </span>{{ $train->orario_arrivo }}</div>
                <div><span>Codice treno: </span>{{ $train->codice }}</div>
                <div><span>In Orario: </span>
                    @if ($train->in_orario == 1)
                        Sì
                    @else
                        No
                    @endif
                </div>
                <div><span>Cancellato: </span>
                    @if ($train->in_orario == 1)
                        Sì
                    @else
                        No
                    @endif
                </div>
            </li>
        @endforeach
    </ul>
@endsection

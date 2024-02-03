@extends('layouts.main')

@section('main')
{{--main: list programming train--}}
    <section class="container">
        <h2>Partenza</h2>
        <ul class="p-0">
            @foreach ($trains as $train )
            <li class="list-group-item">
                <h3><strong>{{ $train['azienda']}}</strong></h3>
                {{--qui la vista del model--}}
                <p>{{ $train['codice_treno']}}</p>
                {{--qui la vista del model--}}
                <h5>Partenza da {{ $train['stazione_partenza']}}</h5>
                <h6>{{ $train['orario_partenza'] }}</h6>
            </li>                
            @endforeach
        </ul>
    </section>
{{--main: list programming train--}}
@endsection
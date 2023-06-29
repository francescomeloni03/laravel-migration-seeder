@extends('layouts.app')

@section('content')



<div class="mainContainer">
    <div class="container-lg d-flex flex-wrap ">
        @foreach ($trains as $train)
            <div class="movieCard mt-3 p-3  border border-white w-50">
                <h3 class="pb-2"> Azienda: {{ $train->azienda }}</h3>
                <p>Tratta: {{ $train->stazione_partenza }} - {{ $train->stazione_arrivo }} </p>
                <p>Orario Partenza: {{ $train->orario_partenza }} Arrivo: {{ $train->orario_arrivo }}</p>
                <p>Codice treno: {{ $train->codice_treno }}</p>
                <p>NUmero Carrozze: {{ $train->numero_carrozze }}</p>
                
            </div>
        @endforeach
    </div>
</div>

@endsection
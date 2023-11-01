@extends('layouts.base')

@section('title')
    Class 02 | Components
@endsection

@section('h')
    Class 02 | Components
@endsection

@section('content')
    <div class="container m-3 p-3">
        <div class="card" style="width: 28rem;">
            <img src="{{ asset('assets/img/vegeta.png') }}" class=" ml-4 card-img-top" alt="Vegeta">
            <div class="card-body mr-4">
                <h5 class="card-title mt-4" >Vegeta</h5>
                <p class="card-text mb-4">
                <p><strong>Vegeta</strong> es un saiyajin, una raza de guerreros extremadamente poderosa en el universo de
                    Dragon Ball.</p>
    
                <p>Es un personaje complejo y uno de los protagonistas de la serie. Inicialmente, se presenta como un
                    antagonista, pero a lo largo de la historia, evoluciona y se convierte en un aliado invaluable para los
                    héroes.</p>
    
                </p>
                <a href="https://ademass.com" target="_blank" class="btn btn-success">Ademass</a>
            </div>
        </div>
    </div>
@endsection

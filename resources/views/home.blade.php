@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <a href="{{ route('patient.index') }}">
                <div class="card mb-3">
                  <img class="card-img-top" src="{{url('/images/bg-home.jpg')}}" alt="Card image cap">
                  <div class="card-body text-center">
                    <h2 class="card-title">Administrar Pacientes</h2>
                  </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection

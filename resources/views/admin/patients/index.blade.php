@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center mb-4">
		<div class="col-8">
			<a href="{{ route('patient.create') }}"role="button" class="btn btn-primary float-right">Crear Paciente</a>
		</div>	
	</div>
	
	<patients-table 
		:editurl="{{ json_encode(route('patient.edit', ['patient' => '#'])) }}"
		:showtreatment="{{ json_encode(route('treatment.show', ['treatment' => '#'])) }}"
	/>
	
</div>
@endsection
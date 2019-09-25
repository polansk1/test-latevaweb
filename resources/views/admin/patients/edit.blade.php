@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-6">
			<div class="card">
				<div class="card-header">Editar Paciente</div>
				<div class="card-body">
					<form action="{{ route('patient.update', $patient->id)}}" method="POST">
						{{method_field('PATCH')}}
						@include('admin.patients.partials.form')
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
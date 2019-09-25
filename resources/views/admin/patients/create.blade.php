@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-6">
			<div class="card">
				<div class="card-header">Crear Paciente</div>
				<div class="card-body">
					<form action="{{ route('patient.store')}}" method="POST">
						@include('admin.patients.partials.form')
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
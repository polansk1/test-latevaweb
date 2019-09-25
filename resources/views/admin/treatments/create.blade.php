@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-6">
			<div class="card">
				<div class="card-header">Crear Tratamiento para {{ $patient->first_name }} {{ $patient->last_name }}</div>
				<div class="card-body">
					<form action="{{ route('treatment.store')}}" method="POST">
						@include('admin.treatments.partials.form')
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
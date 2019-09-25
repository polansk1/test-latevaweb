@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-6">
			<div class="card">
				<div class="card-header">Crear Tratamiento</div>
				<div class="card-body">
					<form action="{{ route('treatment.update', $treatment->id)}}" method="POST">
						{{method_field('PATCH')}}
						@include('admin.treatments.partials.form')
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
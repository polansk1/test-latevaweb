@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center mb-4">
		<div class="col-5">
			<h2>{{ $patient->first_name  }} {{ $patient->last_name }}</h2>
		</div>
		<div class="col-3">
			<a href="{{ route('treatment.create', $patient->id) }}"role="button" class="btn btn-primary float-right">Añadir tratamiento</a>
		</div>	
	</div>
	@foreach($treatments as $treatment)
		<div class="row justify-content-center mb-5">
			<div class="col-8">
				<div class="card">
				  <div class="card-header">
				  		<div class="float-right">
				  			<a href="{{ route('treatment.edit', $treatment->id) }}" class="btn btn-dark btn-sm  abtn" role="button"><i class="fas fa-user-edit"></i></a>
				  			<button onclick="deleteTreatment({{$treatment->id}})"class="btn btn-dark btn-sm  abtn" role="button"><i class="fas fa-trash-alt"></i></button>
				  		</div> 	
				  </div>
				  <div class="card-body">
				    <h5 class="card-title font-weight-bold">Tratamiento: {{ $treatment->name }}</h5>
				    <p class="card-text">{{ $treatment->description }}</p>
				  </div>
				</div>
			</div>
		</div>
	@endforeach
</div>
@endsection
@push('scripts')
<script>
    function deleteTreatment(id){
    	axios.delete(id).then(response => {
    		location.reload();
    	}).catch(e => {
    		console.log(e)
    	})
    }

</script>

@endpush
<style>
h1{
	padding: 0px;
	margin: 0px;
}
.abtn{
	width: 30px;
}
i{
	font-size: 15px;
}
</style>
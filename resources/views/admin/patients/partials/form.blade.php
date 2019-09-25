@csrf
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="form-group">
    <label for="first_name">Nombre:</label>
    <input type="text" class="form-control" name="first_name" id="first_name" value="@if(old('first_name')) {{old('first_name') }}@else @if(isset($patient)) {{ $patient->first_name }}@endif @endif">
</div>
<div class="form-group">
    <label for="last_name">Apellidos:</label>
    <input type="text" class="form-control" name="last_name" id="last_name" value="@if(old('last_name')) {{old('last_name') }}@else @if(isset($patient)) {{ $patient->last_name }}@endif @endif">
</div>
<div class="form-group">
	<label for="date_of_birth" class="control-label">Fecha de Nacimiento:</label>
    @if(isset($patient))
	    <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" max="{{ today() }}" value="{{ $patient->date_of_birth }}">
    @else
        <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" max="{{ today() }}" value="">
    @endif
</div>
<div class="form-group float-right">
	<a href="{{ route('patient.index') }}" role="button" class="btn btn-dark">Volver</a>
	<input class="btn btn-primary" type="submit" value="Guardar"></input>
</div>

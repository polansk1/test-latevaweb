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
    <label for="name">Tratamiento:</label>
    <input type="text" class="form-control" name="name" id="name" value="@if(old('name')) {{old('name') }}@else @if(isset($treatment)) {{ $treatment->name }}@endif @endif">
</div>
<div class="form-group">
    <label for="description">Descripción del tratamiento:</label>
    <textarea rows="8" type="text" class="form-control" name="description" id="description" value="">@if(old('description')) {{old('description') }}@else @if(isset($treatment)) {{ $treatment->description }}@endif @endif</textarea>
    <input type="hidden" name="patient_id" id="patiend_id" value="@if(isset($patient)){{ $patient->id }}@endif">
</div>

<div class="form-group float-right">
	<a href="{{ route('treatment.show', $patient->id) }}" role="button" class="btn btn-dark">Volver</a>
	<input class="btn btn-primary" type="submit" value="Guardar"></input>
</div>
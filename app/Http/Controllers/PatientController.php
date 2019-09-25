<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;
use App\Http\Requests\PatientRequest;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();

        return view('admin.patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientRequest $request)
    {
        
        $patient = Patient::create($request->all());

        return redirect()->route('patient.index')->with('success', 'Paciente creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient  $Patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $Patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        $patient = Patient::where('id', $patient->id)->first();

        return view('admin.patients.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $Patient
     * @return \Illuminate\Http\Response
     */
    public function update(PatientRequest $request, Patient $patient)
    {
        $patient = Patient::find($patient->id);
        $patient->first_name    = $request->first_name;
        $patient->last_name     = $request->last_name;
        $patient->date_of_birth = $request->date_of_birth;
        $patient->save();

        return redirect()->route('patient.index')
            ->with('success','Paciente actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $Patient
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::find($id)->delete();
    }
}

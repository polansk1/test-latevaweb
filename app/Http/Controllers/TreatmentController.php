<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $patient = Patient::find($id);

        return view('admin.treatments.create', compact('patient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $treatment = Treatment::create([
            'patient_id'  => $request->patient_id,
            'name'        => $request->name,
            'description' => $request->description, 
        ]);

        $treatment->save();

        return redirect()->route('treatment.show', $request->patient_id)->with('success', 'Tratamiento creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $treatments = Treatment::where('patient_id', $id)->get();
        $patient    = Patient::where('id', $id)->first();

        return view('admin.treatments.show', compact('treatments', 'patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $treatment = Treatment::where('id', $id)->first(); 
        $patient   = Patient::where('id', $treatment->patient_id)->first();

        return view('admin.treatments.edit', compact('treatment', 'patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $treatment               = Treatment::find($id);
        $treatment->name         = $request->name;
        $treatment->description  = $request->description;
        $treatment->save();

        return redirect()->back()
            ->with('success','Paciente actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $treatment = Treatment::find($id)->delete();
    }
}

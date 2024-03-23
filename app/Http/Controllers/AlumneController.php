<?php

namespace App\Http\Controllers;

use App\Models\Alumne;
use Illuminate\Http\Request;

class AlumneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnes = Alumne::orderBy('created_at', 'desc')->get();
        return view('alumnes.index', compact('alumnes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alumnes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'dni_nie' => 'required|max:255|unique:alumnes',
            'nom_complet' => 'required|max:255|unique:alumnes',
            'data_naixement' => 'nullable|date',
          ]);
        Alumne::create($request->all());
        return redirect()->route('alumnes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumne $alumne)
    {
        $alumne = Alumne::where('id', $alumne->id)->first();
        return view('alumnes.show', compact('alumne'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumne $alumne)
    {
        $alumne = Alumne::where('id', $alumne->id)->first();
        return view('alumnes.edit', compact('alumne'));
    }

    /**
     * Show the form for deleting the specified resource.
     */
    public function delete(Alumne $alumne)
    {
        $alumne = Alumne::where('id', $alumne->id)->first();
        return view('alumnes.delete', compact('alumne'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumne $alumne)
    {
        if ($request->dni_nie != $alumne->dni_nie) {
            $request->validate([
                'dni_nie' => 'required|max:255|unique:alumnes',
            ]);
        }
        if ($request->nom_complet != $alumne->nom_complet) {
            $request->validate([
                'nom_complet' => 'required|max:255|unique:alumnes',
            ]);
        }
        Alumne::find($alumne->id)->update($request->all());
        return redirect()->route('alumnes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumne $alumne)
    {
        $alumne = Alumne::where('id', $alumne->id)->first();
        $alumne->delete();
        return redirect()->route('alumnes.index');
    }
}

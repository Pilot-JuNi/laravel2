<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Kurse;
use App\Models\Teacher;
 
class KurseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kurse = Kurse::with('teacher')->get();
        return view('kurse.index', compact('kurse'));
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = Teacher::all();
        return view('kurse.create', compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kursname' => 'required|string|max:255',
            'beschreibung' => 'nullable|string',
            'anzahl_studenten' => 'required|integer|min:0|max:30',
            'anzahl_stunden' => 'required|integer|min:0',
            'teacher_id' => 'required|exists:teachers,id',
        ]);

        Kurse::create($validated);
        return redirect()->route('kurse.index')->with('success', 'Kurs wurde erfolgreich hinzugefügt.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kurs = Kurse::with('teacher')->findOrFail($id);
        return view('kurse.show', compact('kurs'));
    }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kurs = Kurse::findOrFail($id);
        $teachers = Teacher::all();
        return view('kurse.edit', compact('kurs', 'teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kurs = Kurse::findOrFail($id);
        
        $validated = $request->validate([
            'kursname' => 'required|string|max:255',
            'beschreibung' => 'nullable|string',
            'anzahl_studenten' => 'required|integer|min:0|max:30',
            'anzahl_stunden' => 'required|integer|min:0',
            'teacher_id' => 'required|exists:teachers,id',
        ]);

        $kurs->update($validated);
        return redirect()->route('kurse.index')->with('success', 'Kurs wurde erfolgreich aktualisiert.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kurs = Kurse::findOrFail($id);
        $kurs->delete();
        return redirect()->route('kurse.index')->with('success', 'Kurs wurde erfolgreich gelöscht.');
    }
}
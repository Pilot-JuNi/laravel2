<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'kuerzel' => 'required|string|max:3|unique:teachers,Kürzel',
            'deputat' => 'nullable|integer|min:0',
        ]);

        Teacher::create($validated);
        return redirect()->route('teachers.index')->with('success', 'Lehrer wurde erfolgreich hinzugefügt.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher = Teacher::findOrfail($id);
        return view('teachers.show', compact('teacher'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $teacher = Teacher::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'kuerzel' => 'required|string|max:3|unique:teachers,Kürzel,' . $id,
            'deputat' => 'integer|min:0',
        ]);

        $teacher->update($validated);
        return redirect()->route('teachers.index')->with('success', 'Lehrer wurde erfolgreich aktualisiert.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();
        return redirect()->route('teachers.index')->with('success', 'Lehrer wurde erfolgreich gelöscht.');
    }

    /**
     * Show confirmation page before deleting.
     */
    public function confirmDelete(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.confirmDelete', compact('teacher'));
    }
}

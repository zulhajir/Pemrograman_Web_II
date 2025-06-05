<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Majors;

class MajorsController extends Controller
{
    public function index()
    {
        $majors = Majors::all();
        return view('majors.index', compact('majors'));
    }
    public function create()
    {
        return view('majors.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:10|unique:majors,code',
            'description' => 'nullable|string',
        ]);
        Majors::create($validated);
        return redirect()->route('majors.index')->with('success', 'Major created successfully');
    }
    public function detail(string $id)
    {
        $major = Majors::findOrFail($id);
        return view('majors.detail', compact('major'));
    }
    public function update(string $id)
    {
        $major = Majors::findOrFail($id);
        return view('majors.update', compact('major'));
    }
    public function edit(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:10|unique:majors,code,' . $id,
            'description' => 'nullable|string',
        ]);

        $major = Majors::findOrFail($id);
        $major->update($validated);

        return redirect()->route('majors.index')->with('success', 'Major updated successfully');
    }
    public function destroy(string $id)
    {
        $major = Majors::findOrFail($id);
        $major->delete();

        return redirect()->route('majors.index')->with('success', 'Major deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use App\Models\Penerima;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    public function index()
    {
        $assessments = Assessment::with('penerima')->get();
        return view('assessment.index', compact('assessments'));
    }

    public function create()
    {
        $penerimas = Penerima::all();
        return view('assessment.create', compact('penerimas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'penerima_id' => 'required|exists:penerima,id',
            'kesehatan' => 'required|numeric|min:0|max:100',
            'pendidikan' => 'required|numeric|min:0|max:100',
            'pekerjaan' => 'required|numeric|min:0|max:100',
            'penghasilan' => 'required|numeric|min:0|max:100',
            'kondisi_rumah' => 'required|numeric|min:0|max:100',
        ]);

        Assessment::create($request->all());
        return redirect()->route('assessment.index')->with('success', 'Data assessment berhasil ditambahkan.');
    }

    public function show($id)
    {
        $assessment = Assessment::with('penerima')->findOrFail($id);
        return view('assessment.show', compact('assessment'));
    }

    public function edit($id)
    {
        $assessment = Assessment::findOrFail($id);
        $penerimas = Penerima::all();
        return view('assessment.edit', compact('assessment', 'penerimas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'penerima_id' => 'required|exists:penerima,id',
            'kesehatan' => 'required|numeric|min:0|max:100',
            'pendidikan' => 'required|numeric|min:0|max:100',
            'pekerjaan' => 'required|numeric|min:0|max:100',
            'penghasilan' => 'required|numeric|min:0|max:100',
            'kondisi_rumah' => 'required|numeric|min:0|max:100',
        ]);

        $assessment = Assessment::findOrFail($id);
        $assessment->update($request->all());

        return redirect()->route('assessment.index')->with('success', 'Data assessment berhasil diperbarui.');
    }

    public function destroy(Assessment $assessment)
    {
        $assessment->delete();
        return redirect()->route('assessment.index')->with('success', 'Data assessment berhasil dihapus.');
    }
}

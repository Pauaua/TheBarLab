<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollment;

class EnrollmentFixedController extends Controller
{
    public function index()
    {
        $enrollments = Enrollment::where('user_id', 2)->where('course_id', 2)->get();
        return view('enrollments_fixed.index', compact('enrollments'));
    }

    public function create()
    {
        return view('enrollments_fixed.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'enrollment_date' => 'required|date',
            'status' => 'required|string|max:255',
            'completed_at' => 'nullable|date',
        ]);
        $validated['user_id'] = 2;
        $validated['course_id'] = 2;
        Enrollment::create($validated);
        return redirect()->route('enrollments-fixed.index')->with('success', 'Inscripción creada correctamente.');
    }

    public function show($id)
    {
        $enrollment = Enrollment::where('id', $id)->where('user_id', 2)->where('course_id', 2)->firstOrFail();
        return view('enrollments_fixed.show', compact('enrollment'));
    }

    public function edit($id)
    {
        $enrollment = Enrollment::where('id', $id)->where('user_id', 2)->where('course_id', 2)->firstOrFail();
        return view('enrollments_fixed.edit', compact('enrollment'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'enrollment_date' => 'required|date',
            'status' => 'required|string|max:255',
            'completed_at' => 'nullable|date',
        ]);
        $enrollment = Enrollment::where('id', $id)->where('user_id', 2)->where('course_id', 2)->firstOrFail();
        $enrollment->update($validated);
        return redirect()->route('enrollments-fixed.index')->with('success', 'Inscripción actualizada correctamente.');
    }

    public function destroy($id)
    {
        $enrollment = Enrollment::where('id', $id)->where('user_id', 2)->where('course_id', 2)->firstOrFail();
        $enrollment->delete();
        return redirect()->route('enrollments-fixed.index')->with('success', 'Inscripción eliminada correctamente.');
    }
}

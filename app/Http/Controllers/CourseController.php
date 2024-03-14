<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'banner' => 'required|url',
            'participants' => 'required|integer|min:0'
        ]);

        $course = Course::create($request->all());

        return response()->json(['message' => 'Course created successfully', 'data' => $course], 201);
    }

    public function index()
    {
        $courses = Course::all();

        return response()->json(['data' => $courses], 200);
    }
}

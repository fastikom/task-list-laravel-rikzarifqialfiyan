<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
	public function create()
	{
		$jobs = \App\Job::latest()->get();
		return view('tasks.create', compact('jobs'));
	}
public function store(Request $request)
{
    // Validasi data
    $this->validate($request, [
      'title' => 'required|max:255|min:3',
      'body' => 'required',
    ]);

    // Input data
    \App\Job::create($request->all());

    // Jika selesai kita ingin lokasi halamannya dimana.
    return redirect()->back();
}
}

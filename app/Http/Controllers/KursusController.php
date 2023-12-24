<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KursusController extends Controller
{
    public function index()
    {
        $kursus=Course::all();

        return view('kursus.index', compact('kursus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kursus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMateriRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_kursus' => ['required'],
            'deskripsi' => ['required'],
            'durasi' => ['required'],
        ]);
        $validatedData['slug'] = Str::slug($request->nama_kursus);
       
        Course::create($validatedData);

        return redirect()->route('kursus');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function show(Course $Course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('kursus.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMateriRequest  $request
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $validatedData = $request->validate([
        //     'nama_kursus' => ['required'],
        //     'deskripsi' => ['required'],
        //     'durasi' => ['required'],
        // ]);
        $validatedData=$request->all();
        $validatedData['slug'] = Str::slug($request->nama_kursus);
        $Course=Course::findOrFail($id);
        $Course->update($validatedData);

        return redirect()->route('kursus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $Course)
    {
        $Course->delete();
        return redirect()->back();
    }
}

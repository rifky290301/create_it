<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\JenisProyek;
use Illuminate\Http\Request;
use App\Http\Resources\ProjectResource;

class ProjectController extends Controller
{
    public function read()
    {
        $projects = Project::with('jenisProyek')->latest()->get();
        return ProjectResource::collection($projects);
    }

    public function show(JenisProyek $jenisProyek, Project $project)
    {
        // return new NoteResource($note);
        return ProjectResource::make($project);
    }

    public function store()
    {
        // dd("tes");
        request()->validate([
            'nama' => 'required',
            'instansi' => 'required',
            'email' => 'required',
            'nomorWa' => 'required',
            'jenisProyek' => 'required',
            'tujuanPembuatan' => 'required',
            'deskripsi' => 'required',
            'deadline' => 'required',
        ]);

        $jenis = JenisProyek::findOrFail(request('jenisProyek'));

        $note = Project::create([
            'nama' => request('nama'),
            'slug' => \Str::slug(request('nama')),
            'instansi' => request('instansi'),
            'email' => request('email'),
            'nomor_wa' => request('nomorWa'),
            'jenis_proyek_id' => $jenis->id,
            'tujuan_pembuatan' => request('tujuanPembuatan'),
            'deskripsi' => request('deskripsi'),
            'deadline' => request('deadline'),
            'desain' => request('desain'),
            'catatan' => request('catatan'),
            'pertanyaan' => request('pertanyaan'),
        ]);

        return response()->json([
            'message' => 'Proyek sedang dikirim',
            'note' => $note,
        ]);
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return response()->json([
            'message' => 'Your note was deleted',
        ], 200);
    }
}

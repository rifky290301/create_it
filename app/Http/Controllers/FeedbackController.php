<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Resources\FeedbackResource;

class FeedbackController extends Controller
{
    public function read()
    {
        $feedback = Feedback::latest()->get();
        return FeedbackResource::collection($feedback);
    }

    public function store()
    {
        // dd("tes");
        request()->validate([
            'nama' => 'required',
            'email' => 'required',
            'pesan' => 'required',
        ]);


        $note = Feedback::create([
            'nama' => request('nama'),
            'email' => request('email'),
            'pesan' => request('pesan'),
        ]);

        return response()->json([
            'message' => 'Proyek sedang dikirim',
            'note' => $note,
        ]);
    }

    public function destroy(Feedback $feedback)
    {

        // dd("tes");
        $feedback->delete();

        return response()->json([
            'message' => 'Your note was deleted',
        ], 200);
    }
}

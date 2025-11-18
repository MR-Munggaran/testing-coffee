<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;

class UploadController extends Controller
{
   public function create()
    {
        return view('uploads.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'nullable|string|max:255',
            'document_file' => 'required|file|mimes:pdf,doc,docx,txt|max:10240',
        ]);
        $path = $request->file('document_file')->store('documents', 'public');

        $upload = Upload::create([
            'title' => $request->title,
            'author' => $request->author,
            'document_file' => $path,
        ]);

        // 4. Redirect dan Pesan Sukses
        return redirect()->route('uploads.create')
                         ->with('success', 'Dokumen "' . $upload->title . '" berhasil diunggah dan disimpan.');
    }
}

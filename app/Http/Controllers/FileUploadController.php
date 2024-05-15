<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload()
    {
        return view('file-upload');
    }

    public function prosesFileUpload(Request $request)
    {
        $request->validate([
            'nama_file' => 'required|string|max:255',
            'berkas' => 'required|file|image|max:5000',
        ]);

        // Get the original file extension
        $extension = $request->berkas->getClientOriginalExtension();

        // Create the new filename
        $namaFileInput = $request->input('nama_file');
        $namaFile = $namaFileInput . '.' . $extension;

        // Move the file to the 'gambar' directory
        $request->berkas->move(public_path('gambar'), $namaFile);

        // Redirect to the show page with the image name in session
        return redirect()->route('showGambar')->with('namaFile', $namaFile);
    }
}


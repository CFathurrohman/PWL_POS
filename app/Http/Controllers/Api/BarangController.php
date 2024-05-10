<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BarangModel;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    public function index()
    {
        $barang = BarangModel::with('kategori', 'stok')->get();

        return response()->json([
            'status_code' => 200,
            'data' => $barang
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'barang_kode' => 'required',
            'barang_nama' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required',
            'kategori_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $barang = BarangModel::create([
            'kategori_id' => $request->kategori_id,
            'barang_kode' => $request->barang_kode,
            'barang_nama' => $request->barang_nama,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'image' => $request->image
        ]);

        if ($barang) {
            return response()->json([
                'success' => true,
                'barang' => $barang,
            ], 201);
        }

        return response()->json([
            'success' => false,
        ], 409);
    }

    public function show(BarangModel $barang)
    {
        $barang->load('kategori', 'stok');

        return response()->json([
            'status_code' => 200,
            'data' => $barang
        ]);
    }

    public function update(Request $request, BarangModel $barang)
    {
        $validator = Validator::make($request->all(), [
            'barang_kode' => 'required',
            'barang_nama' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required',
            'kategori_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        //if validations fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        BarangModel::find($barang)->update($request->all(), [
            $request->image->hashName()
        ]);
        $barang = BarangModel::with('kategori')->find($barang);
        if ($barang) {
            return response()->json([
                'success' => true,
                'barang' => $barang,
            ], 201);
        }
        //return JSON process insert failed
        return response()->json([
            'success' => false,
        ], 409);
    }

    public function destroy(BarangModel $barang)
    {
        $barang->delete();

        return response()->json([
            'status_code' => 204,
            'success' => true,
            'message' => 'Barang terhapus',
        ]);
    }
}
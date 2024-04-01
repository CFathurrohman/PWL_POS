<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StorePostRequest;
class KategoriController extends Controller

{
    public function index(KategoriDataTable $dataTable)
    {
        return  $dataTable->render('kategori.index');
        // $data = [
        //     'kategori_kode' => 'SNK',
        //     'kategori_nama' => 'Snack/Makanan Ringan',
        //     'created_at' => now()
        // ];
        // DB::table('m_kategori')->insert($data);
        // return 'Insert data baru berhasil';

        // $row = DB::table( 'm_kategori') -> where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
        // return 'Update data berhasil. Jumlah data yang diupdate: ' . $row.' baris';

        // $row = DB::table( 'm_kategori')->where ('kategori_kode','SNK')->delete();
        // return 'Delete data berhasil. Jumlah data yang dihapus: ' .$row. ' baris';

        // $data = DB::table('m_kategori')->get();
        // return view('kategori',['data' => $data]);
    }

    public function create(): View
    {
        return view('kategori.create');
    }

    public function store(StorePostRequest $request): RedirectResponse {
        $validated = $request->validated(); 
        $validated = $request->safe()->only(['kategori_kode', 'kategori_nama']); 
        $validated = $request->safe()->except(['kategori_kode', 'kategori_nama']); 
    
        return redirect('/kategori'); 
    }
    

    // public function store(Request $request): RedirectResponse
    // {                
    //     $validatedData = $request->validate([
    //         'kategori_kode' => 'required|unique:m_kategori|max:255',
    //         'kategori_nama' => 'required',
    //     ]);
            
        
    //     KategoriModel::create($validatedData);
    
    //     return redirect('/kategori');
    // }

    // public function store(Request $request){
    //     KategoriModel::create([
    //         'kategori_kode' => $request->kodeKategori,
    //         'kategori_nama' => $request->namaKategori,
    //     ]);
    // }

    public function update($id, Request $request)
    {
        $kategori = KategoriModel::find($id);

        $kategori->kategori_kode = $request->kodeKategori;
        $kategori->kategori_nama = $request->namaKategori;

        $kategori->save();

        return redirect('/kategori');
    }

    public function edit($id)
    {
        $kategori = KategoriModel::find($id);
        return view('kategori.edit', ['data' => $kategori]);
    }

    public function delete($id)
    {
        $kategori = KategoriModel::find($id);
        $kategori->delete();

        return redirect('/kategori');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\delete;

class UserController extends Controller
{
    public function index(){

        // $data = [
        //     'username' => 'customer-1',
        //     'nama' => 'Pelanggan',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 4,
        // ];

        // UserModel::insert($data);

        // $data =[
        //     'nama' => 'Pelanggan Pertama'
        // ];

        // UserModel::where('username','customer-1')->update($data);
        
        //     $data = [
        //         'level_id' => 2,
        //         'username' => 'manager_tiga',
        //         'nama' => 'manager 3',
        //         'password' => Hash::make('12345')
        //     ];
        //     UserModel::create($data);

        // $user = UserModel::all();

        // $user = UserModel::find(1);

        // $user = UserModel::where('level_id', 1)->first();

        // $user = UserModel::firstWhere('level_id', 1);

        // $user = UserModel::findOr(20, ['username','nama'], function() {
        //     abort(404);
        // });

        // $user = UserModel::findOrFail(1);

        // $user = UserModel::where('username', 'manager9')->firstOrFail();

        // $user = UserModel::where('level_id', 2)->count();
        // dd($user);

        // $user = UserModel::firstOrCreate(
        //     [
        //     'username' => 'manager',
        //     'nama' => 'Manager',
        //     ],
        // );

        // $user = UserModel::firstOrCreate(
        //     [
        //     'username' => 'manager22',
        //     'nama' => 'Manager Dua Dua',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2
        //     ],
        // );

        // $user = UserModel::firstOrNew(
        //     [
        //     'username' => 'manager',
        //     'nama' => 'Manager',
        //     ],
        // );

        // $user = UserModel::firstOrNew(
        //     [
        //     'username' => 'manager33',
        //     'nama' => 'Manager Tiga Tiga',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2
        //     ],
        // );

        // $user->save();

        
    //     $user = UserModel::create(
    //         [
    //         'username' => 'manager44',
    //         'nama' => 'Manager44',
    //         'password' => Hash::make('12345'),
    //         'level_id' => 2
    //         ],
    //     );

    //     $user->username = 'manager45';

    //     $user->isDirty(); //true
    //     $user->isDirty('username'); //true
    //     $user->isDirty('nama'); //false
    //     $user->isDirty('nama','username'); //true
        
    //     $user->isClean(); //falsee
    //     $user->isClean('username'); //false
    //     $user->isClean('nama'); //true
    //     $user->isClean('nama','username'); //false
        
    //     $user->save();
        
    //     $user->isDirty(); //false
    //     $user->isClean(); //true
    //     dd($user->isDirty());

        // $user = UserModel::create(
        //     [
        //     'username' => 'manager11',
        //     'nama' => 'Manager1',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2
        //     ],
        // );

        // $user->username = 'manager12';

        // $user->wasChanged(); //true
        // $user->wasChanged('username'); //true
        // $user->wasChanged('nama','username'); //true
        // $user->wasChanged('nama'); //false
        // $user->wasChanged('nama','username'); //true
        // dd($user->wasChanged(['nama','username']));

        // return view('user', ['data' => $user]);

        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }

    public function tambah()
    {
        return view('user_tambah');
    } 

    public function tambah_simpan(Request $request)
    {
        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id
        ]);
    }

    public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user_ubah', ['data' => $user]);
    } 

    public function ubah_simpan($id, Request $request) {
        $user = UserModel::find($id);
    
        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->password = Hash::make($request->password); // Remove single quotes around $request->password
        $user->level_id = $request->level_id;
    }

    public function hapus($id){
        $user = UserModel::find($id);
        $user->delete();
        return redirect('/user');
    }
    
}

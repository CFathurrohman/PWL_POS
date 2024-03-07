<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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

        
        $user = UserModel::create(
            [
            'username' => 'manager44',
            'nama' => 'Manager44',
            'password' => Hash::make('12345'),
            'level_id' => 2
            ],
        );

        $user->username = 'manager45';

        $user->isDirty(); //true
        $user->isDirty('username'); //true
        $user->isDirty('nama'); //false
        $user->isDirty('nama','username'); //true
        
        $user->isClean(); //falsee
        $user->isClean('username'); //false
        $user->isClean('nama'); //true
        $user->isClean('nama','username'); //false
        
        $user->save();
        
        $user->isDirty(); //false
        $user->isClean(); //true
        dd($user->isDirty());

        return view('user', ['data' => $user]);
    }
}
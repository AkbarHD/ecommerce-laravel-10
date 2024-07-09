<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::paginate(5);
        return view('admin.user', [
            'name' => 'User Management',
            'title' => 'user management',
            'users' => $user,
        ]);
    }

    public function addModal()
    {
        return view('admin.modal.modalUser', [
            // 'name' => 'User Management',
            'title' => 'Tambah User',
            'nik' => date('Ymd') . rand(000, 999)
        ]);
    }

    public function store(Request $request)
    {
        $data = new User();
        $data->nik = $request->nik;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->is_admin = 1;
        $data->tlp = $request->tlp;
        $data->alamat = $request->alamat;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->role = $request->role;
        $data->is_member = 0;
        $data->is_active = 1;

        if ($request->hasFile('foto')) {
            $photo = $request->file('foto');
            $fileName = date('Ymd') . '-' . $photo->getClientOriginalName();
            $photo->move(public_path('storage/user'), $fileName);
            $data->foto = $fileName;
        }

        $data->save();
        return redirect()->route('userManagement')->with('success', 'Product created successfully.');
    }
}

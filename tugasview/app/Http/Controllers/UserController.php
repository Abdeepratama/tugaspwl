<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; // Mengimpor model User

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Mengambil semua data pengguna dari tabel User
        return view('users.index', ['users' => $users]);
    }
}

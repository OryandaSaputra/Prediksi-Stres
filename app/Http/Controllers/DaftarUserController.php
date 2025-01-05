<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DaftarUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->has('q')) {
            $users = User::search(request('q'))->paginate(20); // Menggunakan pencarian berdasarkan query string 'q'
        } else {
            $users = User::latest()->paginate(20); // Menampilkan data users terbaru
        }

        return view('users_index', compact('users')); // Menampilkan data ke view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Form untuk menambah data user (jika diperlukan)
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Menyimpan data user baru (jika diperlukan)
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        // Menampilkan detail data user
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        // Form untuk edit data user (jika diperlukan)
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // Update data user
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Menghapus data user
        $user->delete();
        return redirect()->route('users.index');
    }
}

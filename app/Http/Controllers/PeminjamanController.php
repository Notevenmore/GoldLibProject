<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Http\Requests\StorePeminjamanRequest;
use App\Http\Requests\UpdatePeminjamanRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countdown = [];
        $peminjaman = Peminjaman::all()->where('user_id', Auth::user()->id);
        foreach($peminjaman as $pinjam){
            array_push($countdown, [
                'title' => $pinjam->book->name,
                'id' => $pinjam->book->id,
                'dates' => $pinjam->waktu_tenggat
            ]);
        }
        return view('borrowbook', [
            'title' => 'Count Down Borrow Book',
            'countdown' => $countdown
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Peminjaman::create([
            'user_id' => Auth::user()->id,
            'book_id' => $request->book,
            'waktu_tenggat' => $request->waktu_tenggat.' '.Carbon::now('Asia/Jakarta')->format('H:i:s'),
            'tanggal_peminjaman' => Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s'),
            'status_pengembalian' => false
        ]);
        return redirect()->route('countdown.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePeminjamanRequest $request, Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peminjaman $peminjaman)
    {
        //
    }
}

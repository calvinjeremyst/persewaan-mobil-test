<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use App\Models\Management;
use App\Models\ReturnCar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NavController extends Controller
{
    function home() {
        return view('home', ['key' => 'home']);
    }

    function management() {
        $management = Management::paginate(5);
        return view('management', ['key' => 'management', 'management' => $management]);
    }

    function search(Request $request) {
        $search = $request->search;
        $management = Management::where('merk','like','%'.$search.'%')->orwhere('model','like','%'.$search.'%')->paginate(5);
        $management->appends($request->all());
        return view('management', ['key' => '', 'management' => $management]);
    }

    function tambah(Request $request) {
        $management = Management::create([
            'merk' => $request->merk,
            'model' =>  $request->model,
            'nomor_plat' => $request->nomor_plat,
            'tarif_sewa' => $request->tarif_sewa
        ]);

        return redirect('/management');
    }

    function tambahView() {
        return view('add', ['key' => 'add']);
    }

    function detail() {
        return view('detail', ['key' => 'detail']);
    }


    function borrowView() {
        //$management = Management::all()->join('borrows','management.id',"!=",'borrows.id_mobil');
        $management = Management::all();
        return view('borrow', ['key' => 'borrow', 'management' => $management]);
    }

    function borrow(Request $request) {
        $borrow = Borrow::create([
            'id_mobil' => $request->id_mobil,
            'tanggal_mulai' =>  $request->tgl_mulai,
            'tanggal_selesai' => $request->tgl_selesai,
            'id_pengguna' => $request->id_pengguna
        ]);

        return redirect('/list');
    }

    function returnView() {
        return view('return', ['key' => 'return']);
    }

    function return(Request $request) {
        $borrow = Borrow::where('id_pengguna',"=",auth()->user()->id);
        $mobil = Management::where('id',"=",$borrow->id_mobil);
        if($borrow != null and $mobil->nomor_plat == $request){
            $jumlah_tanggal = ($borrow->tanggal_selesai - $borrow->tanggal_mulai);
            $jumlah_biaya = ($mobil->tarif_sewa * $jumlah_tanggal);
            $returnCar = ReturnCar::create([
                'id_mobil' => $borrow->id_mobil,
                'durasi_sewa' =>  $jumlah_tanggal,
                'jumlah_biaya' => $jumlah_biaya,
                'id_pengguna' => auth()->user()->id
            ]);
        } else {
            dd("Mobil Tidak Anda Sewa!");
        };

        return redirect('/return');
    }

    function list() {
        //$borrow = Borrow::where('id_pengguna',"=",auth()->user()->id);
        $borrow = Borrow::all();
        return view('list', ['key' => 'borrow', 'borrow' => $borrow]);
    }
}

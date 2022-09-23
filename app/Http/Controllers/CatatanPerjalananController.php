<?php

namespace App\Http\Controllers;

use App\Models\CatatanPerjalanan;
use Illuminate\Http\Request;

class CatatanPerjalananController extends Controller
{
    public function __construct(CatatanPerjalanan $catatanPerjalanan) //mengambil data dari Model secara kolektif
    {
        $this->catatanPerjalanan = $catatanPerjalanan;
    }

    public function index()
    {
        $catatanPerjalanans = $this->catatanPerjalanan->with('user')->get();
        return view('user.catper', [
            'catatanPerjalanans' => $catatanPerjalanans
        ]);
    }

    public function getUserInfo()
    {
        $userInfo = $this->catatanPerjalanan->all();
        return view('user.datauser', [
            'userInfo' => $userInfo
        ]);
    }
}

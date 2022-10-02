<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\CatatanPerjalanan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

class CatatanPerjalananController extends Controller
{
    public function __construct(CatatanPerjalanan $catatanPerjalanan, User $user) //mengambil data dari Model secara kolektif
    {
        $this->catatanPerjalanan = $catatanPerjalanan;
        $this->user = $user;
    }

    public function index()
    {
        $catatanPerjalanans = $this->catatanPerjalanan->where('user_id', auth()->user()->id)->with('user')->get();
        return view('user.catper', [
            'catatanPerjalanans' => $catatanPerjalanans
        ]);
    }

    public function getCatatanPerjalanan()
    {
        return view('user.tambahcatper');
    }

    public function postCatatanPerjalanan(Request $request)
    {
        $this->catatanPerjalanan->create($request->all());
        return redirect()->route('catper');
    }

    public function getUserInfo()
    {
        $userInfo = $this->catatanPerjalanan->all();
        return view('user.datauser', [
            'userInfo' => $userInfo
        ]);
    }

    public function getUserEdit()
    {
        $edits = $this->user->get();
        return view('user.editdatauser', [
            'edits' => $edits
        ]);
    }


    public function postUpdateUser(Request $request, $id)
    {
        $data = $this->user->find($id);
        if ($request->hasFile('foto')) {
            $destination = 'foto/'.$data->foto;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('foto');
            $extension = $file->getClientOriginalName();
            $filename = time().'.'.$extension;
            $file->move('foto/', $filename);
            $data->foto = $filename;
        }
        $data->update($request->all());
        return redirect()->route('user');
    }

    public function getDataUser()
    {
        $dataUser = $this->user->get();
        return view('admin.tableuser', [
            'dataUser' => $dataUser
        ]);
    }

}
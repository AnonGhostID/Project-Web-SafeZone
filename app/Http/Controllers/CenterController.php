<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\BimbinganKonseling;
use App\Models\Diary;
use App\Models\Karyawan;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class CenterController extends Controller
{
    public function edit ($id)
    {
        $user=User::where('id',$id)->first();
        if($user->role==0){
            $new=['role'=>1];
           
        }
        else{
            $new=['role'=>0];
        }
        User::where('id',$id)->update($new);
        return redirect()->route('list');   
    }

    public function delete($id)
    {
        User::find($id)->delete();

        return redirect()->route('list')->with('pesan', 'Data Berhasil Dihapus!');
    }

    public function index ()
    {
        $karyawan = Diary::latest()->get();
        $diaryCount= Diary::count();

        $user = User::latest()->get();
        $userCount = User::count();

        $report = Report::latest()->get();
        $reportCount = Report::count();

        $konseling = BimbinganKonseling::latest()->get();
        $konselingCount = BimbinganKonseling::count();

        return view('dashboard',compact('user','karyawan','report','konseling','diaryCount','userCount','reportCount','konselingCount'));
    }


}

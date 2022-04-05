<?php

namespace App\Http\Controllers;
use App\fanpage;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(function($request, $next){
            if(Gate::allows('manage-articles')) return $next($request);
            if(Gate::allows('user-display')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        })->except('admin');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function admin()
    {
        return view('admin');
    }
    public function formBio()
    {
        $bio= User::all();
        return view('form_bio',['bio'=> $bio]);
    }
    public function formUser()
    {
        return view('form_user');
    }
    public function insertFanpage(Request $request)
    {
        
        
        $add=new fanpage([
            
            'id_user' =>$request->input('id_user'),
            'tinggi_badan' => $request->input('tinggi_badan'),
            'berat_badan' => $request->input('berat_badan'),
            'no_telp' => $request->input('no_telp'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'agama' => $request->input('agama'),
            'hobi' => $request->input('hobi'),
            'pekerjaan' => $request->input('pekerjaan'),
            'prestasi' => $request->input('prestasi'),
            'kewarganegaraan' => $request->input('kewarganegaraan'),
            'moto' => $request->input('moto')
            
        ]);
        $add->save();
        
        return redirect('/formBio');
       
        
    }
    public function fanpage()
    {
        $bio= fanpage::all();
       
         return view('tampil_bio',['bio'=> $bio]);
        
    }
    public function pengguna()
    {
        $bio= User::all();
       
         return view('tampil_user',['bio'=> $bio]);
        
    }
    public function editbio($id)
    {
        $bio=fanpage::where('id',$id)->get();
        $user = User::all();
        return view('edit_bio',compact('bio','user'));
    }
    public function updateBio(Request $request)
    {
        
        $mem= fanpage::where('id',$request->input('id'))->first();

        $mem->tinggi_badan = $request->input('tinggi_badan');
        $mem->berat_badan = $request->input('berat_badan');
        $mem->no_telp = $request->input('no_telp');
        $mem->jenis_kelamin = $request->input('jenis_kelamin');
        $mem->agama = $request->input('agama');
        $mem->hobi = $request->input('hobi');
        $mem->prestasi = $request->input('prestasi');
        $mem->kewarganegaraan = $request->input('kewarganegaraan');
        $mem->moto = $request->input('moto');

        $mem->save();
         //return dd($kat);
        
        return redirect('/bio');
    }
    public function delBio($id)
    {
        $bio= fanpage::where('id',$id)->first()->delete(); 
         return redirect('/bio');
    }
    public function delUser($id)
    {
        $bio= fanpage::where('id',$id)->first()->delete(); 
         return redirect('/user');
    }
}

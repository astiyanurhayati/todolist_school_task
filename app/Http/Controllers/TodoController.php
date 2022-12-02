<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function register(){
        return view('pages.register');
        
    }

    public function login(){
        return view('pages.login');
        
    }

    public function completed(){
        return view('pages.dashboard.completed');
    }

    public function update_complated($id){
        Todo::where('id', '=', $id)->update([
            'status' => 1,
            'done_time' => \Carbon\Carbon::now(),
        ]);

        return redirect()->back()->with('done', 'Todo telah selesai di update');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function auth(Request $request){
        $request->validate([
            'username' => 'required|exists:users,username',
                'password' => 'required',
            ],
            [
                //costom massage
                'username.exists' => 'usersame ini belum tersedia',
                'username.required' => 'username harus diisi',
                'password.required' => 'password harus diisi'
            ],
         );

         $user = $request->only('username', 'password');

         //Authentication -> fitur yang menyimpan histori login 
         //menyimpan histori login 
         if(Auth::attempt($user)){
            return redirect()->route('modal');
         }else{
            return redirect()->back()->with('error', "gagal login, silahkan cek dan coba lagi!");
         }

        
    }

    public function registerAccount(Request $request){

        $request->validate([
            'email'=> 'required',
            'username'=> 'required|min:4',
            'password'=> 'required|min:4',
            'name'=> 'required|min:3'
        ]);
        // dd($request->all());

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $request->email
            
        ]);

        return redirect('/login')->with('success', 'Berhasil menambahkan akun! Silahkan login');
    }

    public function todo(){

        // ambil data dari table todos dengan model Todo
        //filter data di database -> where('Colum', 'perbandingan', 'value);
        $data = Todo::where('user_id', '=', Auth::user()->id)->get();
      
        return view('pages.dashboard.index', compact('data'));
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.modal2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=> 'required|min:3',
            'desc'=> 'required',
            'date'=> 'required',
            
        ]);

         //'user_id' untuk memberi tau data todo ini milik siapa, di ambil melalui fitur Auth.
        //menentukan todo itu punya siapa, sesuai user yang login siapa
        // 'status' tipenya boolean, 0 = blum di kerjakan, 1 = sudah di kerjakan (todonya)
        // mengirim data ke database table todols dengan model Todox
       Todo::create([
        //db        //form name=""
        'title' => $request->title,
        'date'=> $request->date,
        'desc' => $request->desc,
        'status' => 0,
        'user_id' => Auth::user()->id,
       ]);
       
       
        return redirect()->route('todo.index')->with('succesadd', 'data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        //menampilkan halaman input form edit,
        //mengambil data satu baris ketika colom id pada baris tersebut sama dengan id dari parameneter route
        $todo = Todo::where('id', $id)->first();

        //kirim data yang di abil ke file blade dengan commpact 
        return view('pages.dashboard.edit', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=> 'required|min:3',
            'desc'=> 'required',
            'date'=> 'required',
            
        ]);
        //cari baris data yang punya id sama dengan data id yang dikiirm ke parameter route
        //kalau ada ketemu, update colomn-colom datanya 
        Todo::where('id', $id)->update([
            'title' => $request->title,
            'date'=> $request->date,
            'desc' => $request->desc,
            'status' => 0,
            'user_id' => Auth::user()->id,
        ]);

        return redirect('/todo')->with('successupdate', 'data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Todo::where('id', '=', $id)->delete();
        return redirect()->back()->with('deleted', 'Data Telah di Hapus!');
    }
}

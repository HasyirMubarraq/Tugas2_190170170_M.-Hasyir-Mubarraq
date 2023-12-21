<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;
use App\Models\User;

class MatakuliahController extends Controller
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
       
            $users = User::all();
            $matakuliahs = Matakuliah::all();
            return view('home', compact('matakuliahs', 'users')); //
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('create'); //
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            Matakuliah::create(
                [
                    'nama_matakuliah' => $request->nama_matakuliah,
                    'sks' => $request->sks,
                    'dosen' => $request->dosen
                ]
            ); //
            return redirect()->route('matakuliah.index');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            //
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit(string $id)
        {
            $matakuliah = Matakuliah::find($id);
            return view('edit', ['matakuliah' => $matakuliah]); //
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, string $id)
        {
            Matakuliah::where('id', $id)
                ->update(
                    [
                        'nama_matakuliah' => $request->nama_matakuliah,
                        'sks' => $request->sks,
                        'dosen' => $request->dosen
                    ]
                );
            return redirect()->route('matakuliah.index');
        }
    
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy(string $id)
        {
            Matakuliah::destroy($id);
            return redirect()->route('matakuliah.index');
        }
    }
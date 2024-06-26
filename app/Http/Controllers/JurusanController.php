<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusan = Jurusan::all();
        return view('jurusan.index',compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'namajurusan'=>'required'
        ]);
        
        //input 
        $jurusan = Jurusan::create([
            'namajurusan' => $request->namajurusan
        ]);

        if($jurusan) {
            return redirect()->route('jurusan.index')->with('success', 'Data jurusan berhasil ditambahkan');
        }else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Jurusan $jurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        return view('jurusan.edit',compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
        public function update(Request $request, $id)
        {
            // Validate the request
            $request->validate([
                'namajurusan' => 'required'
            ]);

            // Find the specific Jurusan by id
            $jurusan = Jurusan::findOrFail($id);

            // Update the Jurusan instance
            $updateJurusan = $jurusan->update([
                'namajurusan' => $request->namajurusan
            ]);

            // Check if the update was successful
            if ($updateJurusan) {
                return redirect()->route('jurusan.index')->with('success', 'Data jurusan berhasil di update');
            } else {
                return redirect()->back();
            }
        }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        
        if ($jurusan->delete()) {
            return redirect()->route('jurusan.index')->with('success', 'Data Berhasil Di Delete');
        } else {
            return redirect()->route('jurusan.index')->with('error', 'Gagal Dihapus');
        }
    }
    
}

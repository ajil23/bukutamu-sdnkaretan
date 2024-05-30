<?php

namespace App\Http\Controllers;

use App\Exports\BukutamuExport;
use App\Models\Bukutamu;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class BukutamuController extends Controller
{
    public function index(){
        $datatamu = Bukutamu::paginate(10);
        return view('admin.bukutamu.bukutamu_view', compact('datatamu'));
    }

    public function add(){
        return view('admin.bukutamu.bukutamu_add');
    }

    public function store(Request $request){
        $datatamu = new Bukutamu();
        $datatamu->namatamu = $request->namatamu;
        $datatamu->jabatantamu = $request->jabatantamu;
        $datatamu->tanggal = $request->tanggal;
        $datatamu->tujuan = $request->tujuan;
        $datatamu->save();
        return redirect()->back() ->with('alert', 'Tersimpan!');
    }

    public function export_excel()
	{
		return Excel::download(new BukutamuExport, 'bukutamu-sdnkaretan.xlsx');
	}

    public function edit($id){
        $editdata = Bukutamu::find($id);
        return view('admin.bukutamu.bukutamu_edit', compact('editdata'));
    }

    public function update(Request $request, $id){
        $datatamu = Bukutamu::find($id);
        $datatamu->namatamu = $request->namatamu;
        $datatamu->jabatantamu = $request->jabatantamu;
        $datatamu->tanggal = $request->tanggal;
        $datatamu->tujuan = $request->tujuan;
        $datatamu->update();
        return redirect()->route('bukutamu.view');
    }

    public function delete($id){
        $bukutamu = Bukutamu::find($id);
        $bukutamu->delete();
        return redirect()->route('bukutamu.view');
    }
}

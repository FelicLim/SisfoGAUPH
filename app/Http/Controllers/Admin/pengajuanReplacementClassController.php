<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\pengajuanReplacementClass;
use Illuminate\Http\Request;

class pengajuanReplacementClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $pengajuanreplacementclass = pengajuanReplacementClass::where('nama_lengkap', 'LIKE', "%$keyword%")
                ->orWhere('nama_mata_kuliah', 'LIKE', "%$keyword%")
                ->orWhere('kelas', 'LIKE', "%$keyword%")
                ->orWhere('jadwal_tanggal_yang_akan_direplace', 'LIKE', "%$keyword%")
                ->orWhere('jadwal_jam_kuliah', 'LIKE', "%$keyword%")
                ->orWhere('tanggal_replacement_date', 'LIKE', "%$keyword%")
                ->orWhere('jam_replacement', 'LIKE', "%$keyword%")
                ->orWhere('alasan_melakukan_replacement_class', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $pengajuanreplacementclass = pengajuanReplacementClass::latest()->paginate($perPage);
        }

        return view('admin.pengajuan-replacement-class.index', compact('pengajuanreplacementclass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.pengajuan-replacement-class.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        pengajuanReplacementClass::create($requestData);

        return redirect('admin/pengajuan-replacement-class')->with('flash_message', 'pengajuanReplacementClass added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $pengajuanreplacementclass = pengajuanReplacementClass::findOrFail($id);

        return view('admin.pengajuan-replacement-class.show', compact('pengajuanreplacementclass'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $pengajuanreplacementclass = pengajuanReplacementClass::findOrFail($id);

        return view('admin.pengajuan-replacement-class.edit', compact('pengajuanreplacementclass'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $pengajuanreplacementclass = pengajuanReplacementClass::findOrFail($id);
        $pengajuanreplacementclass->update($requestData);

        return redirect('admin/pengajuan-replacement-class')->with('flash_message', 'pengajuanReplacementClass updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        pengajuanReplacementClass::destroy($id);

        return redirect('admin/pengajuan-replacement-class')->with('flash_message', 'pengajuanReplacementClass deleted!');
    }
}

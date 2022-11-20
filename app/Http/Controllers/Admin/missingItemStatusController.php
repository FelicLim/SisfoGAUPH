<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\missingItemStatus;
use Illuminate\Http\Request;

class missingItemStatusController extends Controller
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
            $missingitemstatus = missingItemStatus::where('name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $missingitemstatus = missingItemStatus::latest()->paginate($perPage);
        }

        return view('admin.missing-item-status.index', compact('missingitemstatus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.missing-item-status.create');
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
        
        missingItemStatus::create($requestData);

        return redirect('admin/missing-item-status')->with('flash_message', 'missingItemStatus added!');
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
        $missingitemstatus = missingItemStatus::findOrFail($id);

        return view('admin.missing-item-status.show', compact('missingitemstatus'));
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
        $missingitemstatus = missingItemStatus::findOrFail($id);

        return view('admin.missing-item-status.edit', compact('missingitemstatus'));
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
        
        $missingitemstatus = missingItemStatus::findOrFail($id);
        $missingitemstatus->update($requestData);

        return redirect('admin/missing-item-status')->with('flash_message', 'missingItemStatus updated!');
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
        missingItemStatus::destroy($id);

        return redirect('admin/missing-item-status')->with('flash_message', 'missingItemStatus deleted!');
    }
}

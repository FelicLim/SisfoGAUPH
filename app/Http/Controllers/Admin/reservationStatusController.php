<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\reservationStatus;
use Illuminate\Http\Request;

class reservationStatusController extends Controller
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
            $reservationstatus = reservationStatus::where('name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $reservationstatus = reservationStatus::latest()->paginate($perPage);
        }

        return view('admin.reservation-status.index', compact('reservationstatus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.reservation-status.create');
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
        
        reservationStatus::create($requestData);

        return redirect('admin/reservation-status')->with('flash_message', 'reservationStatus added!');
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
        $reservationstatus = reservationStatus::findOrFail($id);

        return view('admin.reservation-status.show', compact('reservationstatus'));
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
        $reservationstatus = reservationStatus::findOrFail($id);

        return view('admin.reservation-status.edit', compact('reservationstatus'));
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
        
        $reservationstatus = reservationStatus::findOrFail($id);
        $reservationstatus->update($requestData);

        return redirect('admin/reservation-status')->with('flash_message', 'reservationStatus updated!');
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
        reservationStatus::destroy($id);

        return redirect('admin/reservation-status')->with('flash_message', 'reservationStatus deleted!');
    }
}

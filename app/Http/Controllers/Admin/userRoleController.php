<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\userRole;
use Illuminate\Http\Request;

class userRoleController extends Controller
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
            $userrole = userRole::where('name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $userrole = userRole::latest()->paginate($perPage);
        }

        return view('admin.user-role.index', compact('userrole'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.user-role.create');
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
        
        userRole::create($requestData);

        return redirect('admin/user-role')->with('flash_message', 'userRole added!');
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
        $userrole = userRole::findOrFail($id);

        return view('admin.user-role.show', compact('userrole'));
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
        $userrole = userRole::findOrFail($id);

        return view('admin.user-role.edit', compact('userrole'));
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
        
        $userrole = userRole::findOrFail($id);
        $userrole->update($requestData);

        return redirect('admin/user-role')->with('flash_message', 'userRole updated!');
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
        userRole::destroy($id);

        return redirect('admin/user-role')->with('flash_message', 'userRole deleted!');
    }
}

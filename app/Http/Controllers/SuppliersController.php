<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Supplier;
use Illuminate\Http\Request;
use Session;

class SuppliersController extends Controller
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
            $suppliers = Supplier::where('name', 'LIKE', "%$keyword%")
				->orWhere('email', 'LIKE', "%$keyword%")
				->orWhere('telephone', 'LIKE', "%$keyword%")
				->orWhere('address', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $suppliers = Supplier::paginate($perPage);
        }

        return view('suppliers.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $suppliers = new Supplier;
        return view('suppliers.create', compact('suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     *
     * @Route("/supplier/store", name="supplier_store")
     * @Method("POST")
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        //dd($requestData);
        Supplier::create($requestData);

        Session::flash('flash_message', 'Supplier added!');

        return redirect('suppliers');
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
        $suppliers = Supplier::findOrFail($id);

        return view('suppliers.show', compact('suppliers'));
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
        $suppliers = Supplier::findOrFail($id);

        return view('suppliers.edit', compact('suppliers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $requestData = $request->all();
        $suppliers = Supplier::findOrFail($id);
        $suppliers->update($requestData);

        Session::flash('flash_message', 'Supplier updated!');

        return redirect('suppliers');
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
        Supplier::destroy($id);

        Session::flash('flash_message', 'Supplier deleted!');

        return redirect('suppliers');
    }
}
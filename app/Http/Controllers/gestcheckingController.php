<?php

namespace App\Http\Controllers;

use App\Models\gestcheckout;
use Illuminate\Http\Request;

class gestcheckingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gestcheckings = gestcheckout::all();
        return view('backend.gestchecking.index', [
            'gestcheckings'=>$gestcheckings,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        gestcheckout::find($id)->delete();
        toast('Delete Success','warning');
        return back();
    }
}

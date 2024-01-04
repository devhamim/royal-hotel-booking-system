<?php

namespace App\Http\Controllers;

use App\Models\careerlist;
use Illuminate\Http\Request;

class careerListController extends Controller
{

       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $careerlists = careerlist::all();
        return view('backend.careerlist.index', [
            'careerlists'=>$careerlists,
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
        $rules = [
            'department'=>'required',
            'post'=>'required',
            'vacancy'=>'required',
        ];

        $validatesData = $request->validate($rules);

        careerlist::create($validatesData);
        toast('Add Success','success');
        return back();
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
        careerlist::find($id)->delete();
        toast('Delete Success','warning');
        return back();
    }
}

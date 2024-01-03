<?php

namespace App\Http\Controllers;

use App\Models\rome;
use Illuminate\Http\Request;
use Str;

class roomsController extends Controller
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
        $rooms = rome::all();
        return view('backend.rooms.index',[
            'rooms'=>$rooms,
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
            'category'      =>'required',
            'title'         =>'required',
            'subtitle'      =>'required',
            'interior'      =>'required',
            'room_number'   =>'required',
            'adult'         =>'required',
            'childreen'     =>'',
            'price'         =>'required',
            'image'         =>'required',
            'description'   =>'required',
        ];

        $validatesData = $request->validate($rules);

        $validatesData['slug'] = Str::lower(str_replace(' ', '-', $request->title)). '-'. rand(0, 999999);
        // image
        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/rooms'), $file_name);
            $validatesData['image'] = $file_name;
        }

        rome::create($validatesData);
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
        $rooms = rome::find($id);
        return view('backend.rooms.edit', [
            'rooms'=>$rooms,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'category'      =>'required',
            'title'         =>'required',
            'subtitle'      =>'required',
            'interior'      =>'required',
            'room_number'   =>'required',
            'adult'         =>'required',
            'childreen'     =>'',
            'price'         =>'required',
            'image'         =>'',
            'description'   =>'required',
        ];

        $validatesData = $request->validate($rules);

         // image
         if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/rooms'), $file_name);
            $validatesData['image'] = $file_name;
        }

        rome::where('id', $id)->update($validatesData);
        toast('Add Success','success');
        return redirect()->route('rooms.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        rome::find($id)->delete();
        toast('Room Delete','error');
        return back();
    }
}

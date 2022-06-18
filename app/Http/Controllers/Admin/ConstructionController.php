<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Construction;
use Illuminate\Http\Request;

class ConstructionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $construction = Construction::get();

        return view('admin.index', ['construction' => $construction]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'years_of_start' => 'required',
            'years_of_finish' => 'required',
            'price' => 'required',
            'number_of_workers' => 'required',
            'image' => 'required',
        ]);

        $image_name = time() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('/public/images', $image_name);

        Construction::create([
            'name' => $request->name,
            'years_of_start' => $request->years_of_start,
            'years_of_finish' => $request->years_of_finish,
            'price' => $request->price,
            'number_of_workers' => $request->number_of_workers,
            'image' => $image_name,
        ]);

        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $construction = Construction::where('id', $id)->first();

        return view('admin.show', ['construction' => $construction]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $construction = Construction::where('id',$id)->first();
        // dd($construction->name);
        return view('admin.edit', ['construction' => $construction]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->file('image'));
        $construction = Construction::where('id', $id)->first();
        $params = $request->validate([
            'name' => 'required',
            'years_of_start' => 'required',
            'years_of_finish' => 'required',
            'price' => 'required',
            'number_of_workers' => 'required',
            'image' => 'nullable'
        ]);

        $image = null;
        if($construction->image){
            if($request->file('image')){
                $image = time() . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->storeAs('/public/images/', $image);

                unlink('storage/images/'. $construction->image);
            }
        }else{
            $image = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/public/images/', $image);
        }

        $data = [
            'name' => $request->name,
            'years_of_start' => $request->years_of_start,
            'years_of_finish' => $request->years_of_finish,
            'price' => $request->price,
            'number_of_workers' => $request->number_of_workers,
            'image' => $image??$construction->image
        ];

        $construction->update($data);

        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $construction = Construction::where('id',$id)->first();

        $construction->delete();

        return redirect()->route('admin.index');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testmonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestmonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testmonials = Testmonial::oldest()->paginate();
        return view('admin.testmonial.index',compact('testmonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testmonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

         // return $request->all();
        $data=[
            'review'      => $request->review,
            'description' => $request->description,
            'name'        => $request->name,
            'address'     => $request->address,
        ];
        if($request->file('thumbnail')){
            $file_name = $request->file('thumbnail')->store('testmonial/thumbnail/');
            $data['thumbnail'] = $file_name;
        }
        Testmonial::create($data);
        Session::flash('create');
        return redirect()->route('testmonial.index')->with('create',' Testmonial Successfully Created');
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
        $testmonial = Testmonial::where('id', $id)->first();
        // return $package;
        return view('admin.testmonial.edit', compact('testmonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // return $request->all();
        $data = [
            'review'      => $request->review,
            'description' => $request->description,
            'name'        => $request->name,
            'address'     => $request->address,
        ];
        // if($request->file('thumbnail')){
        //     $file_name = $request->file('thumbnail')->store('testmonial/thumbnail/');
        //     $data['thumbnail'] = $file_name;
        // }
        if($request->file('thumbnail')){
            $file_name = $request->file('thumbnail')->store('testmonial/thumbnail');
            $data['thumbnail'] = $file_name;
        }
        Testmonial::firstwhere('id', $id)->update($data);
        // if($request->file('thumbnail')){
        //     $file_name = $request->file('thumbnail')->store('testmonial/thumbnail');
        //     $data['thumbnail'] = $file_name;
        // }
        // Testmonial::firstwhere('id', $id)->update($data);
        Session::flash('warning');
        return redirect()->route('testmonial.index')->with('warning', ' testmonial Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       Testmonial ::where('id', $id)->delete();
        return redirect()->route('testmonial.index');
    }
}

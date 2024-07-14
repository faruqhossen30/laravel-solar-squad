<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{ /**
    * Display a listing of the resource.
    */
   public function index()
   {
       $services = Service::latest()->paginate();
       return view('admin.service.index',compact('services'));
   }

   /**
    * Show the form for creating a new resource.
    */
   public function create()
   {
       return view('admin.service.create');
   }

   /**
    * Store a newly created resource in storage.
    */
   public function store(Request $request)
   {

       // return $request->all();
       $data=[
           'title'       => $request->title,
           'description' => $request->description,
       ];
       if($request->file('thumbnail')){
           $file_name = $request->file('thumbnail')->store('service/thumbnail');
           $data['thumbnail'] = $file_name;
       }
       Service::create($data);
       Session::flash('create');
       return redirect()->route('service.index')->with('create',' service Successfully Created');
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
       $service = Service::where('id', $id)->first();
       // return $package;
       return view('admin.service.edit', compact('service'));
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(Request $request, string $id)
   {

       // return $request->all();
       $data = [
           'title'      => $request->title,
           'description' => $request->description,
       ];
       if($request->file('thumbnail')){
           $file_name = $request->file('thumbnail')->store('service/thumbnail');
           $data['thumbnail'] = $file_name;
       }
       Service::firstwhere('id', $id)->update($data);
       Session::flash('warning');
       return redirect()->route('service.index')->with('warning', ' service Successfully Updated');
   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy(string $id)
   {
       $service = Service::findOrFail($id);
       Storage::delete($service->thumbnail);
       $service->delete();
       return redirect()->route('service.index')->with('success','data successfully Deleted');
   }
}

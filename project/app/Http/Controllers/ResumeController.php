<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resume;
use App\Http\Requests\StoreValidationRequest;
use App\Http\Requests\UpdateValidationRequest;

class ResumeController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth:admin');
    }

  public function index()
    {
        $ads = Resume::all();
        return view('admin.resume.index',compact('ads'));
    }


    public function create()
    {
        return view('admin.resume.create');
    }


    public function store(StoreValidationRequest $request)
    {
        $ad = new Resume();
        if($request->duration == "Left")
        {
            $ck = Resume::where('duration','=','Left')->get()->count();
            if($ck >= 5)
            {
        return redirect()->route('admin-rs-index')->with('unsuccess',"Can't Add Anymore.");                
            }
        }
        if($request->duration == "Middle")
        {
            $ck = Resume::where('duration','=','Middle')->get()->count();
            if($ck >= 5)
            {
        return redirect()->route('admin-rs-index')->with('unsuccess',"Can't Add Anymore.");                
            }
        }
        if($request->duration == "Right")
        {
        if($request->duration == "Right")
        {
            $ck = Resume::where('duration','=','Right')->get()->count();
            if($ck >= 5)
            {
        return redirect()->route('admin-rs-index')->with('unsuccess',"Can't Add Anymore.");                
            }
        }
        }
        $ad->fill($request->all())->save();
        return redirect()->route('admin-rs-index')->with('success','New List Added Successfully.');
    }


    public function edit($id)
    {
        $ad = Resume::findOrFail($id);
        return view('admin.resume.edit',compact('ad'));
    }

    public function update(StoreValidationRequest $request, $id)
    {
        $ad = Resume::findOrFail($id);
        $ad->update($request->all());
        return redirect()->route('admin-rs-index')->with('success','List Updated Successfully.');
    }


    public function destroy($id)
    {
        $ad = Resume::findOrFail($id);
        $ad->delete();
        return redirect()->route('admin-rs-index')->with('success','List Deleted Successfully.');
	}
}

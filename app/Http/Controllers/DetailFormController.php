<?php

namespace App\Http\Controllers;

use App\Models\DetailForm;
use Illuminate\Http\Request;

class DetailFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detailform = DetailForm::all();
        return view('detailform.view', compact('detailform'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('detailform.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'email'=>'required',
            'gender'=>'required',
            'address'=>'required',
            'password'=>'required'
        ]);

        $detailform=new DetailForm();
        $detailform->username=$request->get('username');
        $detailform->email=$request->get('email');
        $detailform->gender=$request->get('gender');
        $detailform->address=$request->get('address');
        $detailform->password=$request->get('password');
        $status=$detailform->save();
        if($status){
            return redirect()->route('view.detailform')->with('success','detailform added successfylly');
        }
        else{
            return redirect()->back()->with('error','failed to add form details');
        }
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
        $detailform=DetailForm::find($id);
        return view('detailform.edit',compact('detailform'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'username'=>'required',
            'email'=>'required',
            'gender'=>'required',
            'address'=>'required',
            'password'=>'required',
        ]);

        $detailform=DetailForm::find($id);
        $detailform->username=$request->get('username');
        $detailform->email=$request->get('email');
        $detailform->gender=$request->get('gender');
        $detailform->address=$request->get('address');
        $detailform->password=$request->get('password');
        $status=$detailform->save();
        if($status){
            return redirect()->route('view.detailform')->with('success','formdetail updated successfylly');
        }
        else{
            return redirect()->back()->with('error','failed to update formdetail');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detailform = DetailForm::find($id);
        $status= $detailform->delete();
        if($status){
            return redirect()->route('view.detailform')->with('Success','formdetail deleted successfully');
        }
        else{
            return redirect()->back()->with('error','problem in deleting formdetail');
        }
    }
}

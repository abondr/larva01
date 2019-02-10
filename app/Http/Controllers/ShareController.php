<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Share;
use Session;
class ShareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $validatation = [
        'share_name' => 'required|unique:shares|max:255',
        'share_quantity' => 'required|max:1000|min:5',
        'share_price' => 'required|max:1000|min:5',
        'share_description' =>'required'
    ];
    public function index()
    {
        $shares = Share::paginate(10);
        return view("shares.index",compact("shares"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $share = new Share();
        return view("shares.form",compact("share"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->validatation);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $share = Share::find($id);
        return view("shares.show",compact("share"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $share = Share::find($id);
        return view("shares.form",compact("share"));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $share = Share::find($id);
        $share->delete();
        Session::flash('message', 'Share Deleted successfully'); 
        return redirect('share');
    }
}

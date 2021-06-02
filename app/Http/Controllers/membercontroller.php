<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;


class membercontroller extends Controller
{
    //
  function list()
  {
    $data = member::paginate(3);
    return view("list",['members'=>$data]);
  }


  function addmember(Request $req)
  {
    $member= new member;
    $member->name=$req->name;
    $member->address=$req->address;
    $member->email=$req->email;
    $member->save();
    return redirect()->route("list");
  }


  function delete($id)
  {
    $data=member::find($id);
    $data->delete();
    return redirect()->route('list');
  }


  function show($id)
  {
    $data = member::find($id);
    
    return view('update', ['data'=>$data]) ;    
  }
  
  
 

  function update(Request $req)
  {
    $data= member::find($req->id);
    $data->name=$req->name;
    $data->address=$req->address;
    $data->email=$req->email;
    $data->save();
    return redirect()->route("list");
  }
  
}

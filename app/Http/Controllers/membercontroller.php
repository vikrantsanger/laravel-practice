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

  function delete($id)
  {
    $data=member::find($id);
    $data->delete();
    return redirect('list');
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
    return redirect("list");
  }
  
}

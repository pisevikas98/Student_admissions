<?php

namespace App\Http\Controllers;
use App\international;

use Illuminate\Http\Request;

class internationalController extends Controller
{
    public function internationalform(){
    	return view('internationalform');
    }

    public function internationalformsave(Request $request){
    	$data = new international();
    	$data->fname = $request->fname;
    	$data->lname = $request->lname;
    	$data->dob = $request->dob;
    	$data->age = $request->age;
    	$data->gender = $request->gender;
    	$data->country = $request->country;
    	$data->nationality = $request->nationality;
    	$data->lang = $request->lang;
    	$data->address = $request->address;
    	$data->state = $request->state;
    	$data->postal = $request->postal;
    	$data->email = $request->email;
    	$data->phone = $request->phone;
    	$data->ed = $request->ed;
    	$data->save();

    	return redirect('internationalform')->with('success',' International student details Form submit successfully!');
    }
}

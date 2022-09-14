<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProfileResource;
use App\Models\Profile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required',
            'phone' => 'required',
            'sign' => 'required',
            'size' => 'required',
            'cdesign' => 'required',
            'budget' => 'required',
            'image' => 'required',

        ]);

        if($validator->fails()){
            return response()->json($validator->errors());       
        }

        $program = Profile::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'sign' => $request->sign,
            'size' => $request->size,
            'cdesign' => $request->cdesign,
            'budget' => $request->budget,
            'amount' => $request->amount,
            'image' => $request->image,
         ]);
    
        return response()->json(['Program created successfully.', new ProfileResource($program)]);
    }
    public function getData(){
        $data=Profile::all();
    return view('profiles',compact('data'));
    
    }

}

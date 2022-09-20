<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProgramResource;
use App\Models\Custom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class CustomController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required',
            'phone' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());       
        }

        $program = Custom::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'sign' => $request->sign,
            'help' => $request->help,
         ]);
    
        return response()->json(['Program created successfully.', new ProgramResource($program)]);
    }

    public function save(Request $request)
    {
        
        if(empty($request->id))
            $post = new Custom();
        else
            $post = Custom::find($request->id);
       
        $post->name = $request->name;
        $post->email = $request->email;
        $post->phone = $request->phone;
        $post->sign = $request->sign;
        $post->help = $request->help;
        $post->save();
    
        return response()->json(['Record saved successfully.']);
         
    }

    public function quote_detail($id)
    {
        $data = Custom::find($id)->toArray();
        return response()->json($data);
    }

    public function getData(){
        $data=Custom::all();
        return view('welcome',compact('data'));
    }



    public function delete_quote($id)
    {
        Custom::find($id)->delete();
        return response()->json(['Record deleted successfully.']);
    }
}

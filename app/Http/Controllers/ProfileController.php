<?php

namespace App\Http\Controllers;

use App\Exports\ProfilesExport;
use App\Http\Resources\ProfileResource;
use App\Models\Profile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProfileController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required',
            'phone' => 'required',
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
    public function delete_profile($id)
    {
        Profile::find($id)->delete();
        return response()->json(['Record deleted successfully.']);
    }
    public function save(Request $request)
    {
        
        if(empty($request->id))
            $post = new Profile();
        else
            $post = Profile::find($request->id);
    
        $post->name = $request->name;
        $post->last_name = $request->last_name;
        $post->email = $request->email;
        $post->phone = $request->phone;
        $post->sign = $request->sign;
        $post->size = $request->size;
        $post->amount = $request->amount;
        $post->cdesign = $request->cdesign;
        $post->budget = $request->budget;
        
        $post->image = $request->image;
       
        $post->update();
    
        return redirect('profiles');
    }
    public function export_profiles() 
    {
        return Excel::download(new ProfilesExport, 'profilesusers.xlsx');
    }
    public function profile_detail($id)
    {
        $data = Profile::find($id)->toArray();
        return response()->json($data);
    }

}

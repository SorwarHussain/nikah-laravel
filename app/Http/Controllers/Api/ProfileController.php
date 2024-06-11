<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:sanctum', 'verified']);
    }
    public function showProfile($id = null) {
        if($id!=null){
            $profile = Profile::where('id', $id)->first();
        }
        else{
            $userId = $id ?? Auth::user()->id;
            $profile = Profile::where('user_id', $userId)->first();
        }
        return response()->json($profile);
    }
    public function createProfile(ProfileRequest $request){
        $profile = Auth::user()->profile()->create($request->all());

        return response()->json($profile);
    }
    public function updateProfile(ProfileRequest $request, $id)
    {
        $profile = Profile::find($id);

        $profile->update($request->all());
        return response()->json($profile);
    }
}

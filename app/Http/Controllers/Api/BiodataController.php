<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function showBiodatas() {
        $profiles = Profile::all()->where('is_approved', true);
        return response()->json($profiles);
    }

    public function detailsBiodata($id) {
        $profile = Profile::find($id);
        
        if (!$profile) {
            return response()->json(['error' => 'Profile not found'], 404);
        }
        
        return response()->json($profile);
    }
}

<?php

namespace App\Http\Controllers\Api;
use App\Models\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:sanctum', 'verified']);
    }
    public function getWishlist()
    {
        $user = auth()->user();
        $wishlist = $user->wishlist()->get();

        return response()->json($wishlist);
    }
    public function addToWishlist(Profile $profile)
    {
        $user = auth()->user();
        if (!$user->wishlist()->where('profile_id', $profile->id)->exists()) {
            $user->wishlist()->attach($profile->id);
            return response()->json(['message' => 'Added to wishlist'], 200);
        }

        return response()->json(['message' => 'Already in wishlist'], 400);
    }

    public function removeFromWishlist(Profile $profile)
    {
        $user = auth()->user();
        if ($user->wishlist()->where('profile_id', $profile->id)->exists()) {
            $user->wishlist()->detach($profile->id);
            return response()->json(['message' => 'Removed from wishlist'], 200);
        }

        return response()->json(['message' => 'Not in wishlist'], 400);
    }
}

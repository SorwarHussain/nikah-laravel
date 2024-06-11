<?php

namespace App\Http\Controllers\Api;
use App\Models\Sadakah;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SadakahController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function showAllSadakah()
    {
        $sadakahs = Sadakah::all();
        return response()->json($sadakahs);
    }
    public function submitSadakahForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|string|max:40',
            'amount' => 'required|numeric|min:1',
            'payment_method' => 'required|string',
            'TrxId' => 'required|string|max:255',
        ]);

        Sadakah::create($request->all());

        return response()->json(['message' => 'Donation successful!']);
    }
    public function detailsSadakah($id) {
        $sadakah = Sadakah::find($id);
        
        if (!$sadakah) {
            return response()->json(['error' => 'Not found'], 404);
        }
        
        return response()->json($sadakah);
    }
}

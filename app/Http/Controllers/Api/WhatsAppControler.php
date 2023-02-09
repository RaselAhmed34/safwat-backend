<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\WhatsApp;
use Illuminate\Http\Request;

class WhatsAppControler extends Controller
{
    public function create(Request $request){
        $request->validate([
            'phone_number' => 'required|unique:whats_apps'
        ]);
        $whatsApp = new WhatsApp();
        $whatsApp->phone_number = $request->phone_number;
        $whatsApp->save();

        return response()->json(['message' =>'WhatsApp Number Send Successfully','error'=>$request->error]);
    }
}

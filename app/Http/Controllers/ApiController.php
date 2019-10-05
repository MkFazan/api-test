<?php

namespace App\Http\Controllers;



use App\Gallery;
use App\Profile;
use Illuminate\Http\Request;

class ApiController  extends Controller
{
    public function getGallery(){
        $gallery = Gallery::all();

        return response()->json($gallery);
    }

    public function getUsers() {
        $profiles = Profile::all();

        foreach ($profiles as $prof){
            $prof['address'] = json_decode($prof['address']);
            $prof['company'] = json_decode($prof['company']);
        }

        return response()->json($profiles);
    }

    public function uploadImage(Request $request){
        return $request;
    }
}
<?php

namespace App\Http\Controllers;



use App\Gallery;
use App\Http\Requests\UploadGallery;
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

    public function uploadImage(UploadGallery $request){

        try{
            $img = $request->img;
            $name = '_' . str_random(5) . str_random(9);
            $img_name = time() . $name;
            $file_path = 'app/public/uploads/';

            $img->move(storage_path($file_path), $img_name);
            $path = config('app.url') . '/storage/uploads/' . $img_name;

            Gallery::create([
                'img' => $path
            ]);

            return 'Success';
        } catch (\Throwable $e){
            return 'Error';
        }

    }
}
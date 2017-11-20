<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PhotoController extends Controller
{

    public function create($gallery_id)
    {
        return view('photo.create', compact('gallery_id'));
    }

    public function store(Request $request)
    {
        $gallery_id     = $request->input('gallery_id');
        $title          = $request->input('title');
        $description    = $request->input('description');
        $location       = $request->input('location');
        $image          = $request->file('image');
        $owner_id       = 1;

        // Check image upload
        
        if($image){
            $image_filename = $image->getClientOriginalName();
            $image->move(public_path('images'), $image_filename);
        }else{
            $image_filename = 'noimage.jpg';
        }

        // Insert Photo
        DB::table('photos')->insert(
            [
                'title'         => $title,
                'description'   => $description,
                'location'      => $location,
                'gallery_id'    => $gallery_id,
                'image'         => $image_filename,
                'owner_id'      => $owner_id
            ]
        );

        \Session::flash('message', 'Photo Added');

        return \Redirect::route('gallery.show', array('id' => $gallery_id));
    }

    public function show($id)
    {
        $photo = DB::table('photos')->where('id', $id)->first();
        return view('photo/show', compact('photo'));
    }

}

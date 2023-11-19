<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;
use PHPUnit\Framework\Constraint\FileExists;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = contact::all();
        return view('contact.update', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'email' => 'required |email|max:255',
            'phone' => 'required|max:255',
            'location' => 'required',
            'header' => 'required',
            'about' => 'required',
            'footer' => 'required',
            // 'header_photo' => 'required',
            // 'about_photo' => 'required',
            // 'footer_photo' => 'required',


        ]);

        // $photos = [
        //     'header_photo',
        //     'about_photo',
        //     'footer_photo',
        // ];

        // $photos_name = [];



         $update = contact::find($id);


        // foreach ($photos as $single_photo) {
        //     if ($request->hasFile($single_photo)) {

        //         if (file_exists('images/' . $update[$single_photo])) {
        //             unlink('images/' . $update[$single_photo]);
        //         }
        //         $file = $request[$single_photo];
        //         $path_file = time() . $file->getClientOriginalName();
        //         $photos_name[] = $path_file;
        //         $file->move('images', $path_file);
        //     } else {
        //         $header_photo = $update[$single_photo];
        //     }
        // }

        if ($request->hasFile('header_photo')) {
            $old_path = $update->header_photo;
            if (file_exists('images/' . $old_path)) {
                unlink('images/' . $old_path);
            }
            $file = $request->header_photo;
            $path_file = time() . $file->getClientOriginalName();
            $header_photo = $path_file;
            $file->move('images', $path_file);
        } else {
            $header_photo = $update->header_photo;
        }


        if ($request->hasFile('about_photo')) {
            $old_path = $update->about_photo;
            if (file_exists('images/' . $old_path)) {
                unlink('images/' . $old_path);
            }
            $file = $request->about_photo;
            $path_file = time() . $file->getClientOriginalName();
            $about_photo = $path_file;
            $file->move('images', $path_file);
        } else {
            $about_photo = $update->about_photo;
        }
        if ($request->hasFile('footer_photo')) {
            $old_path = $update->footer_photo;
            if (file_exists('images/' . $old_path)) {
                unlink('images/' . $old_path);
            }
            $file = $request->footer_photo;
            $path_file = time() . $file->getClientOriginalName();
            $footer_photo = $path_file;
            $file->move('images', $path_file);
        } else {
            $footer_photo = $update->footer_photo;
        }







        $update->update([
            'email' => $request->email,
            'phone' => $request->phone,
            'location' => $request->location,
            'header' => $request->header,
            'about' => $request->about,
            'footer' =>  $request->footer,
            'header_photo' => $header_photo,
            'about_photo' => $about_photo,
            'footer_photo' => $footer_photo,

        ]);

        session()->flash('Add', 'Sucess Update');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact)
    {
        //
    }
}

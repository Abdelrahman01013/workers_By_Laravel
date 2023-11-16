<?php

namespace App\Http\Controllers;

use App\Models\comment;
use App\Models\contact;
use App\Models\order;
use App\Models\Section;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $section = Section::all();
        $contact = contact::all();
        $comment = comment::all();

        return view('home.index', compact('section', 'contact', 'comment'));
    }

    public function story(Request $request)
    {
        $name = "USER";
        if ($request->has('name')) {
            $name = $request->name;
        } else {
        }

        comment::create([
            'name' => $name,
            'comment' => $request->comment
        ]);
        return back();
    }

    public function about()
    {
        $contact = contact::all();

        return view('home.about', compact('contact'));
    }

    public function service()
    {
        $section = Section::all();
        return view('home.service', compact('section'));
    }

    public function contact_us()
    {
        $section = Section::all();
        return view('home.contact', compact('section'));
    }

    public function order(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        order::create([
            'cutomer_name' => $request->name,
            'cutomer_number' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
            'section_id' => $request->section_id
        ]);

        session()->flash('Add', 'SUCCESS ORDERS');

        return back();
    }
}

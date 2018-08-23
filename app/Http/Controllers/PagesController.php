<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = "Main page!";
        // one option off passing props to view
        // return view('pages.index', compact('title'));
        // another way
        return view('pages.index')->with('title', $title);
    }

    public function about() {
        $title = 'About us';
        return view('pages.about')->with('title', $title);
    }

    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Prostitution', 'Smoothie Maker']
        );
        // passing an an array with associations
        return view('pages.services')->with($data);
    }
}

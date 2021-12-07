<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    //use Request;
    public $names = ["Anton", "Ruben"];

    public function index() {
        return ($this->names);
    }

    public function show($id) {
        return ($this->names[$id]);
        //return view('display_info', ['id' => $id]);
    }

    public function store() {
        $name = "Jerry";
        array_push($this->names, $name);
        return view('/message')->with('msg', 'Hello');
    }

    public function delete() {

    }
}

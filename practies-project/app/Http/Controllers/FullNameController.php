<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FullNameController extends Controller
{
    protected $fullName;


    public function getFullName()
    {
        return view('home');
    }

    public function createName(Request $data)
    {
            $this->fullName = $data->first_name.' '.$data->last_name;
            return view('home', ['result' => $this->fullName]);
    }

    public function infoUser()
    {
        return view('info');
    }

    public function kaziCom()
    {
        return view('about');
    }

    public function contactInfo()
    {
        return view('contact');
    }
}

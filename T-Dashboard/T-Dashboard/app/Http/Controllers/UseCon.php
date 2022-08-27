<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UseCon extends Controller
{


    public function index()
    {
        $fetch = User::all();
        return view('/basic-table', compact('fetch'));
    }




}

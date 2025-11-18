<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bean;

class BeansController extends Controller
{
    public function index()
    {
        $beans = Bean::all();
        return view('beans.catalog')->with('beans', $beans);
    }
    public function showFirst()
    {
        $bean = Bean::orderBy('id', 'asc')->first();
        return view('beans.home', compact('bean'));
    }

}

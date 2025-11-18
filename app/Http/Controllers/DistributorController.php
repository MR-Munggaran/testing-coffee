<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distributor;

class DistributorController extends Controller
{
    public function index()
    {
        $distributors = Distributor::all();
        return view('distributors.index', compact('distributors'));
    }

    public function create()
    {
        return view('distributors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'distributor_name' => 'required|string',
            'city' => 'required|string',
            'state' => 'nullable|string',
            'country' => 'nullable|string',
            'phone' => 'nullable|string',
            'email' => 'nullable|email',
        ]);

        Distributor::create($request->all());

        return redirect()->route('distributors.index')->with('success', 'Berhasil');
    }

    public function edit(Distributor $distributor)
    {
        return view('distributors.edit', compact('distributor'));
    }

    public function update(Request $request, Distributor $distributor)
    {
        $request->validate([
            'distributor_name' => 'required|string',
            'city' => 'required|string',
            'state' => 'nullable|string',
            'country' => 'nullable|string',
            'phone' => 'nullable|string',
            'email' => 'nullable|email',
        ]);

        $distributor->update($request->all());

        return redirect()->route('distributors.index')->with('success', 'Berhasil');
    }
}

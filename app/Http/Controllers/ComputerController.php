<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function create(): View
    {
        $viewData = []; 
        $viewData['title'] = 'Create Computer';

        return view('computer.create')->with('viewData', $viewData);
    }

    public function save(Request $request)
    {
        $request->validate([
            'reference' => 'required',
            'name' => 'required',
            'brand' => 'required',
            'quantity' => 'required',
            'type' => 'required',
            'description' => 'required',
            'price' => 'required|gt:0',
        ]);

        dd($request->all());
    }
}

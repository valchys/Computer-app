<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Computer;
use Illuminate\Http\RedirectResponse;

class ComputerController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Computer - Online Store';
        $viewData['subtitle'] = 'List of computers';
        $viewData['computers'] = Computer::all();

        return view('computer.index')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = []; 
        $viewData['title'] = 'Create Computer';

        return view('computer.create')->with('viewData', $viewData);
    }

    public function save(Request $request): RedirectResponse
    {
        Computer::validate($request);
        
        $newComputer = new Computer();
        $newComputer -> setReference($request->input('reference'));
        $newComputer -> setName($request->input('name'));
        $newComputer -> setBrand($request->input('brand'));
        $newComputer -> setQuantity($request->input('quantity'));
        $newComputer -> setType($request->input('type'));
        $newComputer -> setDescription($request->input('description'));
        $newComputer -> setPrice($request->input('price'));
        $newComputer -> save();

        return redirect()->route('computer.create')->with('success', 'Computer created successfully!');

    }
}

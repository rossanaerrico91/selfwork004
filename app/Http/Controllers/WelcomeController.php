<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = [
            ['name' => 'E-Commerce', 'description' => "Progetto di sito web ecommerce",'img'=>'ecommerce.jpeg'],
            ['name' => 'Magazzino', 'description' => "Progetto di gestionale per magazzino",'img'=>'magazzino.jpeg'],
            ['name' => 'SPID', 'description' => "Progetto di sito per lo SPID",'img'=>'spid.jpeg']
        ];

        return view('welcome', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

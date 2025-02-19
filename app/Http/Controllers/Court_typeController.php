<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\court_type;
class Court_typeController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $court_type = court_type::all();
        // return $court_type;
        return view('mcourt_type', compact('court_type'));
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

<?php

namespace App\Http\Controllers;

use App\Models\_Parent_;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response("SUCCESS", 200);
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
    public function show(_Parent_ $_Parent_)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, _Parent_ $_Parent_)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(_Parent_ $_Parent_)
    {
        //
    }
}

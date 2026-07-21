<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\OsisMember;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = OsisMember::with('osisClass:id,name', 'osisDepartement:id,name')
        ->get([
            'id',
            'uuid',
            'osis_class_id',
            'osis_departement_id',
            'name',
            'position'
        ]);

        return view ('back.member.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo 'halaman create member';
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
        echo 'halaman show member id : ' . $id;
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

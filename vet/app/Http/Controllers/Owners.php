<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;
use App\Http\Requests\OwnerRequest;

class Owners extends Controller
{
    public function index()
    {
        $owners = Owner::all();
        $data = [ "owners" => $owners];
        return view("owners/index", $data);
    }

    public function show(Owner $owner)
    {
        return view('owners/show', [
            "owner" => $owner
        ]);
    }

    public function create()
    {
        return view('owners/create');
    }

    public function createPost(OwnerRequest $request)
    {
        $data = $request->all();

        $newOwner = Owner::create($data);

        return redirect("/owners/{$newOwner->id}");
    }

    public function edit(Owner $owner)
    {
        return view('owners/edit', [
            "owner" => $owner
        ]);
    }
    public function editPost(OwnerRequest $request)
    {
        $data = $request->all();

        $newOwner = Owner::create($data);

        return redirect("/owners/{$newOwner->id}");
    }
}

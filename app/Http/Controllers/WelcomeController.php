<?php

namespace App\Http\Controllers;

use App\Models\welcome;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;


class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $welcome = Welcome::where('email', $request->email)->first();

        if ($welcome) {
            if (Hash::check($request->password, $welcome->password)) {
                return response('Login successful');
            } else {
                return response('Login failed', 401);
            }
        } else {
            $welcome = new Welcome();
            $welcome->email = $request->email;
            $welcome->password = Hash::make($request->password);
            $welcome->save();

            return response('User registered successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}

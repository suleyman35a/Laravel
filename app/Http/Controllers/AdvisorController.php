<?php

namespace App\Http\Controllers;

use App\Models\Advisor;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;


class AdvisorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $advisors = Advisor::latest()->paginate(5);

        return view('backend.admin.pages.advisors.index',compact('advisors'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('backend.admin.pages.advisors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'detail' => 'required',
            'tel' => 'required',
            'mail' => 'required',
        ]);

        Advisor::create($request->all());

        return redirect()->route('advisors.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Advisor $advisor): View
    {
        return view('backend.admin.pages.advisors.show',compact('advisor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Advisor $advisor): View
    {
        return view('backend.admin.pages.advisors.edit',compact('advisor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Advisor $advisor): RedirectResponse
    {
        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'detail' => 'required',
            'tel' => 'required',
            'mail' => 'required',
        ]);

        $advisor->update($request->all());

        return redirect()->route('backend.admin.pages.advisors.edit')
                        ->with('success','Advisor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Advisor $advisor): RedirectResponse
    {
        $advisor->delete();

        return redirect()->route('advisors.index')
                        ->with('success','Advisor deleted successfully');
    }
}





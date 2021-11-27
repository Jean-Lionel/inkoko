<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\PerteProduit;
use Illuminate\Http\Request;

class PerteProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $perteproduit = PerteProduit::where('quantite', 'LIKE', "%$keyword%")
                ->orWhere('produit_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $perteproduit = PerteProduit::latest()->paginate($perPage);
        }

        return view('perte-produit.index', compact('perteproduit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('perte-produit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        PerteProduit::create($requestData);

        return redirect('perte-produit')->with('flash_message', 'PerteProduit added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $perteproduit = PerteProduit::findOrFail($id);

        return view('perte-produit.show', compact('perteproduit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $perteproduit = PerteProduit::findOrFail($id);

        return view('perte-produit.edit', compact('perteproduit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $perteproduit = PerteProduit::findOrFail($id);
        $perteproduit->update($requestData);

        return redirect('perte-produit')->with('flash_message', 'PerteProduit updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        PerteProduit::destroy($id);

        return redirect('perte-produit')->with('flash_message', 'PerteProduit deleted!');
    }
}

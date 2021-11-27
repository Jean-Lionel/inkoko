<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\VentePoule;
use Illuminate\Http\Request;

class VentePouleController extends Controller
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
            $ventepoule = VentePoule::where('quantite', 'LIKE', "%$keyword%")
                ->orWhere('client_id', 'LIKE', "%$keyword%")
                ->orWhere('prix_unitaire', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $ventepoule = VentePoule::latest()->paginate($perPage);
        }

        return view('vente-poule.index', compact('ventepoule'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('vente-poule.create');
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
        
        VentePoule::create($requestData);

        return redirect('vente-poule')->with('flash_message', 'VentePoule added!');
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
        $ventepoule = VentePoule::findOrFail($id);

        return view('vente-poule.show', compact('ventepoule'));
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
        $ventepoule = VentePoule::findOrFail($id);

        return view('vente-poule.edit', compact('ventepoule'));
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
        
        $ventepoule = VentePoule::findOrFail($id);
        $ventepoule->update($requestData);

        return redirect('vente-poule')->with('flash_message', 'VentePoule updated!');
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
        VentePoule::destroy($id);

        return redirect('vente-poule')->with('flash_message', 'VentePoule deleted!');
    }
}

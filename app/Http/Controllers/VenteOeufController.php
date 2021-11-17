<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\VenteOeuf;
use Illuminate\Http\Request;

class VenteOeufController extends Controller
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
            $venteoeuf = VenteOeuf::where('quantite', 'LIKE', "%$keyword%")
                ->orWhere('client_id', 'LIKE', "%$keyword%")
                ->orWhere('prix_unitaire', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $venteoeuf = VenteOeuf::latest()->paginate($perPage);
        }

        return view('vente-oeuf.index', compact('venteoeuf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('vente-oeuf.create');
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
        
        VenteOeuf::create($requestData);

        return redirect('vente-oeuf')->with('flash_message', 'VenteOeuf added!');
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
        $venteoeuf = VenteOeuf::findOrFail($id);

        return view('vente-oeuf.show', compact('venteoeuf'));
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
        $venteoeuf = VenteOeuf::findOrFail($id);

        return view('vente-oeuf.edit', compact('venteoeuf'));
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
        
        $venteoeuf = VenteOeuf::findOrFail($id);
        $venteoeuf->update($requestData);

        return redirect('vente-oeuf')->with('flash_message', 'VenteOeuf updated!');
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
        VenteOeuf::destroy($id);

        return redirect('vente-oeuf')->with('flash_message', 'VenteOeuf deleted!');
    }
}

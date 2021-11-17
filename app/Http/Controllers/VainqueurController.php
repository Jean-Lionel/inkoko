<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Vainqueur;
use Illuminate\Http\Request;

class VainqueurController extends Controller
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
            $vainqueur = Vainqueur::where('nom', 'LIKE', "%$keyword%")
                ->orWhere('age', 'LIKE', "%$keyword%")
                ->orWhere('prix_unitaire', 'LIKE', "%$keyword%")
                ->orWhere('observations', 'LIKE', "%$keyword%")
                ->orWhere('type', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $vainqueur = Vainqueur::latest()->paginate($perPage);
        }

        return view('vainqueur.index', compact('vainqueur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('vainqueur.create');
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
        
        Vainqueur::create($requestData);

        return redirect('vainqueur')->with('flash_message', 'Vainqueur added!');
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
        $vainqueur = Vainqueur::findOrFail($id);

        return view('vainqueur.show', compact('vainqueur'));
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
        $vainqueur = Vainqueur::findOrFail($id);

        return view('vainqueur.edit', compact('vainqueur'));
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
        
        $vainqueur = Vainqueur::findOrFail($id);
        $vainqueur->update($requestData);

        return redirect('vainqueur')->with('flash_message', 'Vainqueur updated!');
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
        Vainqueur::destroy($id);

        return redirect('vainqueur')->with('flash_message', 'Vainqueur deleted!');
    }
}

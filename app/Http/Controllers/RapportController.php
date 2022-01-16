<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Fournisseur;
use App\Models\Produit;
use App\Models\Rapport;
use App\Models\VenteOeuf;
use App\Models\VentePoule;
use Illuminate\Http\Request;

class RapportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = Produit::all();    
        $label_stoks = $stocks->map->name;
        $qte_stoks = $stocks->map->quantite;

        $client_total = Client::all()->count();
         $v_oeufs = VenteOeuf::all();
        $v_poules  = VentePoule::all();

        $total_oeuf = 0;
        $total_poule = 0;

        foreach ($v_poules  as $key => $value) {
            // code...
            $total_poule += ($value->quantite * $value->prix_unitaire);
        }

        foreach ($v_oeufs  as $key => $value) {
            // code...
            $total_oeuf += ($value->quantite * $value->prix_unitaire);
        }
        $total_fournisseur = Fournisseur::all()->count();
        
        // NOMBRES TOTAL DES CLIENTS
        // NOMBRES TOTAL DES VENTES DES OEUFS OU DES POULES

        return view("rapport.index", 
            compact("label_stoks","qte_stoks","client_total",
                "total_oeuf", "total_poule", "total_fournisseur")
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function file_alimentation()
    { 
        return view("rapport.file_alimentation");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rapport  $rapport
     * @return \Illuminate\Http\Response
     */
    public function show(Rapport $rapport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rapport  $rapport
     * @return \Illuminate\Http\Response
     */
    public function edit(Rapport $rapport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rapport  $rapport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rapport $rapport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rapport  $rapport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rapport $rapport)
    {
        //
    }
}

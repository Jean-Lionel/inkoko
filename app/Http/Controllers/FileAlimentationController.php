<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Produit;
use Illuminate\Http\Request;
use App\Models\FollowProduct;
use App\Models\FileAlimentation;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FileAlimentationController extends Controller
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
            $filealimentation = FileAlimentation::where('produit', 'LIKE', "%$keyword%")
            ->orWhere('quantite', 'LIKE', "%$keyword%")
            ->orWhere('prix_unitaire', 'LIKE', "%$keyword%")
            ->orWhere('observations', 'LIKE', "%$keyword%")
            ->orWhere('type', 'LIKE', "%$keyword%")
            ->latest()->paginate($perPage);
        } else {
            $filealimentation = FileAlimentation::latest()->paginate($perPage);
        }
        $produits = Produit::orderBy('name','ASC')->get();
        return view('file-alimentation.index', 
            compact('filealimentation', 'produits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
         $produits = Produit::orderBy('name','ASC')->get();
        return view('file-alimentation.create', compact('produits'));
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
        $produit = Produit::findOrFail(  $request->produit_id);

            try{
                DB::beginTransaction();
                 if($produit->quantite >= $request->quantite)
                 $produit->quantite -= floatval($request->quantite);
                 FollowProduct::create([
                    "quantite" => $request->quantite,
                    "activite" => "SORTIE",
                    "produit_id" => $produit->id,
                    "description" => $produit->toJson(),
                    "user_id" => auth()->user()->id
                 ]);
                 $produit->save();
                   FileAlimentation::create($requestData);
                DB::commit();
            }catch(\Exception $e){
                dd($e);
            }
        return redirect('file-alimentation')->with('flash_message', 'FileAlimentation added!');
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
        $filealimentation = FileAlimentation::findOrFail($id);

        return view('file-alimentation.show', compact('filealimentation'));
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
        $filealimentation = FileAlimentation::findOrFail($id);
        $produits = Produit::orderBy('name','ASC')->get();
        return view('file-alimentation.edit', compact('filealimentation', 'produits'));
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
        $filealimentation = FileAlimentation::findOrFail($id);
        $filealimentation->update($requestData);
        return redirect('file-alimentation')->with('flash_message', 'FileAlimentation updated!');
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
        FileAlimentation::destroy($id);
        return redirect('file-alimentation')->with('flash_message', 'FileAlimentation deleted!');
    }
}

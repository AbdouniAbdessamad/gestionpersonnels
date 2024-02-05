<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use App\Models\Gestionp;
use Illuminate\Http\Request;

class GestionpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gestionps=Gestionp::get();
        return view('gestionp.index',['gestionps'=>$gestionps]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestionp.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'region' => 'string|required',
            'efp' => 'string|required',
            'annexe' => 'string|required',
            'corps' => 'string|required',
            'nomprenom' => 'string|required',
            'cin' => 'string|required',
            'genre' => 'string|required',
            'datenaissance' => 'required|date',
            'age' => 'numeric',
            'tel' => 'required',
            'email' => 'required|email',
            'situationfamiliale' => 'string|required',
            'fonction' => 'string|required',
            'statut' => 'string|required',
            'ppr' => 'string|required',
            'mode' => 'string|required',
            'niveau' => 'string|required',
            'filiere' => 'string|required',
            'modules' => 'string|nullable',
            'nbheuresparsemaine' => 'nullable|numeric',
            'daterecrutement' => 'required|date',
            'gradeentree' => 'string|required',
            'gradeactuel' => 'string|required',
            'dernierdiplome' => 'string|required',
            'specialite' => 'string|required',
            'observations' => 'nullable',
        ]);
        $gestionp = new Gestionp;
        $gestionp->region = $request->region;
        $gestionp->efp = $request->efp;
        $gestionp->annexe = $request->annexe;
        $gestionp->corps = $request->corps;
        $gestionp->nomprenom = $request->nomprenom;
        $gestionp->cin = $request->cin;
        $gestionp->genre = $request->genre;
        $gestionp->datenaissance = Carbon::parse($request->datenaissance)->format('Y-m-d');
        $gestionp->age = Carbon::parse($request->datenaissance)->diffInYears(Carbon::now());    
        $gestionp->tel = $request->tel;
        $gestionp->email = $request->email;
        $gestionp->situationfamiliale = $request->situationfamiliale;
        $gestionp->fonction = $request->fonction;
        $gestionp->statut = $request->statut;
        $gestionp->ppr = $request->ppr;
        $gestionp->mode = $request->mode;
        $gestionp->niveau = $request->niveau;
        $gestionp->filiere = $request->filiere;
        $gestionp->modules = $request->modules;
        $gestionp->nbheuresparsemaine = $request->nbheuresparsemaine;
        $gestionp->daterecrutement = $request->daterecrutement;
        $gestionp->gradeentree = $request->gradeentree;
        $gestionp->gradeactuel = $request->gradeactuel;
        $gestionp->dernierdiplome = $request->dernierdiplome;
        $gestionp->specialite = $request->specialite;
        $gestionp->observations = $request->observations;
        $gestionp->save();
        return redirect()->route('gestionp.index')->with('success', 'Pesonnel a été sauvegardé!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gestionp  $gestionp
     * @return \Illuminate\Http\Response
     */
    public function show(Gestionp $gestionp)
    {
        return view('gestionp.show',['gestionp'=>$gestionp]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gestionp  $gestionp
     * @return \Illuminate\Http\Response
     */
    public function edit(Gestionp $gestionp)
    {
        return view('gestionp.edit',['gestionp'=>$gestionp]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gestionp  $gestionp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gestionp $gestionp)
    {
        $request->validate([
            'region' => 'required',
            'efp' => 'required',
            'annexe' => 'required',
            'corps' => 'required',
            'nomprenom' => 'required',
            'cin' => 'required',
            'genre' => 'required',
            'datenaissance' => Carbon::parse($request->datenaissance)->format('Y-m-d'),
            'age' => Carbon::parse($request->datenaissance)->diffInYears(Carbon::now()),
            'tel' => 'required',
            'email' => 'required|email',
            'situationfamiliale' => 'required',
            'fonction' => 'required',
            'statut' => 'required',
            'ppr' => 'required',
            'mode' => 'required',
            'niveau' => 'required',
            'filiere' => 'required',
            'modules' => 'nullable',
            'nbheuresparsemaine' => 'nullable|numeric',
            'daterecrutement' => 'required|date',
            'gradeentree' => 'required',
            'gradeactuel' => 'required',
            'dernierdiplome' => 'required',
            'specialite' => 'required',
            'observations' => 'nullable',
        ]);
    
        // Update the gestionp instance with the validated data
        $gestionp->update([
            'region' => $request->region,
            'efp' => $request->efp,
            'annexe' => $request->annexe,
            'corps' => $request->corps,
            'nomprenom' => $request->nomprenom,
            'cin' => $request->cin,
            'genre' => $request->genre,
            'datenaissance' => $request->datenaissance,
            'age' => $request->age,
            'tel' => $request->tel,
            'email' => $request->email,
            'situationfamiliale' => $request->situationfamiliale,
            'fonction' => $request->fonction,
            'statut' => $request->statut,
            'ppr' => $request->ppr,
            'mode' => $request->mode,
            'niveau' => $request->niveau,
            'filiere' => $request->filiere,
            'modules' => $request->modules,
            'nbheuresparsemaine' => $request->nbheuresparsemaine,
            'daterecrutement' => $request->daterecrutement,
            'gradeentree' => $request->gradeentree,
            'gradeactuel' => $request->gradeactuel,
            'dernierdiplome' => $request->dernierdiplome,
            'specialite' => $request->specialite,
            'observations' => $request->observations,
        ]);
    
        // Redirect to the index page with a success message
        return redirect()->route('gestionp.index')->with('success', 'Personnel a été mis à jour!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gestionp  $gestionp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gestionp $gestionp)
    {
        $gestionp->delete();
        return redirect()->route('gestionp.index')->with('success', 'personnel a été supprimé!');
    }
    
}

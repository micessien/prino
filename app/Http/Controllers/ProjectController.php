<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Project;
use Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.create',array('user' => Auth::user()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('projects.create',array('user' => Auth::user()));

    }

    public function createstep2()
    {
        //
        return view('projects.create-step-2');

    }

    public function createstep3()
    {
        //
        return view('projects.create-step-3');

    }

    public function createstep4()
    {
        //
        return view('projects.create-step-4');

    }

    public function createstep5()
    {
        //
        return view('projects.create-step-5');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project();

        $inputs = $request->only('entite', 'categorie', 'adresse', 'boitepostal',
            'ville', 'nombremploye', 'descriptifentreprise', 'chiffredaffaire', 'prixremporte','userid');


        $project->entite = $inputs['entite'];
        $project->categorie = $inputs['categorie'];
        $project->adresse = $inputs['adresse'];
        $project->boitepostal = $inputs['boitepostal'];
        $project->ville = $inputs['ville'];
        $project->nombremploye = $inputs['nombremploye'];
        $project->descriptifentreprise = $inputs['descriptifentreprise'];
        $project->chiffredaffaire = $inputs['chiffredaffaire'];
        $project->prixremporte = $inputs['prixremporte'];
        $project->userid = $inputs['userid'];
        $project->siteweb = '';
        $project->facebook = '';
        $project->twitter = '';
        $project->save();

        return view('projects.create-step-2');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php
use Illuminate\Http\Request;
use App\Http\Requests;
namespace App\Http\Controllers;
use Auth;

use App\User;
use App\Project;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    	return view('projects/index', array('user' => Auth::user()) );
    }

    public function index2()
    {

    	return view('projects/index2', array('user' => Auth::user()) );
    }

    public function index3()
    {

    	return view('projects/index3', array('user' => Auth::user()) );
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //


		$user = Auth::user();

		$user = User::find($user->id);


        $user->projects->entite = $request->input('entite');
        $user->projects->categorie = $request->input('categorie');
        $user->projects->adresse = $request->input('adresse');
        $user->projects->boite_postale = $request->input('boite_postale');
        $user->projects->ville = $request->input('ville');
        $user->projects->nombremploye = $request->input('nombremploye');
        $user->projects->descriptifentreprise = $request->input('descriptifentreprise');
        $user->projects->chiffredaffaire = $request->input('chiffredaffaire');
        $user->projects->prixremporte = $request->input('prixremporte');
        
 
		$user->save();
		$user->projects->save();

    	return view('projects.index2', array('user' => Auth::user()) );

    }


    public function create2(Request $request)
    {
        //


		$user = Auth::user();

		$user = User::find($user->id);

        // $user->projects->entite = $request->input('entite');

        $user->projects->nomcomplet = $request->input('nomcomplet');
        $user->projects->telephone = $request->input('telephone');
        $user->projects->fonctionoccupe = $request->input('fonctionoccupe');
        $user->projects->descriptifprojet = $request->input('descriptifprojet');

        
 
		$user->save();
		$user->projects->save();

    	return view('projects.index3', array('user' => Auth::user()) );

    }



    public function create3(Request $request)
    {
        //


		$user = Auth::user();

		$user = User::find($user->id);


        $user->projects->concurrent = $request->input('concurrent');
        $user->projects->equipe = $request->input('equipe');

        
 
		$user->save();
		$user->projects->save();

    	return view('projects.index4', array('user' => Auth::user()) );

    }



    public function create4(Request $request)
    {
        //


		$user = Auth::user();

		$user = User::find($user->id);


        $user->projects->reglementation = $request->input('reglementation');
        $user->projects->stadedevelopement = $request->input('stadedevelopement');
        $user->projects->besoinfinancement = $request->input('besoinfinancement');
        $user->projects->repartitioncapitale = $request->input('repartitioncapitale');
        
 
		$user->save();
		$user->projects->save();

    	return view('projects.index5', array('user' => Auth::user()) );

    }

    public function create5()
    {
        //
        return view('projects.create-step-5', array('user' => Auth::user()) );


        $user = Auth::user();

        $user = User::find($user->id);
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

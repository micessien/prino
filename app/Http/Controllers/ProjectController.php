<?php

use Illuminate\Http\Request;
use App\Http\Requests;

namespace App\Http\Controllers;

use Auth;

use App\User;
use App\Project;
use App\Projects;
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
        // dd(Auth::user());
        $user = Auth::user();
        return view('projects/index', compact('user'));
    }

    public function index2()
    {

        return view('projects/index2', array('user' => Auth::user()));
    }

    public function index3()
    {

        return view('projects/index3', array('user' => Auth::user()));
    }

    public function index4()
    {

        return view('projects/index4', array('user' => Auth::user()));
    }

    public function index5()
    {

        return view('projects/index5', array('user' => Auth::user()));
    }

    public function index6()
    {

        return view('projects/index6', array('user' => Auth::user()));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //


        // dd(Auth::user());
        $user = Auth::user();

        $user = User::find($user->id);

        if ($user->projects != null) {
            $user->projects->entite = $request->input('entite');
            $user->projects->categorie = $request->input('categorie');
            $user->projects->adresse = $request->input('adresse');
            $user->projects->boite_postale = $request->input('boite_postale');
            $user->projects->ville = $request->input('ville');
            $user->projects->nombremploye = $request->input('nombremploye');
            $user->projects->descriptifentreprise = $request->input('descriptifentreprise');
            $user->projects->chiffredaffaire = $request->input('chiffredaffaire');
            $user->projects->prixremporte = $request->input('prixremporte');
            $user->projects->siteweb = $request->input('siteweb');
            $user->projects->facebook = $request->input('facebook');
            $user->projects->twitter = $request->input('twitter');


            $user->save();
            $user->projects->save();
        } else {
            $project =  $request->all();
            $project['user_id'] =  $user->id;
            Projects::create($project);



            // $user->save();
            // $user->projects->save();
        }



        // $user->save();
        // $user->projects->save();
        return redirect()->route('projects.index2');
        // return view('projects.index2', array('user' => Auth::user()) );

    }


    public function create2(Request $request)
    {
        //


        $user = Auth::user();

        $user = User::find($user->id);



        $this->validate($request, [

            'telephone' => 'required',
            'fonctionoccupe' => 'required',
            'descriptifprojet' => 'required',
            'innovantprojet' => 'required'

        ]);


        $user->projects->telephone = $request->input('telephone');
        $user->projects->fonctionoccupe = $request->input('fonctionoccupe');
        $user->projects->descriptifprojet = $request->input('descriptifprojet');
        $user->projects->innovantprojet = $request->input('innovantprojet');



        $user->save();
        $user->projects->save();
        return redirect()->route('projects.index3');

    }



    public function create3(Request $request)
    {
        //


        $user = Auth::user();

        $user = User::find($user->id);


        $user->projects->equipe = $request->input('equipe');



        $user->save();
        $user->projects->save();
        // die();
        return redirect()->route('projects.index4');
        // return view('projects.index6', array('user' => Auth::user()) );

    }

    
    public function create44(Request $request)
    {
        //


        $user = Auth::user();

        $user = User::find($user->id);

        $this->validate($request, [

            'reglementation' => 'required',
            'stadedevelopement' => 'required',
            'besoinfinancement' => 'required',
            'repartitioncapitale' => 'required'

        ]);

        $user->projects->reglementation = $request->input('reglementation');
        $user->projects->stadedevelopement = $request->input('stadedevelopement');
        $user->projects->besoinfinancement = $request->input('besoinfinancement');
        $user->projects->repartitioncapitale = $request->input('repartitioncapitale');



        $user->save();
        $user->projects->save();
        // die();
        return redirect()->route('projects.index6');
        // return view('projects.index6', array('user' => Auth::user()) );

    }



    public function create4(Request $request)
    {

        $user = Auth::user();

        $user = User::find($user->id);


        // dd($request->file('planfin'));
        // dd($request->file('declarationfiscale'));


        // $this->validate($request, [

        //     'planfin' => 'required',
        //     'powerpoint' => 'required',
        //     'businessplan' => 'required',
        //     'declarationfiscale' => 'required'

        // ]);

        // Plan Fin 
        if ($request->has('planfin')) {
            $file = $request->file('planfin');
            $destination_path = public_path() . '/files';
            $extention = $file->getClientOriginalExtension();
            $files = $file->getClientOriginalName();
            $fileName = $files . '_' . time() . '.' . $extention;
            $file->move($destination_path, $fileName);
            $user->projects->planfin = $destination_path . '/' . $fileName;
        }
        if ($request->has('powerpoint')) {
            $file = $request->file('powerpoint');
            $destination_path = public_path() . '/files';
            $extention = $file->getClientOriginalExtension();
            $files = $file->getClientOriginalName();
            $fileName = $files . '_' . time() . '.' . $extention;
            $file->move($destination_path, $fileName);
            $user->projects->powerpoint = $destination_path . '/' . $fileName;
        }
        if ($request->has('businessplan')) {
            $file = $request->file('businessplan');
            $destination_path = public_path() . '/files';
            $extention = $file->getClientOriginalExtension();
            $files = $file->getClientOriginalName();
            $fileName = $files . '_' . time() . '.' . $extention;
            $file->move($destination_path, $fileName);
            $user->projects->businessplan = $destination_path . '/' . $fileName;
        }
        if ($request->has('declarationfiscale')) {
            $file = $request->file('declarationfiscale');
            $destination_path = public_path() . '/files';
            $extention = $file->getClientOriginalExtension();
            $files = $file->getClientOriginalName();
            $fileName = $files . '_' . time() . '.' . $extention;
            $file->move($destination_path, $fileName);
            $user->projects->declarationfiscale = $destination_path . '/' . $fileName;
        }
        $user->save();
        $user->projects->save();



        return redirect()->route('projects.index5');

    }

    public function create5()
    {



        return view('home', array('user' => Auth::user()));
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

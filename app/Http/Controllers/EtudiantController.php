<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Etudiant;
use App\Models\EtudiantModel;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public  function index()
    {


        $etudiants = EtudiantModel::orderBy("nom", "asc")->paginate(5); //all
        return view("etudiant", compact("etudiants"));
    }
    public  function create()
    {
        $classes = Classe::all();
        return view("createEtudiant", compact("classes"));
    }
}

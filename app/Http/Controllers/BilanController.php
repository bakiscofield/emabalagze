<?php
namespace App\Http\Controllers;

use App\Models\Bilan;
use App\Models\BilanJournalier;
use App\Models\Mouvement;
use App\Models\Depot;
use App\Models\TypeEmballage;
use Illuminate\Http\Request;

class BilanController extends Controller
{
    public function generateBilan(Depot $depot, String $data_debut,String $date_fin)
    {
       $type=TypeEmballage::find(1);
       dd($type);
        $stockActueleDepot=$depot->stocks->where('id_type', $type->id_type)->first()->quantite_stock;
        return view('bilan.index', compact('bilanData'));
    }
}

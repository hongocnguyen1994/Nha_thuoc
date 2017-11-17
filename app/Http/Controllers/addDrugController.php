<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\drugs;

class addDrugController extends Controller
{
    public function submit(Request $request){
    	$drug = new drugs;
    	$drug->drug_name = $request->input('drugName');
    	$drug->drug_code = $request->input('drugCode');
    	$drug->description = $request->input('drugDescription');
    	$drug->import_price = $request->input('drugImportPrice');
    	$drug->price = $request->input('drugPrice');
    	$drug->shelf_life = $request->input('shelfLife');
    	$drug->medicine_id = $request->input('medicine');
    	$drug->quantity = $request->input('quantity');

    	$drug->save();

    	return redirect('/add/');
    }
}

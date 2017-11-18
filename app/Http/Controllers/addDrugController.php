<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addDrugController extends Controller
{
    public function submit(Request $request){
<<<<<<< HEAD
    	$this->validate($request, [
    		'drugName' => 'required',
    		'drugCode' => 'required',
    		'drugDescription' => 'required',
    		'drugImportPrice' => 'required',
    		'drugPrice' => 'required',
            'drugDate' => 'required'
    	]);
    	return 'SUCCESS';
=======
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
>>>>>>> 95181e2e6645843fb8e81848ca0d54f8b8b3c4f7
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addDrugController extends Controller
{
    public function submit(Request $request){
    	$this->validate($request, [
    		'drugName' => 'required',
    		'drugCode' => 'required',
    		'drugDescription' => 'required',
    		'drugImportPrice' => 'required',
    		'drugPrice' => 'required',
            'drugDate' => 'required'
    	]);
    	return 'SUCCESS';
    }
}

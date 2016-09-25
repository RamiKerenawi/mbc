<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Orphan;

class OrphanController extends Controller {
    
    public function show(Orphan $orphan){
    	
    	return $orphan;
    }
}

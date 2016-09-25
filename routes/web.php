<?php




/*
|--------------------------------------------------------------------------
| Orphan Routes
|--------------------------------------------------------------------------
|
| Here is where you can route to your orphan data. 
|
*/ 

Route::get('orphans/find/{id}', function ($id) {

    // we here now to find the orphan data using his $id
    $data = \App\Orphan::find($id);

    // if there is no data, 404
    if (!$data) return abort(404);



    // return view and data
    return $data;
});



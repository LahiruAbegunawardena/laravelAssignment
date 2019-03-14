<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Blazer;

class BlazerController extends Controller
{
    public function loadHome()
    {
        return view('userreg');
        # code...
    }

    public function regItm(Request $request)
    {
        $this->validate($request, [
            'item_type'=>'required',
            'model_no'=>'required',
            'color'=>'required',
            'size'=>'required',
            'price'=>'required',
        ]);
        $table = new Blazer();
        // $itemType = $request->input('item_type');

        $table->item_type = $request['item_type'];
        $table->model_no = $request['model_no'];
        $table->color = $request['color'];
        $table->size = $request['size'];
        $table->price = $request['price'];
        $table->save();
        // return 'all data saved';
        return redirect()->back()->with('message', 'Item added successfully');
            
    }

    public function viewItm(){
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index () {
        $items = Item::all();

        return response()->json($items, 200);
    }

    public function store (Request $request) {
        
        $item = Item::create([
            'name'=> $request->name,
            'description'=> $request->description,
            'weight'=> $request->weight,
            'distance'=> $request->distance,
        ]);

        return response()->json($item, 200);
    }

    public function show ($item) {
        $singleItem = Item::findOrFail($item);

        return response()->json($singleItem, 200);
    }

    public function update (Request $request, $item) {
        $singleItem = Item::find($item);

        $singleItem->update($request->all());

        return response()->json($singleItem, 200);
    }

    public function destroy ($item) {

        Item::destroy($item);

        return response()->json(['status'=>'success','message'=>'Item deleted successfully']);

        /* if (Item::destroy($singleItem)){
            return response()->json(['status'=>'success','message'=>'Board deleted successfully']);
        } */
    }
}

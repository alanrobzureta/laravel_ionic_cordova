<?php

namespace App\Http\Controllers;

use App\Cupom;
use Illuminate\Http\Request;


class CupomController extends Controller
{
    public function cupom($cupom)
    {
        $cupom = Cupom::where('cupom',$cupom)->first();
        
        $result = false;
        if($cupom){
            $result = true;
        }        
        
        return response()->json([
            'result'=>$result,
            'cupom'=>$cupom
        ]);
    }
    
    public function store(Request $request)
    {
        $cupom = Cupom::create($request->all());
        
        if($cupom){
            return response()->json($cupom);
        } else {
            return response()->json(['response'=>false]);
        }
    }
}

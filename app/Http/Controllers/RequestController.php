<?php

namespace App\Http\Controllers;

use App\Models\Req;
use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function addRequest(Request $request){
        
        $request->validate([

            'name'=> 'required|string',
            'request_item'=> 'required|string'            
        ]);

        $req = Req::create([
                'name'=> $request->name,
                'request_item'=> $request->request_item,
        ]); 

        return redirect()->back()->with('success', 'created successfully');
    }

    

      
}

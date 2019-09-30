<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tissus;
use Config\image;
use Illuminate\Support\Facades\Storage;





class TissusesController extends Controller
{
    public function addTissuses(Request $request){
    
    
        request()->validate([
            'name' => ['unique:tissuses,name']
        ]);
    $extension = $request->file('image')->getClientOriginalExtension();

    Tissus::create([
        'name' => request('name'),
        'stock' => request('stock'),
        'image' => request('name') . '.' . $extension
        
    ]);
    $file = $request->file('image');
    $fileName = request('name').'.'. $extension;
    $destinationPath = public_path('/images/Tissus');

    
    $file->move($destinationPath, $fileName);


    
    
  

    
    
    $tissuses = Tissus::all();

    return view('pages.stock')->withTissuses($tissuses);
    }

    public function showTissuses(){

      $tissuses = Tissus::all();

      return view('pages.stock')->withTissuses($tissuses);
    }
}

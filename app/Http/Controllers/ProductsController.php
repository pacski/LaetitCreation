<?php

namespace App\Http\Controllers;
use App\Product;
use App\Command;
use App\Tissus;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function addProduct (Request $request){

        include('stats/CommandsStats.php');

        request()->validate([
            'name' => 'unique:products,name'
        ]);

        $extension = $request->file('image')->getClientOriginalExtension();

        Product::create([
            'name' => request('name'),
            'image' => request('name'). '.' . $extension,
            'description' =>request('description'),
            'cost' => request('cost'),
            'price' => request('price'),
            'production_time' => request('production_time'),
            'nbmade' => 0
            ]);
        
        $file = $request->file('image');
        $fileName = request('name').'.'. $extension;
        $destinationPath = public_path('/images/Produits');
        
        $file->move($destinationPath, $fileName);


            $products = Product::all();
            $commands = Command::all();
            $tissuses = Tissus::all();

            return view('pages.accueil', compact([
            'products',
            'commands',
            'tissuses',
            'commandsMonth',
            'commandsInProgress',
            'commandsJan', 'commandsFeb','commandsMar', 'commandsMar', 'commandsApr', 'commandsMay', 'commandsJun', 'commandsJul', 'commandsAug', 'commandsSep', 'commandsOct', 'commandsNov', 'commandsDec'
        ]));
        
    }

    public function countProducts (){

        $products = DB::table('products')->where('name', 'sac de plage' )->count();

    }

}

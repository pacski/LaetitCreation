<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Command;
use App\Product;
use App\Tissus;
use Illuminate\Support\Facades\DB;

class CommandsController extends Controller
{
    public function showCommands(){

        $commands = Command::all();
        $products = Product::all();
        $tissuses = Tissus::all();

        
        $tempsProdTotal = DB::table('commands')->select('temps_prod')->sum('temps_prod');

        

        return view('pages.liste_des_commandes',compact([
            'products',
            'commands',
            'tissuses',
            'tempsProdTotal',
            'number',
            'nbCommand',
            'productsByCommands_1',
            'productsByCommands_2',
            'productsByCommands_3'
        ]));
    }

    public function statsCommands(){

        include('stats/CommandsStats.php');
        
        return view('pages.Accueil', compact([
            'products',
            'commands',
            'tissuses',
            'commandsMonth',
            'commandsInProgress',
            'commandsJan', 'commandsFeb','commandsMar', 'commandsMar', 'commandsApr', 'commandsMay', 'commandsJun', 'commandsJul', 'commandsAug', 'commandsSep', 'commandsOct', 'commandsNov', 'commandsDec'
        ]));

    }

    public function addCommand(){

    $products = Product::all();
    $tissuses = Tissus::all();
    $nbCommand = DB::table('commands')->count() + 1;

    $number = date('dmo') . $nbCommand ;


    
    

    Command::create([
        'number' => $number,
        'statut' => 1, // 1 = en cours 2 = terminé
        'created_at' => request('created_at'),
        'total' => 0,
        'name' => request('name'),
        'adresse' => request('adresse'),
        'origin' => request('origin'),
        'product_1' => request('product_1'),
        'quantity_1' => request('quantity_1'),
        'tissu_1' => request('tissu_1'),
        'product_2' => request('product_2'),
        'quantity_2' => request('quantity_2'),
        'tissu_2' => request('tissu_2'),
        'product_3' => request('product_3'),
        'quantity_3' => request('quantity_3'),
        'tissu_3' => request('tissu_3'),
        'temps_prod' => 0,
        'created_at' => time() ]);

    $quantity_1 = DB::table('commands')->select('quantity_1')->where('number', $number)->sum('quantity_1');
    $quantity_2 = DB::table('commands')->select('quantity_2')->where('number', $number)->sum('quantity_2');
    $quantity_3 = DB::table('commands')->select('quantity_3')->where('number', $number)->sum('quantity_3');

    $product_1 = DB::table('products')->select('price')->where('name', request('product_1'))->sum('price') * $quantity_1 ;
    $product_2 = DB::table('products')->select('price')->where('name', request('product_2'))->sum('price') * $quantity_2 ;
    $product_3 = DB::table('products')->select('price')->where('name', request('product_3'))->sum('price') * $quantity_3 ;
    
    $total = $product_1 + $product_2 + $product_3;
        
    // update nbmade d'un produit

    DB::table('commands')->where('number', $number)->update([
        'total' => $total
        ]);

    $nbProduct_1 = DB::table('products')->select('nbmade')->where('name', request('product_1'))->sum('nbmade');
    $nbProduct_2 = DB::table('products')->select('nbmade')->where('name', request('product_2'))->sum('nbmade');
    $nbProduct_3 = DB::table('products')->select('nbmade')->where('name', request('product_3'))->sum('nbmade');
    
    $nbProduct_1Total = $nbProduct_1 + $quantity_1;
    $nbProduct_2Total = $nbProduct_2 + $quantity_2;
    $nbProduct_3Total = $nbProduct_3 + $quantity_3;
    
    DB::table('products')->where('name', request('product_1'))->update(['nbmade' => $nbProduct_1Total]);
    DB::table('products')->where('name', request('product_2'))->update(['nbmade' => $nbProduct_2Total]);
    DB::table('products')->where('name', request('product_3'))->update(['nbmade' => $nbProduct_3Total]);
    
    // update stock tissu 

    $stockTissus_1 = DB::table('tissuses')->select('stock')->where('name', request('tissu_1'))->sum('stock');
    $stockTissus_2 = DB::table('tissuses')->select('stock')->where('name', request('tissu_2'))->sum('stock');
    $stockTissus_3 = DB::table('tissuses')->select('stock')->where('name', request('tissu_3'))->sum('stock');

    $costTissus_1 = DB::table('products')->select('cost')->where('name', request('product_1'))->sum('cost');
    $costTissus_2 = DB::table('products')->select('cost')->where('name', request('product_2'))->sum('cost');
    $costTissus_3 = DB::table('products')->select('cost')->where('name', request('product_3'))->sum('cost');
    

    $stockTissus_1Total = $stockTissus_1 - $nbProduct_1 * $quantity_1 * $costTissus_1;
    $stockTissus_2Total = $stockTissus_2 - $nbProduct_2 * $quantity_2 * $costTissus_2;
    $stockTissus_3Total = $stockTissus_3 - $nbProduct_3 * $quantity_3 * $costTissus_3;

   
    
    DB::table('tissuses')->where('name', request('tissu_1'))->update(['stock' => $stockTissus_1Total  ]);
    DB::table('tissuses')->where('name', request('tissu_2'))->update(['stock' => $stockTissus_2Total  ]);
    DB::table('tissuses')->where('name', request('tissu_3'))->update(['stock' => $stockTissus_3Total  ]);
       
    // Temps de production de la commande

    $tpsProdProduct_1 = DB::table('products')->select('production_time')->where('name', request('product_1'))->sum('production_time');
    $tpsProdProduct_2 = DB::table('products')->select('production_time')->where('name', request('product_2'))->sum('production_time');
    $tpsProdProduct_3 = DB::table('products')->select('production_time')->where('name', request('product_3'))->sum('production_time');

    $tempsProd = $tpsProdProduct_1 * $quantity_1 + $tpsProdProduct_2 * $quantity_2 + $tpsProdProduct_3 * $quantity_3;

    DB::table('commands')->where('number', $number)->update([
        'temps_prod' => $tempsProd
        ]);
    
    $tempsProdTotal = DB::table('commands')->select('temps_prod')->sum('temps_prod');

    
    $commands = Command::all();
        
       
    return view('pages.liste_des_commandes', compact(['commands', 'products', 'tissuses', 'tempsProdTotal']));
    }
    

    public function showOneCommand($number){

        $numCommand = Command::whereNumber($number)->first();
        return view('pages.command', compact('numCommand'));
    }

    
    
}

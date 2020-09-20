<?php 
namespace App\Http\Controllers;

use App\Market;
use Illuminate\Http\Request;

class MarketController extends Controller{


public function index(){
    $markets = Market::all();
    return view('markets.index',['markets' => $markets]);
}

public function show(){
//     $market=new Market();
//     $market->product_name="sd";
//     $market->save();
echo "sd";exit;
    $markets=Market::all();
    $data = [ 'id' => 2, 'product_name' => 'abc' ];
    Market::update(1);

    return view('markets.index',['markets' => $markets ]);
}

}
?>
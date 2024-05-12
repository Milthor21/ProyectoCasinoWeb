<?php

namespace App\Http\Controllers;

use App\Models\CreditTable;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        return view('welcome');
    }
    public function jugar(){

        return view('jugar');
    }
    public function creditos(){
        $creditos = CreditTable::all();
        
        return view('creditos', [
            'creditos' => $creditos
        ]);
    }
    public function creditos_store(Request $request){
        $id = auth()->user()->id;
        $user = User::find($id);
        $user->credito = $user->credito + $request->cantidad;
        $user->save();

        return back();
    }
}

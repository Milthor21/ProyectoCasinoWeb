<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersApiController extends Controller
{
    public function index(){
        $id = auth()->user()->id;
        $user = User::where('id', $id)->first();

        return response()->json(['credito' => $user->credito, 'id' => $id ,'usuario' => $user], 200);
    }
    public function guardar(string $creditos){
        $id = auth()->user()->id;
        $user = User::where('id',$id)->first();
        $user->credito = $creditos;
        $user->save();

        return response()->json(['credito' => true], 200);
    }
}

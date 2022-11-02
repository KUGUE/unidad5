<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        echo "HOLA";
    }

    public function show($id)
    {
        echo $id;
    }
   
    public function create()
    {
        return view("create_user");
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());
        return $user;
        
    }

       
}
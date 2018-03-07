<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	return 'Esto es la nueva ruta de Usuarios';
    }

    public function show($id)
    {
    	$titulo = 'Esto es otra vista';
    	$usuarios = [
    		'Danny',
    		'Patricia',
    		'Gabriella'
    	];
    	return view('users', compact('titulo', 'id', 'usuarios'));
    	//return 'Mostrando detalles del usuario: '.$id;
    }    
}

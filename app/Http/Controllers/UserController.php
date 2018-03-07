<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	return 'Esto es la nueva ruta de Usuarios para las pruebas de Laravel y GIT';
    }

    public function show($id)
    {
    	$titulo = 'Esto es otra vista';
    	$usuarios = [
    		'Danny Acosta',
    		'Patricia Acosta',
    		'Gabriella Freites'
    	];
    	return view('users', compact('titulo', 'id', 'usuarios'));
    	//return 'Mostrando detalles del usuario: '.$id;
    }    
}

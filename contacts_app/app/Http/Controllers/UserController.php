<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all(); // Utiliza el modelo User para obtener los datos
        return view('users.index', compact('users')); // Retorna la vista con los datos
    }

    public function registrar($nombre, $email, $clave, $fecha){
        $query="INSERT INTO usuarios (nombre, email, clave, fecha_creacion) VALUES (?, ?, ?, ?)";
        $stmt=$this->connection->prepare($query);
        return $stmt->execute([$nombre, $email, $clave, $fecha]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Mostrar el listado de clientes
     */
    public function index()
    {
        //tengo que leer todos los clientes y mandarlos a la vista

        $clientes = Cliente::paginate(6);

        return view(
            'cliente.index',
            //compact($clientes)
            [
                "clientes" => $clientes // le paso a la vista el array de clientes
            ]
        );
    }


    /**
     * Mostrar el formulario para crear un nuevo cliente
     */
    public function create()
    {
        // mostrar el formulario
        return view('cliente.create');
    }

    /**
     * Esta accion le llegan los datos del cliente 
     * a crear y los almacena
     */
    public function store(Request $request)
    {
        // validar los datos
        // validar los datos
        $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required|max:255',
            'telefono' => 'required',
            'email' => 'required|email|unique:clientes',
        ], [
            'nombre.required' => 'El nombre del clientes es necesario prorporcionarlo',
            'email.unique' => 'El correo electronico ya existe en el sistema'
        ]);
        // crear el cliente
        $cliente = Cliente::create($request->all());

        // redireccionar a la vista show
        return redirect()
            ->route('cliente.show', $cliente->id)
            ->with('mensaje', 'El cliente se ha creado correctamente');
    }

    /**
     * Mostrar el formulario para editar un cliente
     */

    /**
     * cargar el formulario de editar
     */
    public function edit($id)
    {

        // recupero los datos del cliente a editar
        $cliente = Cliente::find($id);

        //mostrar el formulario para editar el cliente
        return view('cliente.edit', [
            'cliente' => $cliente
        ]);
    }


    /**
     * Esta accion le llegan los datos del cliente 
     * a editar y los actualiza
     */

    /**
     * cuando en el formulario de editar
     * pulso el boton de actualizar
     */
    public function update(Request $request, Cliente $cliente)
    {
        // validar los datos
        $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required|max:255',
            'telefono' => 'required',
            'email' => 'required|email|unique:clientes',
        ], [
            'email.unique' => 'El correo electronico ya existe en el sistema'
        ]);


        // actualizar el cliente
        $cliente->update($request->all());

        // redireccionar a la vista show
        return redirect()
            ->route('cliente.show', $cliente->id)
            ->with('mensaje', 'El cliente se ha actualizado correctamente');
    }


    /**
     * Elimina un cliente
     */
    public function destroy(Cliente $cliente)
    {
        // eliminar el cliente
        $cliente->delete();

        // redireccionar a la vista index
        return redirect()
            ->route('cliente.index')
            ->with('mensaje', 'El cliente se ha eliminado correctamente');
    }

    /**
     * Muestra los datos de un cliente
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);

        return view('cliente.show', [
            "cliente" => $cliente
        ]);
    }
}

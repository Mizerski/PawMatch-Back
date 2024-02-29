<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal; // Certifique-se de importar o modelo Animal

class AnimalController extends Controller
{
    public function index()
    {
        $animais = Animal::all();
        return $animais;
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:150',
            'porte' => 'required|string|max:50',
            'raça' => 'required|string|max:50',
            'cor' => 'required|string|max:50',
        ]);

        Animal::create($request->all());

        return json_encode('Animal criado com sucesso');
    }

    public function show(Animal $animal)
    {
        $show = Animal::find($animal);
        return $show;
    }


    public function update(Request $request, Animal $animal)
    {
        $request->validate([
            'nome' => 'required|string|max:150',
            'porte' => 'required|string|max:50',
            'raça' => 'required|string|max:50',
            'cor' => 'required|string|max:50',
        ]);

        $animal->update($request->all());

        return json_encode('Animal atualizado com sucesso'. $animal);
    }

    public function destroy(Animal $animal)
    {
        $animal->delete();

        return json_encode('Animal deletado com sucesso' . $animal);
    }
}

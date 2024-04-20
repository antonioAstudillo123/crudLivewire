<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Carbon;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;

class Button extends Component
{
    #[Validate]
    public $pwc;

    #[Validate]
    public $nombre;

    #[Validate]
    public $correo;

    #[Validate]
    public $telefono;


    public function rules()
    {
        return [
            'pwc' =>  'required|numeric|min:6',
            'nombre' => 'required',
            'correo' => 'required|email',
            'telefono' => 'required|numeric',
        ];
    }


    public function messages()
    {
        return [
            'pwc.required' => 'El campo pwc debe ser obligatorio.',
            'pwc.min' => 'El campo pwc debe ser mayor a 6',
            'pwc.numeric' => 'El campo pwc debe ser númerico.',
            'correo.email' => 'Debe ingresar un correo válido',
            'correo.required' => 'El correo es obligatorio',
            'telefono.required' => 'El teléfono es obligatorio',
            'telefono.numeric' => 'El teléfono debe ser númerico',
            'nombre.required' => 'El nombre es obligatorio',

        ];
    }

    public function save()
    {
        $this->validate();

        DB::table('docentes')->insert([
            [
                'id_pwc' => $this->pwc,
                'nombres' => $this->nombre,
                'correo' => $this->correo,
                'telefono' => $this->telefono,
                'created_at' => Carbon::now(),
                'updated_at' => null
            ],

        ]);


        return redirect()->to('/button')
        ->with('status', 'Docente creado!');

    }


    public function render()
    {
        return view('livewire.button');
    }
}

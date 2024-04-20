<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Docentes extends Component
{
    use WithPagination;
    public $search = '';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function render()
    {

        if($this->search !== '')
        {
            $docentes = DB::table('docentes')
            ->where(function ($query) {
                $query->where('nombres', 'like', '%' . $this->search . '%')
                    ->orWhere('id_pwc', 'like', '%' . $this->search . '%')
                    ->orWhere('correo', 'like', '%' . $this->search . '%')
                    ->orWhere('telefono', 'like', '%' . $this->search . '%');
            })
            ->paginate(3);
        }
        else
        {
           $docentes = DB::table('docentes')->paginate(10);
        }



        return view('livewire.docentes', [
            'docentes' => $docentes,
        ]);

    }
}

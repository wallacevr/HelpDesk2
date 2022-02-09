<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\City;
use app\Model\Empresa;
use App\State;
use Livewire\WithFileUploads;
Use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EmpresasCreate extends Component
{
    public function render()
    {
        return view('livewire.empresas-create');
    }
}

<?php

namespace app\Http\Livewire;
namespace app\Models;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use app\Models\City;
use app\Models\Empresa;
use State;
use Livewire\WithFileUploads;
Use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EmpresasCreate extends Component
{
    

    
    public $states;
    public $state_id;
    public $cities=null;
    public $cnpj;
    public $razaosocial;
    public $cep;
    public $logradouro;
    public $num;
    public $complemento;
    public $bairro;

    public $city_id;
    public $email;
    public $site;
    public $telefone;
    public $celular;

    public $movimento='I';
    public $status=true;



    public $created_at;

    protected $rules = [
        'razaosocial' => 'required',
        'cnpj' => 'required|cnpj',
        'cep' => 'required|formato_cep',
        'logradouro'=>'required',
        'num' => 'required',
        'bairro' => 'required',
        'state_id'=>'required',
        'city_id' => 'required',
        'email' => '',
        'site'=>'',
        'telefone' => '',
        'celular' => '',
        'user_id'=>'required',
        'created_at'=>'required',
        'movimento'=>'required',
        'status'=>'',
        'cpfcnpj'=>'uniquekeyduple:cpfcnpj',
        'empresa_id'=>'',
    ];
    protected $messages = [
        'razaosocial.required'=>'Campo Razão Social é Obrigatório!',
        'cnpj.required'=>'Campo CNPJ é Obrigatório!',
        'cnpj.cnpj'=>'CPF/CNPJ inválido!',
        'cnpj.uniquekeyduple'=>'CNPJ já cadastrado!',
        'cep.required' => 'O Campo CEP é obrigatório!',
        'cep.formato_cep' => 'O formato do CEP é inválido!',
        'logradouro.required' => 'O Campo Logradouro é obrigatório!',
        'num.required' => 'O Campo Nº é obrigatório!',
        'bairro.required' => 'O Campo Bairro é obrigatório!',
        'state_id.required' => 'Selecione uma UF!',
        'city_id.required' => 'Selecione um Município!',

        'site.url'=>'',
        'user_id.required'=>'Login inválido',
        'created_at.required'=>'Data e hora inválida!',
        'movimento.required'=>'Operação inválida!',

    ];



    public function mount(State $states){
        
        $this->states = $states;
        $this->user_id = Auth::user()->id;
    }
    public function render()
    {
        return view('livewire.empresas-create');
    }

    public function filtracidades(){
      if($this->state_id!=null){
        $this->cities = $this->states->find($this->state_id)->city;
      }
    }
    public function store(){
        $this->created_at = new Carbon();
        $this->user_id = Auth::user()->id;

        $data = $this->validate();
        //dd($data);
        try{

             // dd($data);

              Empresa::create($data);
              
            $this->alert('success','Cadastro realizado com sucesso!');
            //$this->reset();
            return redirect('clientes');
        } catch (\Exception $e){
            dd($e);
            $this->alert('error','Erro durante cadastro!');
        }
    }

}

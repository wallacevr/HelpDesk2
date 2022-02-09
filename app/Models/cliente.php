<?php

namespace App;

use App\Models\processo;
use App\Models\vwprocessosclientes;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;
use Hash;
Use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class cliente extends Model
{
    //

    use HasFactory,Notifiable;
    protected $connection = 'mysql';
    protected $table = 'cliente';
    protected $fillable = ['cpfcnpj','nome','cep','municipio','uf','logradouro','num','complemento','bairro','email','site','telefone','celular','contratosocial','procuracao','tipo_id','created_at','user_id','updated_at','movimento','ativo','substcontrato','substprocuracao','empresa_id'];

    public function state()
    {
        return $this->hasOne(State::class, 'id', 'uf');
    }
    public function city()
    {
        return $this->hasOne(City::class, 'id', 'municipio');
    }
    public function tipo()
    {
        return $this->hasOne(tipo::class, 'id', 'tipo_id');
    }
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function clientelog()
    {
        return $this->hasMany(clientelog::class, 'id', 'id');
    }

    public function processoscliente()
    {
        return $this->hasMany(vwprocessosclientes::class, 'cliente_id', 'id');
    }

<<<<<<< HEAD

=======
    
>>>>>>> f1f7ad3cb9286e95d7e2e902f269c6919ce28a40
    public static function cadastrar(Request $request,String $proc, String $contrato){
       DB::enableQueryLog();
        $sql =  self::insert([
            "nome" =>$request->input('nome'),
            "cpfcnpj" =>$request->input('cpfcnpj'),
            "tipo_id" =>$request->input('tipo_id'),
            "cep" =>$request->input('cep'),
            "municipio" =>$request->input('municipio'),
            "uf" =>$request->input('uf'),
            "logradouro" =>$request->input('logradouro'),
            "num" =>$request->input('num'),
            "complemento" =>$request->input('complemento'),
            "bairro" =>$request->input('bairro'),
            "email" =>$request->input('email'),
            "site" =>$request->input('site'),
            "telefone" =>$request->input('telefone'),
            "celular" =>$request->input('celular'),
            "procuracao" =>$proc,
            "contratosocial" =>$contrato,
            "created_at" =>new Carbon(),
            "user_id" => Auth::user()->id,
            "movimento" =>'I'
        ]);
        //dd($sql->toSql(),$request->all());
        //dd($request->all());
    }

}

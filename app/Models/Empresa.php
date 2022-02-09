<?php

namespace app;


use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;
use Hash;
Use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class Empresa extends Model
{
    use HasFactory,Notifiable;
    protected $connection = 'mysql';
    protected $table = 'empresas';
    protected $fillable = ['cnpj','razaosocial','cep','city_id','state_id','logradouro','num','complemento','bairro','email','site','telefone','celular','ie','im','responsavel','contrato','created_at','user_id','updated_at','movimento','status','empresa_id'];

    public function state()
    {
        return $this->hasOne(State::class, 'id', 'state_id');
    }
    public function city()
    {
        return $this->hasOne(City::class, 'id', 'city_id');
    }
    
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    

}

<div>
    <br><br>
    <h1 class="text-center">Cadastro de Clientes</h1>
    <br>
@if (!$errors->isEmpty())
    <div class="alert alert-danger mx-5 text-center">
        @foreach ($errors->all() as $error)

            {{ $error }}<br/>
       
        @endforeach
    </div>
@endif
<form wire:submit.prevent="store"   enctype="multipart/form-data" name="clienteform" id="clienteform" data-states-url="{{ route('load_cidades') }}">
        @csrf
    <div class="mx-5">
        <div class="row">
          <div class="input-group mb-3 col-sm" >
            <span class="input-group-text" id="basic-addon1">Nome/Razão Social:</span>
            <input type="text" wire:model.lazy="razaosocial" name="razaosocial" class="form-control" placeholder="Nome" aria-label="Username" aria-describedby="basic-addon1" >
          </div>
          <div class="input-group mb-3 col-sm">
            <span class="input-group-text" id="basic-addon1">CPF/CNPJ:</span>
            <input type="text" wire:model.lazy="cpfcnpj" id="cnpj" name="cnpj" class="form-control" placeholder="CNPJ" aria-label="Username" aria-describedby="basic-addon1" ">
          </div>
          
        </div>
        <div class="row">

                  <div class="input-group mb-3 col-sm" >
                    <span class="input-group-text" >CEP:</span>
                    <input wire:model.lazy="cep" type="text" class="form-control" id="cep" name="cep" placeholder="CEP" aria-label="Username" aria-describedby="basic-addon1" value="{{ old('cep') }}">
                  </div>
                  <div class="input-group mb-3 col-sm" >
                    <span class="input-group-text" id="basic-addon1">logradouro:</span>
                    <input wire:model.lazy="logradouro" type="text" class="form-control" name="logradouro" placeholder="Logradouro" aria-label="Username" aria-describedby="basic-addon1" value="{{ old('logradouro') }}">
                  </div>
                  <div class="input-group mb-3 col-sm" >
                    <span class="input-group-text" id="basic-addon1">Nº:</span>
                    <input wire:model.lazy="num" type="text" class="form-control" name="num" placeholder="Nº" aria-label="Username" aria-describedby="basic-addon1" value="{{ old('num') }}">
                  </div>
                  <div class="input-group mb-3 col-sm" >
                    <span class="input-group-text" id="basic-addon1">Complemento:</span>
                    <input wire:model.lazy="complemento" type="text" class="form-control" name="complemento" placeholder="Complemento" aria-label="Username" aria-describedby="basic-addon1" value="{{ old('complemento') }}">
                  </div>

        </div>
        <div class="row">

            <div class="input-group mb-3 col-sm" >
              <span class="input-group-text" id="basic-addon1">Bairro:</span>
              <input wire:model.lazy="bairro" type="text" class="form-control" placeholder="Bairro" name="bairro" aria-label="Username" aria-describedby="basic-addon1" value="{{ old('bairro') }}">
            </div>

            <div class="input-group mb-3 col-sm" >
                <label class="input-group-text" for="inputGroupSelect01">UF:</label>
                <select   wire:model.lazy="state_id" wire:change="filtracidades" class="form-select"  name="state_id" id="state_id">

                    <option value="">Selecione um Estado</option>
                    @foreach ($states->all('id','name') as $state)
                        <option value="{{$state->id}}">{{$state->name}}</option>
                        @endforeach
                 </select>
            </div>
            @if ($cities)


                <div class="input-group mb-3 col-sm" >
                    <label class="input-group-text" for="inputGroupSelect01">Cidade:</label>
                    <select wire:model.lazy="city_id" class="form-select"  id="city_id" name="city_id">
                        <option value="">Selecione um Município</option>
                        @foreach ($cities->all('id',"name") as $city)
                        <option value="{{ $city->id }}">{{ $city->name}}</option>
                      @endforeach


                    </select>
                </div>
            @endif
  </div>
        <div class="row">
          <div class="input-group mb-3 col-sm">
            <span class="input-group-text" id="basic-addon1">@Email:</span>
            <input wire:model.lazy="email" type="text" class="form-control" name="email" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" value="{{ old('email') }}">
          </div>
          <div class="input-group mb-3 col-sm">
            <span class="input-group-text" id="basic-addon3">Site:</span>
            <input wire:model.lazy="site" type="url" class="form-control" id="basic-url" name="site" aria-describedby="basic-addon3" value="{{ old('site') }}">
          </div>
          <div class="input-group mb-3 col-sm">
            <span class="input-group-text" id="basic-addon1">Tel:</span>
            <input wire:model.lazy="telefone" type="tel" class="form-control" placeholder="Telefone" name="telefone" id="telefone" aria-label="Username" aria-describedby="basic-addon1" value="{{ old('telefone') }}">
          </div>
          <div class="input-group mb-3 col-sm">
            <span class="input-group-text" id="basic-addon1">Cel:</span>
            <input wire:model.lazy="celular" type="tel" class="form-control" placeholder="Celular" name="celular" id="celular" aria-label="Username" aria-describedby="basic-addon1" value="{{ old('celular') }}">
          </div>
        </div>

        <div class="row">

        <div class="row text-center">
            <div class="col-sm">

                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full no-underline"><i class="fas fa-save"></i> Salvar</button>
                &nbsp;
                <button type="reset" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-full no-underline"><i class="fas fa-eraser"></i> Limpar</button>
                &nbsp;
                <a href="{{ route('listar_empresas')}}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full no-underline"><i class="fas fa-arrow-circle-left"></i> Cancelar</a>
            </div>
        </div>
    </div>
    </form>
</div>


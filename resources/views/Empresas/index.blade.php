
@extends('layouts.base')
@section('content')
<div>
    <div class="h-8 items-center my-8 ">
        <h2 class="text-center"><b> EMPRESAS</b></h2>
    </div>
</div>
<div class="text-right">
    <a href="#" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full no-underline"><i class="fas fa-plus-circle"></i> Novo Cliente
    </a>
</div>
@livewire('empresasindex')

@endsection

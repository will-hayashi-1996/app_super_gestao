<h3>Fornecedor</h3>


@php

/*
  if(){

  }elseif(){

  }else{

  }*/

@endphp

@isset($fornecedores)



    @forelse ($fornecedores as  $indice => $fornecedor)
    
          Iteração Atual: {{ $loop ->iteration}}
          <br>
          Fornecedor: {{$fornecedor['nome']}}
          <br>
          Status: {{$fornecedor['status']}}
          <br>
          CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi definido' }}
          <br>
          Telefone: ({{$fornecedor['ddd'] ?? ''}}) {{$fornecedor['telefone'] ?? ''}}
          <hr>
          <br>
          @if($loop ->last)

              última iteração do Loop

              <br>
              Total de registros {{ $loop ->count}}

          @endif
          <hr>
          @empty
            Não existem fornecedores cadastrados !!!!

    @endforelse




@endisset

<br>





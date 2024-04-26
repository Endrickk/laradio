@extends('layout.base')

@section('titulo', 'Cadastro de usuairo')

@section('conteudo')
    <form action="{{ route('salvar') }}" method="post">
        @csrf
        <div class="field">
            <label>Nome:</label>
            <input type="text" name="nome">

            @if($errors->has('nome'))
                @foreach($errors->get('nome') as $erro)
                    <string class="erro">{{$erro}}</string>
                @endforeach
            @endif

        </div>
        <div class="field">
            <label>Email:</label>
            <input type="email" name="email">
            @if($errors->has('email'))
                @foreach($errors->get('email') as $erro)
                    <string class="erro">{{$erro}}</string>
                @endforeach
            @endif
        </div>
        <div class="field">
            <label>Senha:</label>
            <input type="password" name="senha">

            @if($errors->has('senha'))
                @foreach($errors->get('senha') as $erro)
                    <string class="erro">{{$erro}}</string>
                @endforeach
            @endif
        </div>

        <button type="submit">Salvar</button>
    </form>

@endsection

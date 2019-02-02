@extends('layout.app')

@section('titulo', 'Minha página - Filho')

@section('barralateral')
    <p>Essa parte é do FILHO.</p>
    @parent
@endsection

@section('conteudo')
    <p>Este é o conteúdo do filho.</p>
@endsection
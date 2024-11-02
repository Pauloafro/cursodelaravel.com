@extends('includes.main')
@section('title','Produtos')
@section('content')
@if($pesquisar != null)
<h3>O Usuario pesquisou por: {{$pesquisar}}</h3>
@else
<h1>Pagina de produtos para vender</h1>
@endif

    
@endsection
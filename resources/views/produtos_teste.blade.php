@extends('includes.main')
@section('title','Produtos')
@section('content')
@if($id!=null)
<h1>Produto nº {{$id}}</h1>
@endif
@endsection
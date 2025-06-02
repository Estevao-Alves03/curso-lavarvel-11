@extends('admin.layouts.app')

@section('title', 'Criando Novo Usuario')

@section('content')
<h1>Novo Usuario</h1>



<form action="{{ route('users.store') }}" method="POST">
      @include('admin.users.partials.form')
</form>
@endsection
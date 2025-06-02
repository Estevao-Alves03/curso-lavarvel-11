@extends('admin.layouts.app')

@section('title', 'Editar o Usuario')

@section('content')
<h1>Editar o Usuario {{$user->name}}</h1>

<x-alert/>

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @method('put')
    @include('admin.users.partials.form')
</form>
@endsection
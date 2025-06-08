@extends('admin.layouts.app')

@section('title', 'Detalhes do usuario')

@section('content')
<h1>Detalhes do usuario: </h1>

<x-alert/>

<ul>
    <li><b>Name:</b> {{$user->name}}</li>
    <li><b>Email:</b> {{$user->email}}</li>
</ul>

@can('is-admin')
<form action="{{ route('users.destroy', $user->id) }}" method="post">
    @csrf
    @method('delete')
    <button type="submit">Deletar</button>
</form>
@endcan

@endsection
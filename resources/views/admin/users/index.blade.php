@extends('admin.layouts.app')

@section('title', 'Listagem dos Usuarios')

@section('content')
<h1>Usuarios</h1>

<a href="{{ route('users.create') }}">Novo</a>

<x-alert/>

<table>
    <thead>
        <tr>
            <td>Nome</td>
            <td>Email</td>
            <td>Acçoes</td>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href="{{ route('users.edit', $user->id)}}"> editar</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="100">Nenhum usuario encontrado</td>
            </tr>
        @endforelse
    </tbody>
</table>
{{$users -> links()}}
@endsection
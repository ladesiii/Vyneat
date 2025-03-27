@extends('layouts.centrepolitecnics')

@section('title', 'Cicles' )
 
@section('content')

<h2>Lista de Ciclos</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Sigles</th>
      <th scope="col">Nom</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($cicles as $cicle)
    <tr>
      <th scope="row">{{ $cicle->getId() }}</th>
      <td>{{ $cicle->getSigles() }}</td>
      <td>{{ $cicle->getNom() }}</td>
    </tr>
  </tbody>
</table>

@endsection

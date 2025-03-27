@extends('layouts.centrepolitecnics')

@section('title', 'Cursos' )
 
@section('content')

<h2>Cursos</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Sigles</th>
      <th scope="col">Nom</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($materias as $curs)
    <tr>
      <th scope="row">{{ $curs->getId() }}</th>
      <td>{{ $curs->getSigles() }}</td>
      <td>{{ $curs->getNom() }}</td>
      <td>{{ $curs->getSiglesCicle() }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
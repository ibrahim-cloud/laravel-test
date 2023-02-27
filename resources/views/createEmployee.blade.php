
@extends('layouts.master')
@section('contenu')

<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h2 class="border-bottom pb-2 mb-0">Ajouter d'un nouvel Employee</h2>
    @if(session()->has("success"))
  <div class="alert alert-success">  {{session()->get('success')}}</div>
    @endif
    <ul>
        @foreach($errors->all() as $error)
        <li class="alert alert-danger">{{$error}}</li>
    </ul>
    @endforeach
    <form class="p-4" method="post" action="{{route('employee.ajouter')}}">
        @csrf
  <div class="mb-3">
  <label  class="form-label">Nom</label>
    <input type="text" name="nom" class="form-control" >
  </div>
  <div class="mb-3">
  <label  class="form-label">prenom</label>
    <input type="text" name="prenom" class="form-control" >
  </div>
  <div>
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label  class="form-label">phone</label>
    <input type="number" name="phone" class="form-control" >
  </div>
  <button type="submit" class="btn btn-primary">Ajouter</button>
  <a href="{{route('employee')}}" class="btn btn-danger">Annuler</a>

</form>
  </div>
    @endsection
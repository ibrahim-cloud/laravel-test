
@extends('layouts.master')
@section('contenu')

<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h2 class="border-bottom pb-2 mb-0">List Employee</h2>
    <div class="d-flex justify-content-end m-3">
    <a href="{{route('employee.create')}}" class="btn btn-primary">Ajouter un nouvel employee</a>

    </div>
    @if(session()->has("successDelete"))
  <div class="alert alert-success">  {{session()->get('successDelete')}}</div>
    @endif
    <table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">email</th>
      <th scope="col">telephone</th>
      <th scope="col">action</th>


    </tr>
  </thead>
  <tbody>
    @foreach($data as $employee)
    <tr>
      <th scope="row">{{$employee->id}}</th>
      <td>{{$employee->nom}}</td>
      <td>{{$employee->prenom}}</td>
      <td>{{$employee->email}}</td>
      <td>{{$employee->phone}}</td>
      <td>
        <a href="{{route('employee.edit',['employee'=>$employee->id])}}" class="btn btn-info">modifier</a>
        <a href="#" class="btn btn-danger" onclick="if(confirm('voulez-vous vraiment supprimer cet employee ?')){document.getElementById('form-{{$employee->id}}').submit()}">supprimer</a>
<form  id="form-{{$employee->id}}"
 action="{{route('employee.supprimer',
    ['employee'=>$employee->id])}}"  methode="post">
@csrf
{{method_field('DELETE')}}
<input type="hidden" name="_method" value="delete">
</form>

      </td>


    </tr>
    @endforeach
  </tbody>
</table>
  </div>
    @endsection
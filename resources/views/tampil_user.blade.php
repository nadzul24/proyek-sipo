@extends('layouts.lay_admin')
@section('title', 'user') 
@section('content')

<div class="container">

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Previlages</th>
      <th scope="col">Dibuat</th>
      
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($bio  as $b)
    <tr>
      <th scope="row">{{$b->id}}</th>
      <td>{{$b->name}}</td>
      <td>{{$b->email}}</td>
      <td>{{$b->roles}}</td>
      <td>{{$b->created_at}}</td>
        
      <td>
      <a class="btn btn-danger" href="/deleteUser/{{$b->id}} " >Delete</a></td>

      
    </tr>
  @endforeach
    
  </tbody>
</table>
</div>
@endsection
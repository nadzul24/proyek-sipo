@extends('layouts.lay_admin')
@section('title', 'bio') 
@section('content')

<div class="container">

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">tinggi badan</th>
      <th scope="col">berat badan</th>
      <th scope="col">Telepon</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Agama</th>
      <th scope="col">Hobi</th>
      <th scope="col">Pekerjaan</th>
      <th scope="col">Kewarganegaraan</th>
      <th scope="col">Moto</th>
      
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($bio  as $b)
    <tr>
      <th scope="row">{{$b->id}}</th>
      <td>{{$b->tinggi_badan}}</td>
      <td>{{$b->berat_badan}}</td>
      <td>{{$b->no_telp}}</td>
      <td>{{$b->jenis_kelamin}}</td>
      <td>{{$b->agama}}</td>
      <td>{{$b->hobi}}</td>
      <td>{{$b->pekerjaan}}</td>
      <td>{{$b->kewarganegaraan}}</td>
      <td>{{$b->moto}}</td>
        
      <td><a class="btn btn-primary" href="/editBio/{{$b->id}}" >Update</a> |
      <a class="btn btn-danger" href="/deleteBio/{{$b->id}} " >Delete</a></td>

      
    </tr>
  @endforeach
    
  </tbody>
</table>
</div>
@endsection
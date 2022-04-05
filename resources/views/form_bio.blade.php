@extends('layouts.lay_admin')
@section('title','Form Pengisian')
@section('content')
<div class="py-4 px-3 px-md-4">
            <div class="card mb-3 mb-md-4">

                <div class="card-body">
                    <!-- Breadcrumb -->
                    <nav class="d-none d-md-block" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Profile</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Update Settings</li>
                        </ol>
                    </nav>
                    <!-- End Breadcrumb -->

                    <div class="mb-3 mb-md-4 d-flex justify-content-between">
                        <div class="h3 mb-0">Settings Biodata</div>
                    </div>


                    <!-- Form -->
                    <div>
                    <form  action="/addBio" method="POST" enctype="multipart/form-data">
                    
                      
                    @csrf 
                    
                    <div class="form-row">
                    @can('user-display')
                    <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                    @endcan
                    @can('manage-articles')
                                <div class="form-group col-12 col-md-6">
                                    <label for="tinggi_badan">User</label>
                                   
                                    <select class="form-control" aria-label="Default select example" name="id_user">
                                    <option>Select item</option>
                                 @foreach ($bio as $b )
                                <option value="{{ $b->id }}"> 
                                    {{ $b->name }} 
                                  </option>
                                 @endforeach
                                </select>
                                </div>
                                @endcan
                               
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12 col-md-6">
                                    <label for="tinggi_badan">Tinggi badan</label>
                                    <input type="text" class="form-control" value="" name="tinggi_badan" placeholder="Tinggi Badan">
                                   
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="berat_badan">Berat Badan</label>
                                    <input type="text" class="form-control" value="" name="berat_badan" placeholder="Berat Badan">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="font-weight-semi-bold h5 mb-3">BIODATA</div>
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="old_password">Jenis Kelamin</label>
                                <select class="form-control" aria-label="Default select example" name="jenis_kelamin">
                                    <option selected>Pilih Jenis Kelamin</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                                  
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="password">Agama</label>
                                <select class="form-control" aria-label="Default select example" name="agama">
                                    <option selected>Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                                  
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="password_confirm">Hobi</label>
                                    <input type="text" class="form-control" value="" name="hobi" placeholder="Hobi">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12 col-md-4">
                                    <label >Pekerjaan</label>
                                    <input type="text" class="form-control" value="" name="pekerjaan" placeholder="Pekerjaan">
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label >Prestasi</label>
                                    <input type="text" class="form-control" value="" name="prestasi" placeholder="Prestasi">
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label>Kewarganegaraan</label>
                                    <input type="text" class="form-control" value="" name="kewarganegaraan" placeholder="Kewarganegaraan">
                                </div>
                           
                            <div class="form-group col-12 col-md-4">
                                    <label>Telepon</label>
                                    <input type="text" class="form-control" value="" name="no_telp" placeholder="Telepon">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12 col-md-12">
                                    <label>Moto</label>
                                    <input type="text" class="form-control" value="" id="old_password" name="moto" placeholder="Moto">
                                </div>
    
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Save</button>
                        </form>
                    </div>
                    <!-- End Form -->
                </div>
            </div>
@endsection
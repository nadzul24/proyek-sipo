@extends('layouts.lay_admin')
@section('title','Form User')
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
                        <div class="h3 mb-0">Add user</div>
                    </div>


                    <!-- Form -->
                    <div>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-12 col-md-6">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control" value="" id="name" name="name" placeholder="Name">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" value="" id="email" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-row">
                                
                                <div class="form-group col-12 col-md-6">
                                    <label for="password_confirm">Password</label>
                                    <input type="text" class="form-control" value="" id="password_confirm" name="password_confirm" placeholder="Password">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="old_password">Previlages</label>
                                <select class="form-control" aria-label="Default select example">
                                    <option selected>Pilih Previlages</option>
                                    <option value="1">Admin</option>
                                    <option value="2">User</option>
                                </select>
                                  
                                </div>
                             
                                
                            </div>
                          
                            <div class="form-row">
                                <div class="form-group col-12 col-md-12">
                                  
                                </div>
    
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Save</button>
                        </form>
                    </div>
                    <!-- End Form -->
                </div>
            </div>
@endsection
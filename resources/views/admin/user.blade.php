@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Users</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Users</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
     
    <div class="container-fluid">
        <div class="row mb-3">
            <button class="btn btn-primary " wire:click.prevent="add" >Add Users</button>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">List of Users</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="col-lg-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                                <input wire:model="search" type="text" class="form-control" placeholder="Search Room">
                              </div>
                        </div>
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th width="5">#</th>
                          <th>NAME</th>
                          <th>USERNAME</th>
                          <th>ACTIONS</th>
                        </tr>
                        </thead>
                        <tbody>
                        
                        <tr>
                            <td>1</td>
                            <td class="uppercase">asd</td>
                            <td>asd</td>
                            <td>asd</td>
                            
                           
                          </tr>
                      
                        </tbody>

                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
            </div>
        </div>
    </div>

  </section>
@endsection
@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Room Catergory</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Room Category</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
   
    <div class="container-fluid">
        <section class="content">
            <div class="container-fluid">
                <div class="row mb-3">
                    <button class="btn btn-primary " wire:click.prevent="add" >Add Room Category</button>
                </div>
                <div class="row">
                    
                    <div class="col-lg-8">
                      <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">List of Room Category</h3>
                          </div>
                          <div class="card-body">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                                <input wire:model="search" type="text" class="form-control" placeholder="Search Room Category">
                              </div>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th width="5">#</th>
                                  <th>NAME</th>
                                  <th>PRICE</th>
                                  <th>ACTION</th>
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
                      </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-primary card-outline">
                            <div class="card-body">
                             <div class="main">
                                 <div class="flex space-x-2">
                                     <h5>Name:</h5>
                                     <h5>Single Room</h5>
                                 </div>
                                 <div class="flex space-x-2">
                                     <h5>Price:</h5>
                                     <h5>&#8369; 500.00</h5>
                                 </div>
                                 <div class="mt-3">
                                     <div class="bg-blue-400 h-40 w-full">s</div>
                                 </div>
                             </div>
                             
                            </div>
                            <div class="card-footer">
                                <button wire:click.prevent="save" type="submit" class="btn btn-warning">Edit</button>
                                <button wire:click.prevent="save" type="submit" class="btn btn-danger">Delete</button>
                              </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                        </div>
                    </div>
                </div>
            </div>
          </section>
    </div>
    

  </section>
@endsection
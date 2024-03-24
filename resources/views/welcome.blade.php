@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Dashboard</h1>
@stop
@section('content')
<div class="card card-warning">
  <div class="card-header">
    <h3 class="card-title">Level Form</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <form action="" method="post">
      @csrf
      <div class="row">
        <div class="col-sm-6">
          <!-- text input -->
          <div class="form-group">
            <label>Level Kode</label>
            <input type="text" class="form-control" name="level_id" placeholder="Level id">
          </div>
          <div class="form-group">
            <label>Level Nama</label>
            <input type="text" class="form-control" name="level_name" placeholder="Level name">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
  <!-- /.card-body -->
</div>

<div class="card card-warning">
  <div class="card-header">
    <h3 class="card-title">User Form</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <form action="" method="post">
      @csrf
      <div class="row">
        <div class="col-sm-6">
          <!-- text input -->
          <div class="form-group">
            <label>User ID</label>
            <input type="text" class="form-control" name="user_id" placeholder="User id">
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username" placeholder="Username">
          </div>
          <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
  <!-- /.card-body -->
</div>
@stop

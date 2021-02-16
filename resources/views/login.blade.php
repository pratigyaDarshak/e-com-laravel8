@extends('Layout.master')
@section('content')
<div class="container">

    <div class="panel panel-default">
      <div class="panel-heading" style="padding: 18px 13px;">
        {{-- <a href="#" class="btn btn-primary pull-right" >Registrater Here</a> --}}<h3 class="center">Login</h3>

      </div>


   <div class="panel-body">

    <form class="form-horizontal" action="" method="POST">@csrf
      <div class="form-group">
        <label class="control-label col-sm-1" for="email">Email:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="emp_email">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-1" for="pwd">Password:</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="emp_password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-1 col-sm-10">
          <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-1 col-sm-10">
          <button type="submit" class="btn btn-default" name="submit">Submit</button>
        </div>
      </div>
    </form>
  </div>

      </div>

    </div>
  </div>
@stop


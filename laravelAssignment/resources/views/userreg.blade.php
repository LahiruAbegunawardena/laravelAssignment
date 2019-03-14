@extends('layout.format')

@section('body')

  <h1>Item Registration</h1>
  @if(count($errors)>0)
    <div class="alert alert-danger">
    <!-- @foreach($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach -->
    Validation failed <br> Check data..
    </div>
  @endif

  @if(session()->has('message'))
    <div class="alert alert-success">
      {{session()->get('message')}}
    </div>
  @endif
  <form action="/storeItemDet" method="post">

    {{csrf_field()}}
    <div class="form-group">
      <label for="">Item Type</label>
      <select class="form-control" name="item_type">
          <option value="">Select type..</option>
          <option>Blazers</option>
          <option>Shirts</option>
          <option>T-Shirts</option>
          <option>Trousers</option>
      </select>
    </div>
    <div class="form-group">
      <label for="">Model No</label>
      <input type="text" name="model_no" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Color</label>
      <input type="text" name="color" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Size</label>
      <input type="text" name="size" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Prize</label>
      <input type="text" name="price" class="form-control">
    </div>
  
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
          <input type="submit" class="btn btn-info btn-toggle" value="Submit">
      </div>
      <div class="col-md-4"></div>
    </div>
  </form>
@endsection
@extends('layouts.layout')
@section('content')
  <main>
    <form action="{{route('admin.store')}}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="container-fluid">
        <section class="section card mb-5">
          <div class="card-body">
            <h1 class="text-center my-5 h1">Inputs</h1>
            <h5 class="pb-5">Input fields</h5>
            <div class="row">
              <div class="col-md-4 mb-4">
                <div class="md-form">
                    <label  class="">Product</label>
                    <span style="color: red">{{$errors->first('name')}}</span>
                  <input type="text" name="name"  class="form-control" placeholder="Product name">
                </div>
<br>
                <div class="md-form form-sm">
                    <label class="active" for="form2" class="">Years of Start</label>
                    <span style="color: red">{{$errors->first('years_of_start')}}</span>
                    <input class="form-control" type="date" name="years_of_start" placeholder="2012-12-23">
                </div>
<br>
              <div class="md-form form-sm">
                <label class="active" for="form2" class="">Years of Finish</label>
                <span style="color: red">{{$errors->first('years_of_finish')}}</span>
                <input class="form-control" type="date" name="years_of_finish" placeholder="2020-12-23">
            </div>
<br>
                <div class="md-form">
                    <span style="color: red">{{$errors->first('price')}}</span>
                  <input placeholder="Price" type="text"  name="price" class="form-control">
                  <label for="form3" class="active">All Price</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="md-form">
                    <span style="color: red">{{$errors->first('number_of_workers')}}</span>
                  <input placeholder="Quantity" name="number_of_workers" type="number" class="form-control">
                  <label class="active" >Number 0f Workers</label>
                </div>
              <br>
              </div>
            </div>
            <h5 class="pb-5">File input</h5>
            <div class="row">
                    <div class="form-group">
                        <span>Choose file</span>
                        <span style="color: red">{{$errors->first('image')}}</span>
                        <input class="form-control" type="file" name="image">
                    </div>
            </div>
          </div>
          <input type="submit" value="Send" class="btn btn-success" style="display: block" width="100%">
        </section>
      </div>
    </form>
  </main>
@endsection

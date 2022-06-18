@extends('layouts.layout')
@section('content')
  <main>
    <form action="{{route('admin.update', ['id' => $construction->id])}}" method="POST" enctype="multipart/form-data">
      @csrf
        @method('PUT')
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
                  <input type="text" name="name"  class="form-control" value="{{$construction->name}}">
                </div>
<br>
                <div class="md-form form-sm">
                    <label class="active" for="form2" class="">Years of Start</label>
                    <span style="color: red">{{$errors->first('years_of_start')}}</span>
                    <input class="form-control" type="date" name="years_of_start" value="{{$construction->years_of_start}}">
                </div>
<br>
              <div class="md-form form-sm">
                <label class="active" for="form2" class="">Years of Finish</label>
                <span style="color: red">{{$errors->first('years_of_finish')}}</span>
                <input class="form-control" type="date" name="years_of_finish" value="{{$construction->years_of_finish}}">
            </div>
<br>
                <div class="md-form">
                    <span style="color: red">{{$errors->first('price')}}</span>
                  <input value="{{$construction->price}}" type="text"  name="price" class="form-control">
                  <label for="form3" class="active">All Price</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="md-form">
                    <span style="color: red">{{$errors->first('number_of_workers')}}</span>
                  <input value="{{$construction->number_of_workers}}" name="number_of_workers" type="number" class="form-control">
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
                        <input class="form-control" type="file" name="image" >
                    </div>
                    @if ($construction->image)
                        <br> <img src="{{asset('storage/images/' . $construction->image)}}" width="100" alt="Bu yerda rasm bor">
                    @endif
            </div>
          </div>
          <div style="display: flex">
            <button type="submit" class="btn btn-success">Save</button>
            <a href="{{route('admin.show', ['id' => $construction->id])}}" class="btn btn-light" width="25%">Back</a>
            <a href="{{route('admin.index')}}" class="btn btn-primary">&#926 Product list</a>
          </div>
        </section>
      </div>
    </form>
  </main>
@endsection

@extends('layouts.layout')

@section('content')
<main>
    <div class="card-body pt-0 mt-0">
        <!--Name-->
        <div class="text-center">
            <div class="product-images">
                <div class="product-main-img">
                    <img src="{{asset('storage/images/' . $construction->image)}}" width="300" alt="Rasm bor">
                </div>

            </div>
          <h3 class="mb-3 font-weight-bold"><strong>{{$construction->name}}</strong></h3>
          <h3 class="font-weight-bold blue-text mb-4">${{$construction->price}}</h3>
        </div>

        <ul class="mb-3 font-weight-bold">
            <li>
                <strong>Years of Start:</strong>{{$construction->years_of_start}}
            </li>
            <li>
                <strong>Years of Finish:</strong>{{$construction->years_of_finish}}
            </li>
            <li>
                <strong>Number of Workers:</strong>{{$construction->number_of_workers}}
            </li>
        </ul>
        <br>
        <div style="display: flex">
            <a href="{{route('admin.index')}}" class="btn btn-primary">&#926 construction list</a>
            <a href="{{route('admin.edit', ['id' => $construction->id])}}" class="teal-text btn btn-success" data-toggle="tooltip" data-placement="top" title="Edit">
                <i class="fas fa-pencil-alt"></i><strong>Edit</strong>
            </a>
            <form action="{{route('admin.delete', ['id' => $construction->id])}}" method="post">
                  @csrf
                  @method('DELETE')
                  <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        </div>


      </div>
  </main>

@endsection

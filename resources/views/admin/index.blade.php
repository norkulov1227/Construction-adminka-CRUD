@extends('layouts.layout')
@section('content')
<main>
    <div class="container-fluid mb-5">
        <a href="{{route('admin.create')}}" class="btn btn-success">Create</a>
      <!--Section: Basic examples-->
      <section>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                        <th style="color: blue" class="th-sm">
                            ID
                        </th>
                        <th class="th-sm" style="color: blue" >
                            Name
                        </th>
                        <th style="color: blue" class="th-sm">
                            Years of Start
                        </th>
                        <th style="color: blue" class="th-sm">
                            Years of Finish
                        </th>
                        <th style="color: blue" class="th-sm">
                            All Price
                        </th>
                        <th style="color: blue" class="th-sm">
                            Number of Workers
                        </th>
                        <th style="color: blue" class="th-sm">
                            Image
                        </th>
                    </tr>
                  </thead>
                  <tbody>
                        @foreach ($construction as $item)
                            <tr>
                                <td>
                                    <a href="{{route('admin.show', ['id' => $item->id])}}">{{$item->id}}</a>
                                </td>
                                <td>
                                    <a href="{{route('admin.show', ['id' => $item->id])}}">{{$item->name}}</a>
                                </td>
                                <td>
                                    <a href="{{route('admin.show', ['id' => $item->id])}}">{{$item->years_of_start}}</a>
                                </td>
                                <td>
                                    <a href="{{route('admin.show', ['id' => $item->id])}}">{{$item->years_of_finish}}</a>
                                </td>
                                <td>
                                    <a href="{{route('admin.show', ['id' => $item->id])}}">${{$item->price}}</a>
                                </td>
                                <td>
                                    <a href="{{route('admin.show', ['id' => $item->id])}}">{{$item->number_of_workers}}</a>
                                </td>
                                <td>
                                    <a href="{{route('admin.show', ['id' => $item->id])}}">
                                        <img src="{{asset('storage/images/' . $item->image)}}" width="100" alt="Rasm bor">
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                        <th style="color: blue" class="th-sm">ID
                        </th>
                        <th class="th-sm" style="color: blue" >Name
                        </th>
                        <th style="color: blue" class="th-sm">Years of Start
                        </th>
                        <th style="color: blue" class="th-sm">Years of Finish
                        </th>
                        <th style="color: blue" class="th-sm">All Price
                        </th>
                        <th style="color: blue" class="th-sm">Number of Workers
                        </th>
                        <th style="color: blue" class="th-sm">Image
                        </th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

          </div>

        </div>

      </section>
      <!--Section: Basic examples-->

    </div>
  </main>

@endsection

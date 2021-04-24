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
                <form action="{{ url('fnd-list') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                      <label for="">Victim Name</label>
                      <input type="text" placeholder="Victim Name" name="name" autocomplete="off" class="ar_form_control">
                      <label for="img">Image</label>
                      <input type="file" name="img[]"  multiple class="form-control" id="img">
                    </div>
                    <button type="submit" class="btn btn-danger mb-4">Submit</button>
                </form>
              </div>
              <div class="col-12">
                <table class="table table-bordered">
                    @foreach ($fndlist as $data)
                    <tr>
                      <td>{{$data->name}}</td>
                      @foreach (json_decode($data->img) as $item)
                        
                          <td><span><img class="w-50" src="{{ asset($item) }}" alt=""></span></td>

                      @endforeach
                      <td><a class="btn btn-danger" href="{{ Route('fnd-delete', $data->id) }}">Delete</a></td>
                    </tr>
                    @endforeach
                </table>
              </div>
          </div>
      </div>
  </div>
</div>


@endsection
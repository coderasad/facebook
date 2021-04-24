@extends('layouts.app')
@section('title')
  Home Page
@endsection

@section('content')
<div class="bg-white">
  <div class="container-login100">
      <div class="container">
          <div class="row">
              <div class="col-12">
                <img class="w-100" src="{{asset('public/frontend/img/404.jpg')}}" alt="">
                <a href="{{url('/')}}" class="btn btn-block btn-dark mt-3 text-center">Try Again</a>
              </div>
          </div>
      </div>
  </div>
</div>


@endsection
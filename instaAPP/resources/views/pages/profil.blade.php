@extends('layout')

@section('content')
    <div class="container my-4" style="width: 40%">
        <div class="d-flex flex-row" style="align-items: center">
            <img class="m-3" src="{{URL('/images/userblack.png')}}" alt="" style="width: 125px; height: 125px">
            <div class="d-flex flex-column ms-5" style="width: 100%">
                <h3>Username</h3>
                <div class="d-flex flex-row" style="width: 100%; align-items: center">
                    <p class="me-5" style="margin-top: 20px">1 <span>Post</span></p>
                    <p class="me-5">25 <span>Followers</span></p>
                    <p>75 <span>Following</span></p>
                </div>
                <div class="uk-button uk-button-default" style="width: 60%">
                    Edit Profil
                </div>
            </div>
        </div>
        <div class="uk-child-width-1-3@m mt-5" uk-grid>
            <div>
                <a href="">
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top">
                            <img src="https://www.wallpapertip.com/wmimgs/212-2127419_3d-wallpaper-hd-for-wall.jpg" alt="">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
@extends('layout')

@section('content')
    <div class="container my-4" style="width: 40%">
        <div class="uk-child-width-2-2@s" uk-grid>
            <div>
                <div class="uk-card uk-card-default mb-3" style="border: 1px solid lightgrey; border-radius: 10px">
                    <div class="uk-card-media-top">
                        <div class="d-flex flex-row m-3" style="align-items: center">
                            <a href="">
                                <img src="{{URL('/images/userblack.png')}}" alt="" style="width: 50px; height: 50px">
                            </a>
                            <h5 class="fw-bold my-0 ms-3">OtherUser1</h5>
                        </div>
                        <img style="width: 100%" src="https://www.wbcsd.org/var/site/storage/images/media/page-assets/new-projects/nature-action/nature-based-solutions-guidance/154605-1-eng-GB/Nature-based-Solutions-Guidance_720_square.jpg" alt="">
                    </div>
                    <div class="m-3">
                        {{-- <h5 class="uk-card-title fw-bold">OtherUser1</h5> --}}
                        <div class="d-flex flex-row">
                            <a id="like-con" onclick="likedClick()">
                                <svg aria-label="Like" class="_8-yf5 " fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24"><path d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z" id="like"></path>
                                </svg>
                            </a>
                            <a id="unlike-con" onclick="unlikedClick()" style="display: none">
                                <svg aria-label="Unlike" class="_8-yf5 " fill="#ed4956" height="24" role="img" viewBox="0 0 48 48" width="24"><path d="M34.6 3.1c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5s1.1-.2 1.6-.5c1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z" id="unlike" style="display: none"></path>
                                </svg>
                            </a>
                            <a href="#modal-full" uk-toggle class="ms-3">
                                <svg aria-label="Comment" class="_8-yf5 " fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24"><path clip-rule="evenodd" d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z" fill-rule="evenodd"></path></svg>
                            </a>
                            <div id="modal-full" class="uk-modal-full" uk-modal>
                                <div class="uk-modal-dialog">
                                    <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                                    <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                                        <div class="uk-background-cover" style="background-image: url('https://www.wbcsd.org/var/site/storage/images/media/page-assets/new-projects/nature-action/nature-based-solutions-guidance/154605-1-eng-GB/Nature-based-Solutions-Guidance_720_square.jpg');" uk-height-viewport></div>
                                        <div class="p-5 d-flex align-items-start flex-column" style="height: 100vh">
                                            <div class="d-flex flex-row" style="align-items: center">
                                                <img src="{{URL('/images/userblack.png')}}" alt="" style="width: 50px; height: 50px">
                                                <h3 class="my-0 mx-3 fw-bold">OtherUser1</h3>
                                            </div>
                                            <hr>
                                            <div class="uk-modal-body" class="my-3 me-0 pt-0" style="height: 100%; width: 100%; overflow-y: scroll; border: 1px solid lightgrey; border-radius: 10px">
                                                <div style="overflow: auto">
                                                    <div class="d-flex flex-row my-4">
                                                        <img src="{{URL('/images/userblack.png')}}" alt="" style="width: 50px; height: 50px">
                                                        <div class="d-flex flex-column ms-3">
                                                            <p class="fw-bold mb-1">OtherUser1</p>
                                                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-row my-4">
                                                        <img src="{{URL('/images/userblack.png')}}" alt="" style="width: 50px; height: 50px">
                                                        <div class="d-flex flex-column ms-3">
                                                            <p class="fw-bold mb-1">OtherUser2</p>
                                                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-row my-4">
                                                        <img src="{{URL('/images/userblack.png')}}" alt="" style="width: 50px; height: 50px">
                                                        <div class="d-flex flex-column ms-3">
                                                            <p class="fw-bold mb-1">OtherUser3</p>
                                                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" d-flex flex-row mt-4" style="width: 100%">
                                                <a id="like-mod-con" onclick="likedClick()">
                                                    <svg aria-label="Like" class="_8-yf5 " fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24"><path d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z" id="like-mod"></path>
                                                    </svg>
                                                </a>
                                                <a id="unlike-mod-con" onclick="unlikedClick()" style="display: none">
                                                    <svg aria-label="Unlike" class="_8-yf5 " fill="#ed4956" height="24" role="img" viewBox="0 0 48 48" width="24"><path d="M34.6 3.1c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5s1.1-.2 1.6-.5c1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z" id="unlike-mod" style="display: none"></path>
                                                    </svg>
                                                </a>
                                                <a class="ms-auto" id="book-mod-con" onclick="bookClick()">
                                                    <svg aria-label="Save" class="_8-yf5 " fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24"><path d="M43.5 48c-.4 0-.8-.2-1.1-.4L24 29 5.6 47.6c-.4.4-1.1.6-1.6.3-.6-.2-1-.8-1-1.4v-45C3 .7 3.7 0 4.5 0h39c.8 0 1.5.7 1.5 1.5v45c0 .6-.4 1.2-.9 1.4-.2.1-.4.1-.6.1zM24 26c.8 0 1.6.3 2.2.9l15.8 16V3H6v39.9l15.8-16c.6-.6 1.4-.9 2.2-.9z" id="book-mod"></path></svg>
                                                </a>
                                                <a class="ms-auto" id="unbook-mod-con" onclick="unbookClick()" style="display: none">
                                                    <svg aria-label="Remove" class="_8-yf5 " fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24"><path d="M43.5 48c-.4 0-.8-.2-1.1-.4L24 28.9 5.6 47.6c-.4.4-1.1.6-1.6.3-.6-.2-1-.8-1-1.4v-45C3 .7 3.7 0 4.5 0h39c.8 0 1.5.7 1.5 1.5v45c0 .6-.4 1.2-.9 1.4-.2.1-.4.1-.6.1z" id="unbook-mod" style="display: none"></path></svg>
                                                </a>
                                            </div>
                                            <p class="fw-bold">123,456 likes</p>
                                            <div class="d-flex flex-row" style="width: 100%; align-items: center">
                                                <form style="width: 100%">
                                                    <div class="uk-inline" style="width: 100%">
                                                        <a class="uk-form-icon" href="#" uk-icon="icon: happy"></a>
                                                        <input class="uk-input" type="text" style="height: 50px">
                                                    </div>
                                                </form>
                                                <a class="ms-2 fw-bold">
                                                    Post
                                                    {{-- <p class="ms-2 fw-bold">Post</p> --}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a class="ms-auto" id="book-con" onclick="bookClick()">
                                <svg aria-label="Save" class="_8-yf5 " fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24"><path d="M43.5 48c-.4 0-.8-.2-1.1-.4L24 29 5.6 47.6c-.4.4-1.1.6-1.6.3-.6-.2-1-.8-1-1.4v-45C3 .7 3.7 0 4.5 0h39c.8 0 1.5.7 1.5 1.5v45c0 .6-.4 1.2-.9 1.4-.2.1-.4.1-.6.1zM24 26c.8 0 1.6.3 2.2.9l15.8 16V3H6v39.9l15.8-16c.6-.6 1.4-.9 2.2-.9z" id="book"></path></svg>
                            </a>
                            <a class="ms-auto" id="unbook-con" onclick="unbookClick()" style="display: none">
                                <svg aria-label="Remove" class="_8-yf5 " fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24"><path d="M43.5 48c-.4 0-.8-.2-1.1-.4L24 28.9 5.6 47.6c-.4.4-1.1.6-1.6.3-.6-.2-1-.8-1-1.4v-45C3 .7 3.7 0 4.5 0h39c.8 0 1.5.7 1.5 1.5v45c0 .6-.4 1.2-.9 1.4-.2.1-.4.1-.6.1z" id="unbook" style="display: none"></path></svg>
                            </a>
                        </div>
                        <p class="fw-bold">123,456 likes</p>
                        <p class="my-2"><span class="fw-bold">Otheruser1</span>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <p class="my-2"><span class="fw-bold">Otheruser1</span>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <p class="my-2"><span class="fw-bold">Otheruser1</span>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <div class="d-flex flex-row mt-3" style="width: 100%; align-items: center">
                            <form style="width: 100%">
                                <div class="uk-inline" style="width: 100%">
                                    <a class="uk-form-icon" href="#" uk-icon="icon: happy"></a>
                                    <input class="uk-input" type="text" style="height: 50px">
                                </div>
                            </form>
                            <a class="ms-2 fw-bold">
                                Post
                                {{-- <p class="ms-2 fw-bold">Post</p> --}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function likedClick() {
            document.getElementById("like").style.display = "none";
            document.getElementById("like-con").style.display = "none";
            document.getElementById("like-mod").style.display = "none";
            document.getElementById("like-mod-con").style.display = "none";
            document.getElementById("unlike").style.display = "block";
            document.getElementById("unlike-con").style.display = "block";
            document.getElementById("unlike-mod").style.display = "block";
            document.getElementById("unlike-mod-con").style.display = "block";
        }

        function unlikedClick() {
            document.getElementById("unlike").style.display = "none"
            document.getElementById("unlike-con").style.display = "none"
            document.getElementById("unlike-mod").style.display = "none"
            document.getElementById("unlike-mod-con").style.display = "none"
            document.getElementById("like").style.display = "block"
            document.getElementById("like-con").style.display = "block"
            document.getElementById("like-mod").style.display = "block"
            document.getElementById("like-mod-con").style.display = "block"
        }

        function bookClick() {
            document.getElementById("book").style.display = "none"
            document.getElementById("book-con").style.display = "none"
            document.getElementById("book-mod").style.display = "none"
            document.getElementById("book-mod-con").style.display = "none"
            document.getElementById("unbook").style.display = "block"
            document.getElementById("unbook-con").style.display = "block"
            document.getElementById("unbook-mod").style.display = "block"
            document.getElementById("unbook-mod-con").style.display = "block"
        }

        function unbookClick() {
            document.getElementById("unbook").style.display = "none"
            document.getElementById("unbook-con").style.display = "none"
            document.getElementById("unbook-mod").style.display = "none"
            document.getElementById("unbook-mod-con").style.display = "none"
            document.getElementById("book").style.display = "block"
            document.getElementById("book-con").style.display = "block"
            document.getElementById("book-mod").style.display = "block"
            document.getElementById("book-mod-con").style.display = "block"
        }
    </script>
@endsection
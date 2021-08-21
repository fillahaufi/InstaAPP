<div class="boundary-align uk-sticky" uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky;">
    <nav class="uk-navbar-container" uk-navbar style="position: relative; z-index: 980; background-color: #242424; padding: 0 100px">
        <div class="uk-navbar-left ms-5" style="margin-left: 15px; color: white; font-weight: bolder; font-size: xx-large;">
            
            <a href="{{ url('/') }}" class="text-white" style="">
                InstaAPP
            </a>
                
        </div>

        <div class="nav-overlay uk-navbar-right">
            <ul class="uk-navbar-nav">
                <li><a class="text-white {{ Request::is('/') ? 'fw-bold' : '' }}" href="{{ url('/') }}" style="font-size: large">BERANDA</a></li>
                <li><a class="text-white {{ Request::is('chat') ? 'fw-bold' : '' }}" href="{{ url('/chat') }}" style="font-size: large">CHAT</a></li>
                <li><a class="text-white {{ Request::is('notifikasi') ? 'fw-bold' : '' }}" href="#" style="font-size: large">NOTIFIKASI</a></li>
                <div uk-dropdown="pos: top-right; mode: click">
                    <ul class="uk-nav uk-dropdown-nav">
                        <div class="d-flex flex-row mx-1 my-2" style="align-items: center">
                            <img src="{{URL('/images/userblack.png')}}" alt="" style="width: 50px; height: 50px;">
                            <p class="mx-3"><span class="fw-bold">OtherUser1</span>&nbsp; started following you</p>
                            <div class="uk-button uk-button-primary">follow back</div>
                        </div>
                        <div class="d-flex flex-row mx-1 my-2" style="align-items: center">
                            <img src="{{URL('/images/userblack.png')}}" alt="" style="width: 50px; height: 50px;">
                            <p class="mx-3"><span class="fw-bold">OtherUser2</span>&nbsp; Liked your post</p>
                            <a href="#modal-full" uk-toggle class="ms-auto">
                                <img src="https://www.wbcsd.org/var/site/storage/images/media/page-assets/new-projects/nature-action/nature-based-solutions-guidance/154605-1-eng-GB/Nature-based-Solutions-Guidance_720_square.jpg" alt="" style="width: 50px; height: 50px">
                            </a>
                        </div>
                    </ul>
                </div>
                <a class="uk-navbar-toggle text-white" uk-search-icon uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>

            </ul>
        </div>

        <div class="nav-overlay uk-navbar-left uk-flex-1" hidden>

            <div class="uk-navbar-item uk-width-expand">
                <form class="uk-search uk-search-navbar uk-width-1-1">
                    <input class="uk-search-input text-white" type="search" placeholder="Search..." autofocus>
                </form>
            </div>
    
            <a class="uk-navbar-toggle text-white" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
    
        </div>
        <a class="m-4" style="width: 40px; color: white">
            <img src="{{URL('/images/user.png')}}" alt="">
        </a>
        <div uk-dropdown="pos: top-right; mode: click">
            <ul class="uk-nav uk-dropdown-nav">
                <li class="uk-nav-header">Username</li>
                <li><a class="{{ Request::is('profil') ? 'fw-bold' : '' }}" href="{{ url('/profil') }}">Profil</a></li>
                <li><a class="{{ Request::is('bookmark') ? 'fw-bold' : '' }}" href="{{ url('/bookmark') }}">Bookmark</a></li>
                <li><a class="{{ Request::is('settings') ? 'fw-bold' : '' }}" href="{{ url('/settings') }}">Settings</a></li>
                <li class="uk-nav-divider"></li>
                <button class="uk-button uk-button-danger mt-2">Logout</button>
            </ul>
        </div>
    </nav>
</div>
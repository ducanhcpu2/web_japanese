<div class="main-top" id="home">
    <!-- header -->
    @include('template.sub-main-top')
    <!-- //header -->

    <!-- banner -->
    <div class="banner_w3lspvt">
        <div class="csslider infinity" id="slider1">
            <input type="radio" name="slides" checked="checked" id="slides_1" />
            <input type="radio" name="slides" id="slides_2" />
            <input type="radio" name="slides" id="slides_3" />
            <ul class="banner_slide_bg">
                <li>
                    <div class="container">
                        <div class="w3ls_banner_txt text-center">
                            <h3 class="w3ls_pvt-title text-wh text-uppercase let">日本語</h3>
                            <p class="text-li">きんべんはせいこうのはは</p>
                            @if(!Auth::check())
                                <a href="#" target="_blank" class="btn button-style mt-sm-5 mt-4">đăng nhập để Làm bài thi/受験するにはログインしてください</a>
                            @else
                                <p></p>
                                <a href="{{route('exams')}}" target="_blank" class="btn button-style mt-sm-5 mt-4">xin chào {{Auth::user()->name}} </br> bắt đầu vào làm bài kiểm tra/テストをはじめます</a>

                            @endif
                        </div>
                    </div>
                </li>
                <li>
                    <div class="container">
                        <div class="w3ls_banner_txt text-center">
                            <h3 class="w3ls_pvt-title text-wh text-uppercase let">日本語</h3>
                            <p class="text-li">きんべんはせいこうのはは</p>
                            <a href="https://w3layouts.com/free-responsive-html5-css3-website-templates/" target="_blank" class="btn button-style mt-sm-5 mt-4">Browse All</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="container">
                        <div class="w3ls_banner_txt text-center">
                            <h3 class="w3ls_pvt-title text-wh text-uppercase let">日本語</h3>
                            <p class="text-bl">きんべんはせいこうのはは</p>
                            <a href="https://w3layouts.com/free-responsive-html5-css3-website-templates/" target="_blank" class="btn button-style mt-sm-5 mt-4">Browse All</a>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="arrows">
                <label for="slides_1"></label>
                <label for="slides_2"></label>
                <label for="slides_3"></label>
            </div>
        </div>
    </div>
    <!-- //banner -->
</div>

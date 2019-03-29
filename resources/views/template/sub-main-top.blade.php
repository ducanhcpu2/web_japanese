<header>
    <div class="container-fluid">
        <div class="header d-md-flex justify-content-between align-items-center py-3 px-xl-5 px-lg-3 px-2">
            <!-- logo -->
            <div id="logo">
                <h1><a href="{{route('index')}}">Draw</a></h1>
            </div>
            <!-- //logo -->
            <!-- nav -->
            <div class="nav_w3ls">
                <nav>
                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu">
                        <li><a href="{{route('index')}}" class="active">Home</a></li>
                        <li><a href="{{route('about')}}">About Us</a></li>
                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle toogle-2">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
                            </label>
                            <a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                <li><a href="#services" class="drop-text">Services</a></li>
                                <li><a href="{{route('about')}}" class="drop-text">Team</a></li>
                                <li><a href="{{route('about')}}" class="drop-text">Statistics</a></li>
                                <li><a href="#testi" class="drop-text">Testimonials</a></li>
                                <li><a href="#sub" class="drop-text">Subscribe Form</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                        <li><a href="{{route('login')}}" class="active">Login</a></li>
                        <li><a href="{{route('register')}}" class="active">Register</a></li>
                    </ul>
                </nav>
            </div>
            <!-- //nav -->
        </div>
    </div>
</header>

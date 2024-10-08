<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                            <li>Free Shipping for all Order of $99</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <div class="header__top__right__language">
                            <img src="img/language.png" alt="" />
                            <div>English</div>
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                <li><a href="#">Bulgarian</a></li>
                                <li><a href="#">English</a></li>
                            </ul>
                        </div>
                        <div class="header__top__right__auth">
                            <a href="#"><i class="fa fa-user"></i> Loginns</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="./index.html"><img src="img/logo.png" alt="" /></a>
                </div>
            </div>

            <nav class="header__menu">
                <ul>
                    <x-nav-link href="{{ url('/') }}">Home</x-nav-link>
                    <x-nav-link href="{{ url('/shop') }}">Shop</x-nav-link>
                    <x-nav-link href="{{ url('/cart') }}">Cart</x-nav-link>
                    <x-nav-link href="{{ url('/checkout') }}">Check Out</x-nav-link>
                    <x-nav-link href="{{ url('/contact') }}">Contact</x-nav-link>
                </ul>
            </nav>

            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-heart"></i> <span>1</span></a>
                        </li>
                        <li>
                            <a href="{{ url('/cart'); }}"><i class="fa fa-shopping-bag"></i> <span>3</span></a>
                        </li>
                    </ul>
                    <div class="header__cart__price">item: <span>$150.00</span></div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<nav class="header__menu">
    <ul>
        <li class="active"><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/shop') }}">Shop</a></li>
        <li><a href="#">Pages</a>
            <ul class="header__menu__dropdown">
                <li><a href="{{ url('/shop#details') }}">Shop Details</a></li>
                <li><a href="{{ url('/shoping-cart.html') }}">Shoping Cart</a></li>
                <li><a href="{{ url('/checkout.html') }}">Check Out</a></li>
                <li><a href="{{ url('/blog-details.html') }}">Blog Details</a></li>
            </ul>
        </li>
        <li><a href="{{ url('/blog.html') }}">Blog</a></li>
        <li><a href="{{ url('/contact.html') }}">Contact</a></li>
    </ul>
</nav>

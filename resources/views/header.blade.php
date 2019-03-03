<div id="mobile-menu-open" class="shadow-large">
    <i class="fa fa-bars" aria-hidden="true"></i>
</div>
<!-- End #mobile-menu-toggle -->
<header>
    <div id="mobile-menu-close">
        <span>Close</span> <i class="fab fa-times" aria-hidden="true"></i>
    </div>
    <ul id="menu" class="shadow">
        @foreach ($homeContent["header"] as $item)
            <li>
                <a href="{{$item["link"]}}">{{$item["text"]}}</a>
            </li>
        @endforeach
    </ul>
</header>
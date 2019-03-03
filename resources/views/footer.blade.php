<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-5 copyright">
                <p>
                    Copyright &copy; {{$copywriteYear}} {{$homeContent["lead"]["name"]}}
                </p>
            </div>
            <div class="col-sm-2 top">
                <span id="to-top">
                    <i class="fa fa-chevron-up" aria-hidden="true"></i>
                </span>
            </div>
            <div class="col-sm-5 social">
                <ul>
                    @foreach ($homeContent["footer"]["social_media"] as $item)
                    <li>
                        <a href="{{$item['link']}}" target="_blank"><i class="{{$item['icon_class']}}" aria-hidden="true"></i></a>
                    </li>  
                    @endforeach
                    <li>
                        <a href="mailto:padalia.rushabh@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                    </li>  
                </ul>
            </div>
        </div>
    </div>
</footer>
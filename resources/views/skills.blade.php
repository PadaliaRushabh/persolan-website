
    <div id="skills">
    <h2 class="heading">{{$homeContent["skills_heading"]}}</h2>
        <ul>
            @foreach ($homeContent["skills"] as $item)
                <li>{{$item}}</li>
            @endforeach
        </ul>
    </div>
    <!-- End #skills -->
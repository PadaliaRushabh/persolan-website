<div id="education">
    <h2 class="heading">{{$homeContent["education_heading"]}}</h2>
    @foreach ($homeContent["education"] as $item)
        <div class="education-block">
            <h3>{{$item["university_name"]}}</h3>
            <span class="education-date">{{$item["date"]}}</span>
            <h4>{{$item["degree_title"]}}</h4>
            <p>
                {{$item["text"]}}
            </p>
        </div>
    @endforeach

</div>
<!-- End #education -->
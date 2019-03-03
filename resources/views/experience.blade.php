<div id="experience" class="background-alt">
    <h2 class="heading">{{$homeContent["experience_heading"]}}</h2>
    <div id="experience-timeline">
        @foreach ($homeContent["experience"] as $item)
            <div data-date="{{$item['date']}}">
                <h3>{{$item['employer_name']}}</h3>
                <h4>{{$item['job_title']}}</h4>
                <p>
                    {{$item['text']}}
                </p>
            </div>
        @endforeach
    </div>
</div>
<!-- End #experience -->
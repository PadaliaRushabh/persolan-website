<div id="projects" class="background-alt">
<h2 class="heading">{{$homeContent["project_heading"]}}</h2>
    <div class="container">
        <div class="row">
            @foreach ($homeContent["project"] as $item)
            <div class="project shadow-large">
                    <div class="project-image">
                        <img src="{{$item['image']}}" />
                    </div>
                    <!-- End .project-image -->
                    <div class="project-info">
                        <h3>{{$item['title']}}</h3>
                        <p>
                            {{$item['text']}}
                        </p>
                        <a href="{{$item['link']}}">View Project</a>
                    </div>
                    <!-- End .project-info -->
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- End #projects -->
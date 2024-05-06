<div class="card">
    <img src="{{Storage::url($image)}}" alt="" class="card-image-top">
    <div class="card-body">
        <h5 class="card-title">{{$title}}</h5>
        <p class="card-text">{{$subtitle}}</p>
        <a href="{{$urlUser}}"  class="small text-muted d-flex justify-content-center align-items-center">{{$user}}</a>
        <a href="{{$urlCategory}}"  class="small text-muted d-flex justify-content-center align-items-center">{{$category}}</a>
       
       @if ($tags)
           
       <p class="small fst-itaic text-capialize">
           @foreach ($tags as $tag)
           #{{$tag->name}}
              
           @endforeach
       </p>
       @endif
     
    </div>
    <div class="card-footer text-muted d-flex justify-content-center align-items-center">
Redatto il {{$data}} da  {{$user}}
    <br>
<a href="{{$url}}" class="btn btn-info text-whte">Leggi</a>
    </div>
</div>
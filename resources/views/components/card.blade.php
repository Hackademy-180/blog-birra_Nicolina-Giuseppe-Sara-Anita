<div class="card mt-5">
  <img src="{{Storage::url($beer->img)}}" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h4 class="card-title text-center">{{$beer->name}}</h4>
    <h5 class="card-text">{{$beer->brewery}}</h5>
    <div class="d-flex mt-3 align-items-center justify-content-center">
      <a href="{{route('beer_detail', compact('beer'))}}" class="btn"><i class="fa-brands fa-searchengin fa-2x"></i></a>
      @if(Auth::id()==$beer->user->id)
        <form method="POST" action="{{route('beer_destroy', compact('beer'))}}">
          @csrf
          @method('DELETE')
          <button class="trash" type="submit"><i class="fa-regular fa-trash-can fa-2x text-danger"></i></button>
        </form>
      @endif
    </div>
  </div>
</div>

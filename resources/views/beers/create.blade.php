<x-layout>
    @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
    @endif
    <h1 class=" text-center mt-5">Aggiungi la tua birra preferita</h1>
    <main class="container">
        <section class="row justify-content-center mt-5">
            <article class="col-12 col-md-6 text-center">
                <form method="POST" action="{{route("beer_add")}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="name" placeholder="" name="name">
                        @error('name')
                        <p class="text text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="brewery" class="form-label">Birrificio:</label>
                        <input type="text" class="form-control" id="brewery" placeholder="" name='brewery'>
                        @error('brewery')
                        <p class="text text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="style" class="form-label">Stile:</label>
                        <input type="text" class="form-control" id="style" placeholder="" name="style">
                        @error('style')
                        <p class="text text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="info" class="form-label">Descrizione:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="info"></textarea>
                        @error('info')
                        <p class="text text-danger">{{$message}}</p>
                        @enderror
                    </div>
                     <div class="mb-3">
                        <label for="img" class="form-label">Immagine:</label>
                        <input type="file" class="form-control" id="img" placeholder="" name="img">
                    </div>
                     <div class="mb-3">
                        <p class="lead">Categorie:</p>
                        <div class="d-flex flex-wrap gap-3 justify-content-center">
                          @foreach($categories as $category)
                            <div class="form-check">
                              <label for="{{$category->id}}" class="form-check-label">{{$category->name}}</label>
                              <input type="checkbox" class="form-check-input" value='{{$category->id}}'id="{{$category->id}}" name="categories[]">
                            </div>
                           @endforeach
                        </div>
                    <div class="d-flex justify-content-center">
                         <x-button />
                    </div>
                </form>
            </article>
        </section>
    </main>
</x-layout>
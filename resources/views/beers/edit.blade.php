<x-layout>
    <
    <h1 class=" text-center mt-3" >Aggiungi la tua birra preferita</h1>
    <main class="container">
        <section class="row justify-content-center mt-5">
            <article class="col-12 col-md-6 text-center">
                <form method="POST" action="{{route("beer_update", compact("beer"))}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nuovo Nome:</label>
                        <input type="text" class="form-control" id="name" placeholder="" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="brewery" class="form-label">NUovo Birrificio:</label>
                        <input type="text" class="form-control" id="brewwey" placeholder="" name='brewery'>
                    </div>
                    <div class="mb-3">
                        <label for="style" class="form-label">Nuovo Stile:</label>
                        <input type="text" class="form-control" id="style" placeholder="" name="style">
                    </div>
                    <div class="mb-3">
                        <label for="info" class="form-label">Nuovo Descrizione:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="info">{{$beer->info}}</textarea>
                    </div>
                     <div class="mb-3">
                        <label for="img" class="form-label">Nuovo Immagine:</label>
                        <input type="file" class="form-control" id="img" placeholder="" name="img">
                    </div>
                    <div class="mb-3">
                        <p>Categorie:</p>
                        @foreach($categories as $category)
                        <div class="gap-2">
                            <label for="{{$category->id}}" class="form-check-label">{{$category->name}}</label>
                            <input type="checkbox" class="form-check-input" value='{{$category->id}}'id="{{$category->id}}" name="categories[]">
                        </div>
                        @endforeach
                    <div class="d-flex justify-content-center">
                       <button type="submit" class="btn btn-warning">Modifica</button>
                    </div>
                </form>
            </article>
        </section>
    </main>
</x-layout>
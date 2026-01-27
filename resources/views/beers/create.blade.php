<x-layout>
    <
    <h1 class=" text-center mt-3" >Aggiungi la tua birra preferita</h1>
    <main class="container">
        <section class="row justify-content-center mt-5">
            <article class="col-12 col-md-6 text-center">
                <form method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="name" placeholder="" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="brewery" class="form-label">Birrificio:</label>
                        <input type="text" class="form-control" id="brewwey" placeholder="" name='brewery'>
                    </div>
                    <div class="mb-3">
                        <label for="style" class="form-label">Stile:</label>
                        <input type="text" class="form-control" id="style" placeholder="" name="style">
                    </div>
                    <div class="mb-3">
                        <label for="info" class="form-label">Descrizione:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="info"></textarea>
                    </div>
                     <div class="mb-3">
                        <label for="img" class="form-label">Immagine:</label>
                        <input type="file" class="form-control" id="img" placeholder="" name="img">
                        <button type="submit" class="btn btn-primary mt-4">Submit</button>
                    </div>
                </form>
            </article>
        </section>
    </main>
</x-layout>
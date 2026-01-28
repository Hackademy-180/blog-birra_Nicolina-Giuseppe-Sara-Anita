<x-layout>
    <h1 class="text-center mt-5">Lavora con noi</h1>
    <main class="container">
        <section class="row wh-75 justify-content-center mt-5">
            <article class="col-12 col-md-8">
                <form method="POST" action="{{route("send_email")}}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                     <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="mario@rossi.com" name="email">
                    </div>
                    <label for="mex" class="form-label">Messaggio:</label>
                    <textarea class="form-control" name="mex" id="mex" cols="30" rows="10"></textarea>
                    <div class="col-auto d-flex justify-content-end">
                       <button type="submit" class="btn btn-warning mt-3 mb-3">Invia</button>
                    </div>
                </form>
            </article>
        </section>
    </main>
   
</x-layout>
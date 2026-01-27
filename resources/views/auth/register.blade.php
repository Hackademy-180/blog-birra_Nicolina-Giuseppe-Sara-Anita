<x-layout>
    <h1 class="text-center mt-5">Pagina di registrazione</h1>
    <main class="container">
        <section class="row wh-75 justify-content-center mt-5">
            <article class="col-12 col-md-8">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                     <div class="mb-3">
                        <label for="mail" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="mail" placeholder="mario@rossi.com" name="mail">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="col-sm-2 col-form-label">Password:</label>
                        <div class="">
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="confirmpassword" class="col-sm-2 col-form-label">Conferma Password:</label>
                        <div class="">
                            <input type="password" class="form-control" id="confirmpassword" name="confirmpassword">
                        </div>
                    </div>
                    <div class="col-auto d-flex justify-content-end">
                       <button type="submit" class="btn btn-warning mb-3">Registrati</button>
                    </div>
                </form>
            </article>
        </section>
    </main>
</x-layout>
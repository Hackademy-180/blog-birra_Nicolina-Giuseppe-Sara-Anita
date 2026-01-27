<x-layout>
    <h1 class="text-center mt-5">Pagina Login:</h1>
    <main class="container">
        <section class="row wh-75 justify-content-center mt-5">
            <article class="col-12 col-md-8">
                <form methot="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="mail" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="mail" placeholder="mario@rossi.com" name="mail">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="col-sm-2 col-form-label">Password:</label>
                        <div>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                    </div>
                    <div class="col-auto d-flex justify-content-end">
                       <button type="submit" class="btn btn-warning mb-3">Login</button>
                    </div>
                </form>
            </article>
        </section>
    </main>
</x-layout>
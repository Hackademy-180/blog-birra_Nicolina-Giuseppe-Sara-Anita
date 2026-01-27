<x-layout>
    <h1>Dettaglio prodotto:</h1>
    <main class="container">
        <section class="row">
            <article class="col-12 col-md-6 text-center">
                <p class="lead">
                    <strong>Nome:</strong>
                </p>
                <p class="lead">
                    <strong>Birrificio:</strong>
                </p>
                <p class="lead">
                    <strong>Stile:</strong>
                </p>
                <p class="lead">
                    <strong>Descrizione:</strong>
                </p>
                <p class="lead">
                    <strong>Immagine:</strong>
                </p>
                <p class="lead">
                    <strong>Creato da:</strong>
                </p>
                @if(Auth::id()== $beer->user->id)
                <a href="" class="btn btn-warning">Modifica</a>
                <a href="" class="btn btn-warning">Tutte le birre</a>
                @endif
            </article>
        </section>
    </main>
</x-layout>
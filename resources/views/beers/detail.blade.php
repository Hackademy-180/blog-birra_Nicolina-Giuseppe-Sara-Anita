<x-layout>
    <h1 class="text-center mt-5">Dettaglio prodotto:</h1>
    <main class="container">
        <section class="row justify-content-center mt-5">
            <article class="col-12 col-md-6 text-center">
                <p class="lead">
                    <strong class="fw-bold">Nome: </strong>{{$beer->name}}
                </p>
                <p class="lead">
                    <strong class="fw-bold">Birrificio: </strong>{{$beer->brewery}}
                </p>
                <p class="lead">
                    <strong class="fw-bold">Stile: </strong>{{$beer->style}}
                </p>
                <p class="lead">
                    <strong class="fw-bold">Descrizione: </strong>{{$beer->info}}
                </p>
                <p class="lead">
                    <strong class="fw-bold">Creato da: </strong>
                </p>
                @if(Auth::id()== $beer->user->id)
                <a href="{{route('beer_edit')}}" class="btn btn-warning">Modifica</a>
                <a href="{{route('beer_index')}}" class="btn btn-warning">Tutte le birre</a>
                @endif
            </article>
        </section>
    </main>
</x-layout>
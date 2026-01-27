<x-layout>
    <main class="container">
        <section class="row">
            <article class="col-12 text-center">
                <h1 class="">le nostre recensioni</h1>
            </article>
             @foreach ($beers as $beer)
                <article class="col-12 col-md-3">
                    <x-beer-card :beer="$beer"/>
                </article>    
            @endforeach 
        </section>
    </main>
</x-layout>
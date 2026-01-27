<x-layout>
    <main class="container">
        <section class="row">
            <article class="col-12 text-center">
                <h1 class="mt-5">Le nostre recensioni</h1>
            </article>
             @foreach ($beers as $beer)
                <article class="col-12 col-md-3 mt-4">
                    <x-card :beer="$beer"/>
                </article>    
            @endforeach 
        </section>
    </main>
</x-layout>
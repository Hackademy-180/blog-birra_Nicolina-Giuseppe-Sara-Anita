<header>
    <!-- Video header startboostrap -->
    <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
    <div class="overlay"></div>

    <!-- The HTML5 video element that will create the background video on the header -->
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="{{asset('storage/app/public/media/headervideo.mp4')}}" type="video/mp4">
    </video>

    <!-- The header content -->
    <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white">
                <h1 class="">Non è alcolismo, è ricerca: birre artigianali italiane!</h1>
                <p class="display-6">Qui non si beve a caso (forse).
                    Degustiamo birre artigianali italiane con spirito critico, curiosità e un bicchiere sempre mezzo pieno.</p>

            </div>
        </div>
    </div>
</header>
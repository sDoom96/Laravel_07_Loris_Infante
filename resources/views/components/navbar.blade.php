<nav class="fs-4 navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <img class="m-4" src="/media/icons8-anime-91.png" alt="">
        <p class="mt-4 text-danger fs-2 d-flex justify-center">  ComicFriks</p>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="mx-5 collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mx-4 navbar-nav">
                <a class="m-4 nav-link active" aria-current="page" href="#">Home</a>
                <a class="m-4 nav-link" href="#">Contatti</a>
                <a class="m-4 nav-link" href="{{route('comics.index')}}">Elenco</a>
                <a class="m-4 nav-link disabled" aria-disabled="true">Notizie</a>
            </div>
            <form class="d-flex " role="search">
                <button class="justify-content-end btn btn-outline-danger" type="submit">
                    <a href="{{route('comics.create')}}"> Inserisci</a>
                </button>
            </form>
        </div>
    </div>
</nav>
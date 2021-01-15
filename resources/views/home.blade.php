@extends('layouts.app')
@section('content')
    <script type="text/javascript" src="{{ URL::asset('js/ajax1.js') }}"></script>


    <div class="content">
        <h1>Úvod</h1>
        <p>
            Toto je demo stránka z predmetu VAII, vytvorená pomocov technológie Laravel a ďalších ako semestrálna práca.
        </p>
        <p>
            Obsahuje podstránky zaoberajúce sa operačnými systémami.
        </p>

        <p id="viac" onclick="loadDoc()">Načítať viac...</p>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://www.notebookcheck.net/fileadmin/Notebooks/News/_nc3/548918584c74d4ce52ebf0930811cf17_1536x1024.png" class="d-block w-100" alt="Windows 10">
                </div>
                <div class="carousel-item">
                    <img src="https://149366088.v2.pressablecdn.com/wp-content/uploads/2020/05/kde-plasma-5.19.jpg" class="d-block w-100" alt="Linux">
                </div>
                <div class="carousel-item">
                    <img src="https://images.macrumors.com/article-new/2019/06/macos-catalina-wallpaper-800x479.jpg" class="d-block w-100" alt="macOS">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Predchádzajúci</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Ďalší</span>
            </a>
        </div>
    </div>

@endsection

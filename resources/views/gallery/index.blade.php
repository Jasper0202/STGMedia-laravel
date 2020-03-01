@extends('layouts.default')
@section('title', 'gallerij')

@section('body')
    <div class="content">
        <nav></nav>

        <button class="upload-button">i am severly depressed, please help i can't take it anymore</button>
        <input class="Search_Bar" type="text" placeholder="Zoeken..">
        <div class="galerij-content">

            <div class="Image">

                <div class="Image_Item">

                    <a href="#portfolio-item-1">
                        <img class="image" src="{{ asset('img/hamster.jpg') }}" alt="" class="Image">
                    </a>
                    <a href="#portfolio-item-2">
                        <img class="image" src="{{ asset('img/lizard.jpg') }}">
                    </a>
                    <a href="#portfolio-item-3">
                        <img class="image" src="{{ asset('img/pidgeon.jpg') }}">
                    </a>
                    <br><br>
                    <a href="#portfolio-item-4">
                        <img class="image" src="{{ asset('img/duck.jpg') }}">
                    </a>
                    <a href="#portfolio-item-5">
                        <img class="image" src="{{ asset('img/mole.jpg') }}">
                    </a>
                    <a href="#portfolio-item-6">
                        <img class="image" src="{{ asset('img/mouse.jpg') }}">
                    </a>


                </div>
            </div>


            <div class="Image_Lightbox" id="portfolio-item-1">
                <div class="Image_Lightbox_Content">
                    <a href="#galerij-content" class="close"></a>
                    <h3 class="Image_Lightbox_Title">Hamster in het gras</h3>
                    <img class="Lightbox_Image" src="../images/hamster.jpg" alt="">
                    <p class="Image_Lightbox_Desc">Hier de desc<p>
                </div>
            </div>

            <div class="Image_Lightbox" id="portfolio-item-2">
                <div class="Image_Lightbox_Content">
                    <a href="#galerij-content" class="close"></a>
                    <h3 class="Image_Lightbox_Title">Dikkie de hagedis</h3>
                    <img class="Lightbox_Image" src="../images/lizard.jpg" alt="">
                    <p class="Image_Lightbox_Desc">Hier de desc<p>
                </div>
            </div>

            <div class="Image_Lightbox" id="portfolio-item-3">
                <div class="Image_Lightbox_Content">
                    <a href="#galerij-content" class="close"></a>
                    <h3 class="Image_Lightbox_Title">Gerry de vogel</h3>
                    <img class="Lightbox_Image" src="../images/pidgeon.jpg" alt="">
                    <p class="Image_Lightbox_Desc">Hier de desc<p>
                </div>
            </div>

            <div class="Image_Lightbox" id="portfolio-item-4">
                <div class="Image_Lightbox_Content">
                    <a href="#galerij-content" class="close"></a>
                    <h3 class="Image_Lightbox_Title">Eend in het huis</h3>
                    <img class="Lightbox_Image" src="../images/duck.jpg" alt="">
                    <p class="Image_Lightbox_Desc">Hier de desc<p>
                </div>
            </div>

            <div class="Image_Lightbox" id="portfolio-item-5">
                <div class="Image_Lightbox_Content">
                    <a href="#galerij-content" class="close"></a>
                    <h3 class="Image_Lightbox_Title">Mol bij de dierenarts</h3>
                    <img class="Lightbox_Image" src="../images/mole.jpg" alt="">
                    <p class="Image_Lightbox_Desc">Hier de desc<p>
                </div>
            </div>

            <div class="Image_Lightbox" id="portfolio-item-6">
                <div class="Image_Lightbox_Content">
                    <a href="#galerij-content" class="close"></a>
                    <h3 class="Image_Lightbox_Title">Mooie muis in de tuin</h3>
                    <img class="Lightbox_Image" src="../images/mouse.jpg" alt="">
                    <p class="Image_Lightbox_Desc">Hier de desc<p>
                </div>
            </div>

        </div>
        <nav></nav>
    </div>
@endsection
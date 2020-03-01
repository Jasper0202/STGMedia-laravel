@extends('layouts.default')
@section('title', 'Home')
@section('body')
    <div class="content">
        <div class="slideshow-container">

            <div class="mySlides fade">
                <img src="{{ asset('img/jungle.jpg') }}" style="width:100%">
                <div class="text">STG Media</div>
            </div>

            <div class="mySlides fade">
                <img src="{{ asset('img/mountain.jpg') }}" style="width:100%">
                <div class="text">STG Media</div>
            </div>

            <div class="mySlides fade">
                <img src="{{ asset('img/savanne.jpg') }}" style="width:100%">
                <div class="text">STG Media</div>
            </div>

        </div>
        <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}
                slides[slideIndex-1].style.display = "block";
                setTimeout(showSlides, 4000); // Change image every 4 seconds
            }
        </script>
    </div>
@endsection
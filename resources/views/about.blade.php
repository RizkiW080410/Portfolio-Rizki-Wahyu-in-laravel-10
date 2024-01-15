@extends('layout.main')

@section('containerisi')
<section class="about" id="about">
    <div class="about-img">
        <img src="img/foto.png" alt="pasfoto">
    </div>
    <div class="about-content">
        <h2 class="heading">About <span>Me</span></h2>
        <h3>Desainer Grafis</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Temporibus debitis non aperiam sunt, adipisci natus. Asperiores, 
            commodi accusantium quod rerum doloribus est quo, reprehenderit suscipit 
            consectetur delectus voluptatem! Exercitationem, nesciunt?</p>
        <a href="#" class="btn">Read More</a>
    </div>
</section>

<footer class="footer">
    <div class="footer-text">
        <p>Copyright &copy; 2023 by Rizki Wahyu | All Rights Reserved.</p>
    </div>

    <div class="footer-icontop">
        <a href="/"><i class='bx bx-up-arrow-alt'></i></a>
    </div>
</footer>
@endsection
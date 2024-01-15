@extends('layout.main')

@section('containerisi')
<section class="home" id="home">
    <div class="home-content">
        <h3>Hello, It's Me</h3>
        <h1>Rizki Wahyu</h1>
        <h3>And I'm a <span>desainer grafis</span></h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Aspernatur optio veritatis expedita tempora laudantium dolorem, 
            doloribus accusamus ab et ea obcaecati cum libero voluptatibus. 
            Laborum consectetur ut aspernatur assumenda vel?</p>
        <div class="social-media">
            <a href="#"><i class='bx bxl-facebook' ></i></a>
            <a href="#"><i class='bx bxl-instagram-alt' ></i></a>
        </div>
        <a href="#" class="btn">Download CV</a>
    </div>
    <div class="home-img">
        <img src="img/fotolight.png" alt="pasfoto">
    </div>
</section>

<footer class="footer">
    <div class="footer-text">
        <p>Copyright &copy; 2023 by Rizki Wahyu | All Rights Reserved.</p>
    </div>

    <div class="footer-icontop">
        <a href=""><i class='bx bx-up-arrow-alt'></i></a>
    </div>
</footer>
@endsection
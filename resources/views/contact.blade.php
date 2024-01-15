@extends('layout.main')

@section('containerisi')
<section class="contact" id="contact">
    <h2 class="heading">Contact <span>Me!</span></h2>

    <form id="contactForm" action="/contact" method="post">
        @csrf
        <div class="input-box">
            <input type="text" id="name" name="name" placeholder="Full Name" value="{{ old('name') }}">
            <input type="email" id="email" name="email" placeholder="Email Address" value="{{ old('email') }}">
        </div>
        <div class="input-box">
            <input type="text" id="number" name="number" placeholder="Mobile Number" value="{{ old('number') }}">
            <input type="text" id="emailsub" name="emailsub" placeholder="Email Subject" value="{{ old('emailsub') }}">
        </div>
        <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message" value="{{ old('message') }}"></textarea>
        @if ($errors->any())
            <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
            </div>
        @endif
        <input type="submit" name="submit" value="Send Message" class="btn">
    </form>
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
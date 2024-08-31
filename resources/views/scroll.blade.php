<!--// resources/views/dashboard.blade.php-->
@extends('navbar')

@section('content')
    <!-- Your page content here -->
    <nav class="navbar">
        <img src="{{ asset('logo3.png') }}" alt="Logo" class="logo">
        <div class="menu">
            <x-scroll-link id="scroll-to" text="Scroll to section"></x-scroll-link>

            <!-- Some content here -->

            <div id="scroll-to">
                <!-- Section content here -->
            </div>
        </div>
        <button class="menubtn">
            <img src="{{ asset('contactpic.png') }}" alt="Contact"> Contact me
        </button>
    </nav>

    <script>
        // Using vanilla JavaScript
        document.querySelectorAll('.scroll-link').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
@endsection
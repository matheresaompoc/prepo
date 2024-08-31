<!-- resources/views/dashboard.blade.php -->

@extends('dashboard')

@section('content')
    <!-- Your page content here -->

    <style>
        .bg{
        object-fit: cover;
        height: 3rem;
        width: 4rem;
    }
    </style>

    <div>
        <section id="intro">
            <div class="introcontent">
                <img src="{{ asset('logo(1).png') }}" alt="bg" class="bg">
            </div>
        </section>
    </div>
@endsection
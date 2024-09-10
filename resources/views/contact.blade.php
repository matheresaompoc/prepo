<!-- resources/views/contact.blade.php -->

@extends('dashboard')

@section('content')

<style>
    #contactpage {
        min-height: calc(100vh - 4rem); /* Ensures the height of the section fits the viewport */
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 2rem;
    }

    .contacttitle {
        font-size: 2.5rem;
        margin-bottom: 1.5rem;
    }

    .contactdescrip {
        font-size: 1.2rem;
        font-weight: 300;
        margin-bottom: 2rem;
    }

    .contactform {
        width: 90vw;
         max-width: 60rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .name, .email, .msg {
        font-size: medium;
        width: 100%;
        max-width: 40rem;
        margin: 0.75rem 0;
        padding: 0.5rem 1rem;
        color: white;
        background-color: rgb(40, 40, 40);
        border: none;
        border-radius: 0.5rem;
    }

    .msg {
        min-height: 8rem; /* Ensures the message box has a proper height */
    }

    .contactbtn {
        background-color: white;
        color: black;
        border: none;
        padding: 1rem 3rem;
        border-radius: 2rem;
        margin-top: 1.5rem;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .contactbtn:hover {
        background-color: orange;
    }

    /* Responsive adjustments */
    @media screen and (max-width: 768px) {
        .contacttitle {
            font-size: 2rem;
        }

        .contactdescrip {
            font-size: 1rem;
        }

        .name, .email, .msg {
            font-size: 0.9rem;
            padding: 0.75rem;
        }

        .contactbtn {
            padding: 0.75rem 2.5rem;
        }
    }

    @media screen and (max-width: 480px) {
        .contacttitle {
            font-size: 1.75rem;
        }

        .contactdescrip {
            font-size: 0.9rem;
        }

        .name, .email, .msg {
            font-size: 0.85rem;
            padding: 0.65rem;
        }

        .contactbtn {
            padding: 0.65rem 2rem;
        }
    }

    .medialink{
        display: flex;
        flex-wrap: wrap;
    }
    .media{
        object-fit: cover;
        height: 3rem;
        width: 3rem;
        margin: 0 0.75rem;

    }
</style>

<section id="contactpage">
    <div id="contact">
        <h1 class="contacttitle">Contact Me</h1>
        <span class="contactdescrip">You can contact me using the form below</span>
        <form action="#" method="POST" class="contactform">
            @csrf
            <input type="text" name="name" class="name" placeholder="Your Name">
            <input type="email" name="email" class="email" placeholder="Your Email">
            <textarea name="message" class="msg" placeholder="Your Message"></textarea>
            <button class="contactbtn" type="submit">Submit</button>
        </form>
        <div class="medialink">
            <img src="{{ asset('logo3.png') }}" alt="indeed" class="media">
        </div>
    </div>
</section>

@endsection
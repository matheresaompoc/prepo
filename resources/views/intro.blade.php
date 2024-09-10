<!-- resources/views/intro.blade.php -->

@extends('dashboard')

@section('content')

    <style>
        .bg {
            position: absolute;
            z-index: -1;
            top: -4rem;
            right: 0;
            object-fit: cover;
            height: 100vh;
        }

        #intro {
            height: calc(100vh - 4rem);
            width: 100vw;
            max-width: 75rem;
            margin: 0 auto;
            overflow: hidden;
            postion: relative;
        }

        .introcontent{
            height: 100vh;
            width: 100vw;
            padding: 2rem;
            font-size: 3rem;
            font-weight: 700;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .hello{
            font-size: 1.75rem;
            font-weight: 100;
        }

        .introname{
            color: orange;
            
        }

        .paragraph{
            font-size: medium;
            font-weight: 300;
            letter-spacing: 1px;
        }

        .btn{
            background: white;
            margin: 1rem 0;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 2rem;
            height: 3rem;
            width: 10rem;

        }

        .btnimage{
            object-fit: cover;
            margin: 0 0.25rem;
            height: 1rem;
            width: 1rem;
        }

    </style>


    <div>
        <section id="intro">
            <div class="introcontent">
                <span class="hello">Hello</span>
                <span class="introtxt">I'm <span class="introname">Name</span><br />Website Designer</span>
                <p class="paragraph">I have knowledge</p>
                <button class="btn"><img class="btnimage" scr="{{ asset('briefcase.png') }}" alt=""/>Hire me</button>
                <img src="{{ asset('logo(1).png') }}" alt="bg" class="bg">
            </div>
        </section>
    </div>

@endsection
<!-- resources/views/work.blade.php -->

@extends('dashboard')

@section('content')

<style>
    #work{
        min-height: calc(100vh - 4rem);
        width: 100vw;
        max-width: 60rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        text-align: center;
        padding: 0 1rem;
    }

    .worktitle{
        margin: 1rem 0;
        font-size: 3rem;
   
    }
    
    .workdescrip{
        font-weight: 300;
        font-size: 1rem;
       
    }

    .worklink{
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100vw;
        max-width: 65rem;
        flex-wrap: wrap;

    }
    .link{
        object-fit: cover;
        height: 20rem;
        margin: 0.5rem;

    }
    .workbtn{
        padding: 0.5rem 2.5rem;
        border: none;
        border-radius: 2rem;
        background: white;
        font-size: 1rem;
        margin: 3rem 0;
    }
    @media screen and (max-width: 585px){
        .link{
            height: 48vw;
        }
    }
</style>

<section id="work">
    <h2 class="worktitle">
        My Portfolio
    </h2>
    <span class="workdescrip">The works that I have done</span>
    <div class="worklink">
        <img src="{{ asset('logo3.png') }}" alt="web" class="link">
        <img src="{{ asset('logo3.png') }}" alt="web" class="link">
        <img src="{{ asset('logo3.png') }}" alt="web" class="link">
        <img src="{{ asset('logo3.png') }}" alt="web" class="link">
        <img src="{{ asset('logo3.png') }}" alt="web" class="link">
    </div>
    <button class="workbtn">
        See more
    </button>
</section>

@endsection
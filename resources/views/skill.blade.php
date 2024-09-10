<!-- resources/views/intro.blade.php -->

@extends('dashboard')

@section('content')

<style>
    #skill {
        overflow: hidden;
        width: 100vw;
        max-width: 65rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin: 0 auto;

    }

    .skilltitle{
        font-size: 3rem;
        font-weight: 600;
        padding-top: 3rem;
        margin-bottom: 1.5rem;

    }
    .skillbar{
        margin: 1.5rem;
        width: 100vw;
        max-width: 80%;
        text-align: left;
    }

    .ui{
        display: flex;
        margin: 1rem;
        padding: 1.5rem 2rem;
        border-radius: 0.5rem;
        background: rgb(50, 50, 50);
    }

    .uiimg{
        object-fit: cover;
        height: 3rem;
        width: 3rem;
        margin-right: 2rem;
    }

    p.uitext{
        font-size: 1rem;
        font-weight: 200;
    }
    

</style>

<div>
    <section id="skill">
        <span class="skilltitle"> What I do?</span>
        <div class="skillbar">
            <div class="ui">
                <img src="{{ asset('web.png') }}" alt="web" class="uiimg">
                <div class="uitext">
                    <h2>Web Design</h2>
                    <p>Web Design</p>
                </div>
            </div>
            <!---->
            <div class="ui">
                <img src="{{ asset('wireframe.png') }}" alt="wireframe" class="uiimg">
                <div class="uitext">
                    <h2>Wireframe</h2>
                    <p>Wireframe</p>
                </div>
            </div>
            <!----->
            
        </div>
    </section>
</div>


@endsection
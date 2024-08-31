<!-- resources/views/dashboard.blade.php -->



@section('content')
<style>
    .navbar{
    height: 5rem;
    width: 100vw;
    max-width: 75rem;
    margin: 0 auto;
    padding: 1rem 2rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: sticky;
    top: 0;
    z-index: 3;
    }

    .menu {
    display: flex;
 
    }

    .menulist {
        display: inline-block;
        margin: 1rem;
        cursor: pointer;

    }

    .menulist:hover {
        color: orange;
        padding-bottom: 0.5rem;
        border-bottom: 3px solid orange;
        
    }

    .logo{
        object-fit: cover;
        height: 3rem;
        width: 4rem;
    }

    .contact{
        height: 1rem;
        width: 1rem;
        object-fit: cover;
        margin: 5px;
    }

    .menubtn{
        background: white;
        color: black;
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0 1rem;
        border-radius: 2rem;
        height: 3rem;
        width: 8rem;
     
    }
</style>
    <!-- Your page content here -->
     <nav class="navbar">
     <img src="{{ asset('logo3.png') }}" alt="Logo" class="logo">
     <div class="menu">
     <!--// resources/views/dashboard.blade.php-->
    <script src="{{ asset('js/scroll-link.js') }}"></script>
        <div class="menulist">Home</div>
        <div class="menulist">About</div>
        <div class="menulist">Porfolio</div>
        <div class="menulist">Client</div>
     </div>
     <button class="menubtn">
     <img class="contact" src="{{ asset('contactpic.png') }}" alt="Contact"> Contact me
     </button>
    </nav>
@endsection
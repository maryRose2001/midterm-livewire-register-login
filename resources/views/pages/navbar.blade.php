<nav class="navbar navbar-light bg-danger p-4 shadow ">
   

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-5 margin-center">
            <li class="nav-item">
                <a class="nav-link text-dark" href="/home">Home</a>
            </li>
            <li class="nav-item ms-5">
                <a class="nav-link text-dark" href="/playlist">Music Bar</a>
            </li>
           @if(auth()->check())
            <li class="nav-item ms-5">
                <a class="nav-link text-dark" href="/logout">Logout</a>
            </li>
            @else
            <li class="nav-item ms-5">
                <a class="nav-link text-dark" href="/register">Register</a>
            </li>
            <li class="nav-item ms-5">
                <a class="nav-link text-dark" href="/">Login</a>
            </li>
            @endif

    </div>

     <h1 class="navbar-brand ms-5 text-dark margin-right"
        style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: 30px;">
        Maryrose list of Music</h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>
<style>
body{
    background-image: url('https://routenote.com/blog/wp-content/uploads/2022/01/Top-10-most-followed-playlists-Amazon-Music-copy.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

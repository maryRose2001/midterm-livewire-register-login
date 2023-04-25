<nav class="navbar navbar-light bg-danger p-4 shadow ">
   

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-5 margin-center">
            <li class="nav-item">
                <a class="nav-link text-dark" href="/home">Home</a>
            </li>
            <li class="nav-item ms-5">
                <a class="nav-link text-dark" href="/playlist">Music Bar</a>
            </li>
           {{--  @if(auth()->check())

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
            @endif  --}}

    </div>
    

     <h1 class="navbar-brand ms-5 text-white margin-right"
        style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: 30px;">
        Maryrose list of Music</h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="btn-group">
    @if(!auth()->check())
  <button type="button" class="btn btn-danger">Click here to login/register</button>
  @else
  <button type="button" class="btn btn-danger"><img src="{{ Storage::url( auth()->user()->profile_img) }}"
                                    style="height: 60px; width: 60px; border-radius: 50%;" alt="{{  auth()->user()->profile_img }}"> &nbsp; <span class="text-white">{{auth()->user()->name}}</span></button>
    @endif
  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
  @if(auth()->check())
    <a class="dropdown-item" href="/logout">Logout</a>
    @else
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="/login">Login</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="/register">Register</a>
    @endif
  </div>
</div>
</nav>
<style>
body{
    background-image: url('https://cutewallpaper.org/21/bar-wallpaper/SpacebarArcade-Space-Themed-Wallpaper-Mural.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

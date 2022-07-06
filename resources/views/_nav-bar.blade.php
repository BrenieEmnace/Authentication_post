<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/dashboard')}}">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/posts/my-posts')}}">My Movie</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/posts/recent')}}">Recently</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="{{url('/users')}}">Users</a>
        </li>
        @if(auth()->guest())
        <li class="nav-item">
          <a class="nav-link" href="{{url('/login')}}">Login</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{url('/logout')}}">Logout</a>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>
<style>
    .navbar {
     background: #000000
 }

 .nav-item::after {
     content: '';
     display: block;
     width: 0px;
     height: 2px;
     background: #fec400;
     transition: 0.4s
 }

 .nav-item:hover::after {
     width: 100%
 }

 .navbar-dark .navbar-nav .active>.nav-link,
 .navbar-dark .navbar-nav .nav-link.active,
 .navbar-dark .navbar-nav .nav-link.show,
 .navbar-dark .navbar-nav .show>.nav-link,
 .navbar-dark .navbar-nav .nav-link:focus,
 .navbar-dark .navbar-nav .nav-link:hover {
     color: #fec400
 }
</style>
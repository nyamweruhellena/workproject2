<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">ESWI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/membership">Membership</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('posts') }}">Post</a> <!-- Using routing power of laravel blade to route to specific pages -->
          </li>
          
        </ul>
        <form class="d-flex ms-auto w-25">
          <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search" onkeyup="showResult(this.value)">
        </form>
      </div>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="d-flex justify-content-end  w-100">
      <div id="livesearch" class="w-25 float-right"></div>
    </div>
  </div>

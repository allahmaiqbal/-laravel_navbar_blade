<nav class="navbar navbar-expand-lg navbar-info bg-info">
    <div class="container-fluid">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="{{ URL::to('/') }}">Home</a>
          <a class="nav-link" href="{{ URL::to('/blogpage') }}">Blog</a>
          <a class="nav-link" href="{{ URL::to('/contactpage') }}">Contact</a>
          <a class="nav-link" href="{{ URL::to('/protfoliopage') }}">Protfolio</a>
          <a class="nav-link" href="{{ URL::to('/servicepage') }}">Service</a>
          
        </div>
      </div>
    </div>
  </nav>
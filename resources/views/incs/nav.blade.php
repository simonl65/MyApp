<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
  <a class="navbar-brand" href="/">{{config('app.name')}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link @if($title === 'Home') active @endif" href="/">Home @if($title === 'Home') <span class="sr-only">(current)</span> @endif</a>
      <a class="nav-item nav-link @if($title === 'About') active @endif" href="/about">About Us @if($title === 'About') <span class="sr-only">(current)</span> @endif</a>
      <a class="nav-item nav-link @if($title === 'Services') active @endif" href="/services">Services @if($title === 'Services') <span class="sr-only">(current)</span> @endif</a>
    </div>
  </div>
</nav>

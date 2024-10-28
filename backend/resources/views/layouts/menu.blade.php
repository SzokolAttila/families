<nav class="navbar navbar-dark navbar-expand-lg bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route("home")}}">Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link @if(request()->routeIs("home")) {{'active'}} @endif" @if(request()->routeIs("home")) {{'aria-current="page"'}} @endif href="{{route("home")}}">Csaladok</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(request()->routeIs("family.table")) {{'active'}} @endif"  @if(request()->routeIs("family.table")) {{'aria-current="page"'}} @endif href="{{route("family.table")}}">Karakterek</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
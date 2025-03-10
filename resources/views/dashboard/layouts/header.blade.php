<header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="/">Valez Blog</a>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    </ul>
  </div>
<!-- 
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand">Valez Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">My Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard/posts">My Posts</a>
                </li>
            </ul>

            <ul class="navbar-nav">
            <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="nav-link px-3 bg-dark border-0 ms-auto">Logout  <i class="bi bi-box-arrow-right"></i></button>
                  </form>
                </li>
            </ul>
      </div>
    </div>
  </nav>           
-->
  <div class="navbar-nav ms-auto">
    <div class="nav-item text nowrap">
      <form action="/logout" method="post">
       @csrf
        <button type="submit" class="nav-link px-3 bg-dark border-0"> Logout <i class="bi bi-box-arrow-right"></i></button>
      </form>
    </div>
  </div>  

</header>
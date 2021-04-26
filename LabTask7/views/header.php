<header>
    <div class="pb-5">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <div class="navbar-nav">
                    <span class="nav-link" style="color : white;">Logged in as</span>
                    <a class="nav-link" aria-current="page" href="view_profile.php"><?php echo $_SESSION['name']; ?></a>
                    <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
                </div>
            </div>
          </div>
        </nav>
    </div>
</header>

<main class="row container">
        <section class="col-md-4">

            <div class="p-3 bg-white" style="width: 280px;">

              <ul class="list-unstyled ps-0">

                <li class="mb-1">
                  <a href="admin.php" class="btn align-items-center rounded">Dashboard</a>
                </li>

                <li class="border-top my-3"></li>

               

                <li class="border-top my-3"></li>

                <li class="mb-1">
                  <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#customer-collapse" aria-expanded="false">
                    Events Booking
                  </button>
                  <div class="collapse" id="customer-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                      <li><a href="add_customer.php" class="link-dark rounded">Events</a></li>
                      
                    </ul>
                  </div>
                </li>

                <li class="border-top my-3"></li>

                <li class="mb-1">
                  <a href="view_profile.php" class="btn align-items-center rounded ">Profile</a>
                </li>

                <li class="border-top my-3"></li>

                <li class="mb-1">
                  <a href="logout.php" class="btn align-items-center rounded ">Logout</a>
                </li>

              </ul>

            </div>

        </section>
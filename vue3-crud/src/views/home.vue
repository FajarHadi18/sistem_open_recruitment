<script setup>

</script>

<template>
  <!-- Start Intro -->
  <section id="intro">
    <div class="mt-5 pt-5 container text-center">
      <div class="row mt-5 pt-3"></div>
      <div class="row justify-content-center">
        <div class="col">
          <img src="../../assets/1.1.jpg" class="rounded" width="500" alt="">
        </div>
        <div class="col my-auto">
          <h1 class="display-4">OPEN RECRUITMENT</h1>
          <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Culpa ipsa enim minima quasi blanditiis eum deserunt eaque repellat modi aut?
          </p>
          <a class="btn shadow-sm" style="background-color: #FFC26F; color: black;" href="#kepanitiaan">Daftar
            Sekarang</a>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#c38154" fill-opacity="1"
        d="M0,96L40,106.7C80,117,160,139,240,160C320,181,400,203,480,192C560,181,640,139,720,144C800,149,880,203,960,234.7C1040,267,1120,277,1200,250.7C1280,224,1360,160,1400,128L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- End Intro -->

  <!-- Start Kepanitiaan -->
  <section id="kepanitiaan" style="background-color: #c38154;">
    <div class="container">
      <div class="row text-center text-light mb-3">
        <div class="col">
          <h2>Yok gabung dan ikuti <b>kepanitiaan</b> ITSA !</h2>
        </div>
      </div>
      <div id="carouselExample" class="carousel slide carousel-dark ">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="cards-wrapper justify-content-center" style="display: flex">
              <div class="card h-100 m-3 p-2 rounded-5" style="width: calc(100%/3);">
                <div class="card-body">
                  <h5 class="card-title">ITSA Volly</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <div class="d-md-flex justify-content-md-end">
                    <router-link :to="{ name: 'posts.detail' }" class="btn text-dark me-md-2"
                      style="background-color: #FFC26F;">Daftar</router-link>
                  </div>
                </div>
              </div>
              <div class="card h-100 m-3 p-2 rounded-5" style="width: calc(100%/3);">
                <div class="card-body">
                  <h5 class="card-title">ITSA Berbagi</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <div class="d-md-flex justify-content-md-end">
                    <a href="#" class="btn text-dark me-md-2" style="background-color: #FFC26F;">Daftar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="cards-wrapper justify-content-center" style="display: flex">
              <div class="card h-100 m-3 p-2 rounded-5" style="width: calc(100%/3);">
                <div class="card-body">
                  <h5 class="card-title">ITSA Volly</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <div class="d-md-flex justify-content-md-end">
                    <a href="#" class="btn text-dark me-md-2" style="background-color: #FFC26F;">Daftar</a>
                  </div>
                </div>
              </div>
              <div class="card h-100 m-3 p-2 rounded-5" style="width: calc(100%/3);">
                <div class="card-body">
                  <h5 class="card-title">ITSA Berbagi</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <div class="d-md-flex justify-content-md-end">
                    <a href="#" class="btn text-dark me-md-2" style="background-color: #FFC26F;">Daftar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="cards-wrapper justify-content-center" style="display: flex">
              <div class="card h-100 m-3 p-2 rounded-5" style="width: calc(100%/3);">
                <div class="card-body">
                  <h5 class="card-title">ITSA Volly</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <div class="d-md-flex justify-content-md-end">
                    <a href="#" class="btn text-dark me-md-2" style="background-color: #FFC26F;">Daftar</a>
                  </div>
                </div>
              </div>
              <div class="card h-100 m-3 p-2 rounded-5" style="width: calc(100%/3);">
                <div class="card-body">
                  <h5 class="card-title">ITSA Berbagi</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <div class="d-md-flex justify-content-md-end">
                    <a href="#" class="btn text-dark me-md-2" style="background-color: #FFC26F;">Daftar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1"
        d="M0,96L48,112C96,128,192,160,288,149.3C384,139,480,85,576,96C672,107,768,181,864,192C960,203,1056,149,1152,133.3C1248,117,1344,139,1392,149.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- End Kepanitiaan -->
</template>
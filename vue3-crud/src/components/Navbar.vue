<template>
  <nav class="navbar navbar-expand-lg bg-white fixed-top shadow-sm" id="navbar">
    <div class="container">
      <a class="navbar-brand fw-bold" style="color: #C38154;" href="/"><img src="../../assets/Logo-ITSA.png"
          width="40" class=""> ITSA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <router-link :to="{ name: 'home' }" class="nav-link active" style="color: #C38154;" aria-current="page"
              href="#intro">
              Beranda</router-link>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: #C38154;" href="#kepanitiaan">Kepanitiaan</a>
          </li>
          <li class="nav-item">
            <router-link :to="{name: 'posts.create'}" class="nav-link" style="color: #C38154;" href="#">Masukan</router-link>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>
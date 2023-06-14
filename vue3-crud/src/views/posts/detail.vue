<script setup>


</script>
<template>
    <section style="background-color: #c38154">
        <div class="container mt-5 pt-5 text-light">
            <div class="row">
                <div class="col text-center">
                    <h1 id="namaAcara" class="mb-4">IOT (Itsa Organization Training)</h1>
                    <p>
                        IOT merupakan kegiatan dari Departemen Advokesma dengan tujuan memperkenalkan dasar-dasar organisasi
                        ITSA, Teknik Persidangan dan Training Leadership yang ditujukan kepada generasi baru di ITSA sebagai
                        agent of change.
                        Dengan ini Pengurus ITSA Periode 2022/2023 memberitahukan bahwa akan diselenggarakan perekrutan
                        anggota panitia "IOT 2023", dan seluruh anggota ITSA Generasi 19, 20 dan 21 dapat mengikuti
                        kepanitian ini.

                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col align-self-center">
                    <h5>Divisi yang dibutuhkan</h5>
                    <ul>
                        <li>Ketua Pelaksana</li>
                        <li>Koordinator Lapangan</li>
                        <li>Sekretaris</li>
                        <li>Bendahara</li>
                        <li>Divisi Acara</li>
                        <li>Divisi Perlengkapan</li>
                        <li>Divisi Humas</li>
                        <li>Divisi Konsumsi</li>
                        <li>Divisi Dokumentasi</li>
                    </ul>
                </div>
                <div class="col-9 rounded-5 text-dark shadow p-4" style="background-color: #ffc26f">
                    <h3>Syarat Pendaftaran</h3>
                    <p>Bacalah dengan teliti</p>
                    <ol class="lh-lg">
                        <li>Membuat Curriculum Vitae yang berisi :
                            <ul>
                                <li>Divisi yang diinginkan dan Divisi cadangan (Jika tidak terpilih divisi yang diinginkan)
                                </li>
                                <li>Screenshot TAK</li>
                                <li>Alasan ingin bergabung dalam Panitia</li>
                            </ul>
                        </li>
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos pariatur dolorem ullam
                            explicabo eligendi nisi odio culpa ab alias sapiente quisquam cupiditate reiciendis accusantium,
                            inventore illum tempora aperiam sunt molestiae.</li>
                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum, cum id amet fugiat pariatur
                            error iusto deleniti necessitatibus doloremque quibusdam molestiae veniam architecto aliquid
                            recusandae. Unde fugiat facere sed pariatur.</li>
                    </ol>
                </div>
            </div>
            <router-link :to="{name: 'posts.create'}" class="btn btn-success col-2 shadow fixed-bottom mx-auto mb-3 rounded-5">
                Daftar
            </router-link>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
</template>

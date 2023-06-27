<script setup>
//import ref
import { ref, onMounted } from "vue";

//import router
import { useRoute } from 'vue-router';

//import api
import api from "../../api";


//init route
const route = useRoute();

//define state
const nama = ref("");
const deskripsi = ref("");
const divisi = ref("");
const syarat = ref("");

//onMounted
onMounted(async () => {

    //fetch detail data post by ID
    await api.get(`/api/kepanitiaans/${route.params.id}`)
        .then(response => {

            //set response data to state
            nama.value = response.data.data.nama
            deskripsi.value = response.data.data.deskripsi
            divisi.value = response.data.data.divisi
            syarat.value = response.data.data.syarat
        });
})
</script>
<template>
    <section style="background-color: #c38154">
        <div class="container mt-5 pt-5 text-light">
            <div class="row">
                <div class="col text-center">
                    <h1 id="namaAcara" class="mb-4">{{ nama }}</h1>
                    <p>
                        {{ deskripsi }}
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col align-self-center">
                    <h5>Divisi yang dibutuhkan</h5>
                    <ul>
                        <li>{{ divisi }}</li>
                    </ul>
                </div>
                <div class="col-9 rounded-5 text-dark shadow p-4" style="background-color: #ffc26f">
                    <h3>Syarat Pendaftaran</h3>
                    <p>Bacalah dengan teliti</p>
                    <ol class="lh-lg">
                        <li>{{ syarat }}
                        </li>
                    </ol>
                </div>
            </div>
            <router-link :to="{ name: 'posts.create' }"
                class="btn btn-success col-2 shadow fixed-bottom mx-auto mb-3 rounded-5">
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

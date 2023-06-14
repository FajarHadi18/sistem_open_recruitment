<script setup>
//import ref
import { ref } from "vue";

//import router
import { useRouter } from 'vue-router';

//import api
import api from "../../api";

//init router
const router = useRouter();

//define state
const image = ref("");
const title = ref("");
const content = ref("");
const errors = ref([]);

//method for handle file changes
const handleFileChange = (e) => {
    //assign file to state
    image.value = e.target.files[0];
};

//method "storePost"
const storePost = async () => {

    //init formData
    let formData = new FormData();

    //assign state value to formData
    formData.append("image", image.value);
    formData.append("title", title.value);
    formData.append("content", content.value);

    //store data with API
    await api.post('/api/posts', formData)
        .then(() => {
            //redirect
            router.push({ path: "/posts" });
        })
        .catch((error) => {
            //assign response error data to state "errors"
            errors.value = error.response.data;
        });
};
</script>

<template>
    <section id="daftar" style="background-color: #C38154;">
        <div class="container mt-5 pt-5" style="width: 60%;">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 rounded-5 shadow p-4">
                        <h3 class="card-title text-center">Form Pendaftaran</h3>
                        <div class="card-body">
                        <form @submit.prevent="storePost()">
                            <div class="mb-3">
                                    <label class="form-label fw-bold">NIM</label>
                                    <input type="number" class="form-control" v-model="NIM" placeholder="NIM">
                                    <!-- <div v-if="errors.NIM" class="alert alert-danger mt-2">
                                                <span>{{ errors.NIM[0] }}</span>
                                            </div> -->
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Nama</label>
                                    <input type="text" class="form-control" v-model="nama" placeholder="Nama Lengkap">
                                    <!-- <div v-if="errors.nama" class="alert alert-danger mt-2">
                                                <span>{{ errors.nama[0] }}</span>
                                            </div> -->
                                </div>
                                <label class="form-label fw-bold">Generasi</label>
                                <div class="mb-3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="generasi" id="G22">
                                        <label class="form-check-label" for="G22">
                                            G22
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="generasi" id="G21">
                                        <label class="form-check-label" for="G21">
                                            G21
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="generasi" id="G20">
                                        <label class="form-check-label" for="G20">
                                            G20
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="generasi" id="G19">
                                        <label class="form-check-label" for="G19">
                                            G19
                                        </label>
                                    </div>
                                    <!-- <div v-if="errors.generasi" class="alert alert-danger mt-2">
                                                <span>{{ errors.generasi[0] }}</span>
                                            </div> -->
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Kelas</label>
                                    <input type="text" class="form-control" v-model="kelas" placeholder="Kelas">
                                    <!-- <div v-if="errors.kelas" class="alert alert-danger mt-2">
                                            <span>{{ errors.kelas[0] }}</span>
                                        </div> -->
                                </div>
                                <label class="form-label fw-bold">Divisi Kepanitiaan</label>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="divisi" id="KetuaPelaksana">
                                        <label class="form-check-label" for="KetuaPelaksana">
                                            Ketua Pelaksana
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="divisi" id="Sekretaris">
                                        <label class="form-check-label" for="Sekretaris">
                                            Sekretaris
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="divisi" id="Bendahara">
                                        <label class="form-check-label" for="Bendahara">
                                            Bendahara
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="divisi" id="Acara">
                                        <label class="form-check-label" for="Acara">
                                            Divisi Acara
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="divisi" id="Perlengkapan">
                                        <label class="form-check-label" for="Perlengkapan">
                                            Divisi Perlengkapan
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="divisi" id="Dokumentasi">
                                        <label class="form-check-label" for="Dokumentasi">
                                            Divisi Dokumentasi
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="divisi" id="Humas">
                                        <label class="form-check-label" for="Humas">
                                            Divisi Humas
                                        </label>
                                    </div>

                                    <!-- <div v-if="errors.generasi" class="alert alert-danger mt-2">
                                        <span>{{ errors.generasi[0] }}</span>
                                    </div> -->
                                </div>
                                <label class="form-label fw-bold">Divisi Cadangan</label>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="divisiCadangan" id="KetuaPelaksanaCad">
                                        <label class="form-check-label" for="KetuaPelaksanaCad">
                                        Ketua Pelaksana
                                    </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="divisiCadangan" id="SekretarisCad">
                                        <label class="form-check-label" for="SekretarisCad">
                                            Sekretaris
                                    </label>
                                </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="divisiCadangan" id="BendaharaCad">
                                        <label class="form-check-label" for="BendaharaCad">
                                            Bendahara
                                        </label>
                                </div>
                                <div class="form-check">
                                        <input class="form-check-input" type="radio" name="divisiCadangan" id="AcaraCad">
                                        <label class="form-check-label" for="AcaraCad">
                                            Divisi Acara
                                        </label>
                                    </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="divisiCadangan" id="PerlengkapanCad">
                                        <label class="form-check-label" for="PerlengkapanCad">
                                            Divisi Perlengkapan
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="divisiCadangan" id="DokumentasiCad">
                                        <label class="form-check-label" for="DokumentasiCad">
                                            Divisi Dokumentasi
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="divisiCadangan" id="HumasCad">
                                        <label class="form-check-label" for="HumasCad">
                                            Divisi Humas
                                        </label>
                                    </div>

                                    <!-- <div v-if="errors.generasi" class="alert alert-danger mt-2">
                                                <span>{{ errors.generasi[0] }}</span>
                                            </div> -->
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Alasan Bergabung</label>
                                    <textarea class="form-control" v-model="content" rows="5"
                                        placeholder="Alasan Bergabung"></textarea>
                                    <!-- <div v-if="errors.alasan" class="alert alert-danger mt-2">
                                            <span>{{ errors.alasan[0] }}</span>
                                        </div> -->
                                </div>                    
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Screenshot TAK</label>
                                    <input type="file" class="form-control" @change="handleFileChange($event)">
                                    <!-- <div v-if="errors.tak" class="alert alert-danger mt-2">
                                            <span>{{ errors.tak[0] }}</span>
                                        </div> -->
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Curriculum Vitae</label>
                                    <input type="file" class="form-control" @change="handleFileChange($event)">
                                    <!-- <div v-if="errors.cv" class="alert alert-danger mt-2">
                                            <span>{{ errors.tacvk[0] }}</span>
                                        </div> -->
                                </div>
                                <button type="submit"
                                    class="btn btn-md btn-primary rounded-5 shadow border-0 ">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
</template>
<template>
    <div class="main-container-pesan">
        <div class="find-pesan">
            <div class="header">
                <router-link to="/">
                    <i class="fas fa-long-arrow-alt-left"></i>
                    Kembali ke Halaman Utama
                </router-link>
            </div>
            <div class="sebelum-sambat-container">
                <h1 class="dislpay">Klaim Nama Anonimku</h1>
                <hr/>
                <div class="buat-nama-input">
                    <div class="pesan-category-input">
                        <p class="pesan-category-label">Aku adalah</p>
                        <select name="kategori" id="" class="custom-select" aria-placeholder="Pilih sebuah kategori" v-model="nama.subjek">
                            <option value="" disabled selected>Pilih sebuah subjek</option>
                            <option value="kolang-kaling">Kolang-Kaling</option>
                        </select>
                    </div>
                    <div class="pesan-category-input">
                        <p class="pesan-category-label">yang sedang</p>
                        <select name="kategori" id="" class="custom-select" aria-placeholder="Pilih sebuah kategori" v-model="nama.predikat" >
                            <option value="" disabled selected>Beri subjek sebuah predikat</option>
                            <option value="membaca buku">membaca buku</option>
                        </select>
                    </div>
                    <div class="pesan-category-input">
                        <p class="pesan-category-label">keterangan</p>
                        <select name="kategori" id="" class="custom-select" aria-placeholder="Pilih sebuah kategori" v-model="nama.keterangan">
                            <option value="" disabled selected>beri pemanis untuk nama anonimmu</option>
                            <option value="di pagi hari">di pagi hari</option>
                        </select>
                    </div>
                </div>
                <hr/>
                <div class="result-nama">
                    <small>Nama anonimku adalah: </small><br>
                    <subjek>{{nama.subjek}}</subjek> <predikat>{{nama.predikat}}</predikat> <keterangan>{{nama.keterangan}}</keterangan>
                </div>
                <div class="action">
                    <button class="btn-green">Klaim Nama Anonimku</button>
                </div>
            </div>
        </div>
        <div class="credit d-flex justify-content-center align-items-center">
                <p>Sambat by <a href="">eQuilibrium</a> | from Covid-19 quarantine depression</p>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                 nama: {
                     subjek: '',
                     predikat: '',
                     keterangan: '',
                 }
            }
        },
        methods: {
             
        },
        mounted() { 

        }
    }
</script>

<style>
</style>

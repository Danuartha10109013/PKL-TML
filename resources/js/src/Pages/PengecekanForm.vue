<template>
    <form @submit.prevent="submitForm">
        <div>
            <label for="awal_muat">Awal Muat</label>
            <input type="time" v-model="form.awal_muat" required />
        </div>
        <div>
            <label for="kota_negara">Kota Negara</label>
            <input type="text" v-model="form.kota_negara" required />
        </div>
        <div>
            <label for="lantai">Lantai</label>
            <input type="text" v-model="form.lantai" required />
        </div>
        <div>
            <label for="dinding">Dinding</label>
            <input type="text" v-model="form.dinding" required />
        </div>
        <div>
            <label for="pengunci_kontainer">Pengunci Kontainer</label>
            <input type="text" v-model="form.pengunci_kontainer" required />
        </div>
        <div>
            <label for="sapu">Sapu</label>
            <input type="text" v-model="form.sapu" required />
        </div>
        <div>
            <label for="vacum">Vacum</label>
            <input type="text" v-model="form.vacum" required />
        </div>
        <div>
            <label for="disemprot">Disemprot</label>
            <input type="text" v-model="form.disemprot" required />
        </div>
        <div>
            <label for="choke">Choke</label>
            <input type="text" v-model="form.choke" required />
        </div>
        <div>
            <label for="stopper">Stopper</label>
            <input type="text" v-model="form.stopper" required />
        </div>
        <div>
            <label for="sling">Sling</label>
            <input type="text" v-model="form.sling" required />
        </div>
        <div>
            <label for="silica_gel">Silica Gel</label>
            <input type="text" v-model="form.silica_gel" required />
        </div>
        <div>
            <label for="fumigasi">Fumigasi</label>
            <input type="text" v-model="form.fumigasi" required />
        </div>
        <div>
            <label for="selesai_muat">Selesai Muat</label>
            <input type="text" v-model="form.selesai_muat" required />
        </div>
        <div>
            <label for="cuaca">Cuaca</label>
            <input type="text" v-model="form.cuaca" required />
        </div>
        <div>
            <label for="kondisi_ban">Kondisi Ban</label>
            <input type="text" v-model="form.kondisi_ban" required />
        </div>
        <div>
            <label for="kondisi_lantai">Kondisi Lantai</label>
            <input type="text" v-model="form.kondisi_lantai" required />
        </div>
        <div>
            <label for="rantai_webbing">Rantai Webbing</label>
            <input type="text" v-model="form.rantai_webbing" required />
        </div>
        <div>
            <label for="tonase">Tonase</label>
            <input type="text" v-model="form.tonase" required />
        </div>
        <div>
            <label for="terpal">Terpal</label>
            <input type="text" v-model="form.terpal" required />
        </div>
        <div>
            <label for="stuffing">Stuffing</label>
            <input type="text" v-model="form.stuffing" required />
        </div>
        <button type="submit">Simpan</button>
    </form>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            form: {
                awal_muat: "",
                kota_negara: "",
                lantai: "",
                dinding: "",
                pengunci_kontainer: "",
                sapu: "",
                vacum: "",
                disemprot: "",
                choke: "",
                stopper: "",
                sling: "",
                silica_gel: "",
                fumigasi: "",
                selesai_muat: "",
                cuaca: "",
                kondisi_ban: "",
                kondisi_lantai: "",
                rantai_webbing: "",
                tonase: "",
                terpal: "",
                stuffing: "",
            },
        };
    },
    methods: {
        submitForm() {
            axios
                .post("/pengecekan", this.form)
                .then((response) => {
                    // lakukan sesuatu setelah data berhasil disimpan, misalnya menampilkan pesan sukses
                    alert("Data berhasil disimpan");
                })
                .catch((error) => {
                    // tangani error, misalnya menampilkan pesan error
                    alert("Terjadi kesalahan saat menyimpan data");
                });
        },
    },
};
</script>

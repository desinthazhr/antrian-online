// landing page
const kolom = document.querySelectorAll(".col-lg");
const tutorial = document.querySelector(".tutorial");
const kol = document.querySelectorAll(".col");
// console.log(kolom.length);
for (let i = 0; i < kolom.length; i++) {
    kolom[i].addEventListener("mouseover", function (e) {
        kolom[i].classList.add("animasi");

        setTimeout(function () {
            kolom[i].addEventListener(
                "mouseout",
                function (e) {
                    kolom[i].classList.remove("animasi");
                },
                500
            );
        });
    });
}

const daftarAntrian = document.querySelector(".daftar-antrian");
const nomorAntrian = document.querySelector(".nomor-antrian");

let price = 0;

function tambahAntrian() {
    const inputNama = document.getElementById("inputNama").value;
    const inputAlamat = document.getElementById("inputAlamat").value;
    const inputNoHp = document.getElementById("inputNoHp").value;
    const inputMobil = document.getElementById("inputMobil").value;
    const inputUkuran = document.getElementById("ukuran");
    const textUkuran = inputUkuran.options[inputUkuran.selectedIndex].text;
    const inputNoPolisi = document.getElementById("inputNoPolisi").value;
    const inputLayanan = document.getElementById("layanan").value;
    const inputAntrian = document.getElementById("antrian").value;
    let estimasiHarga = document.getElementById("harga");
    estimasiHarga = price;
    console.log(estimasiHarga);

    const formAntrian = document.getElementById("form-antrian");

    // even untuk apabila tombol antrian ditekan maka lansgung muncul tampilan nomor antrian
    formAntrian.addEventListener("click", function (e) {
        daftarAntrian.style.display = "none";
        nomorAntrian.style.display = "block";
        isiAntrian(
            inputNama,
            inputAlamat,
            inputNoHp,
            inputMobil,
            // inputUkuran,
            textUkuran,
            inputNoPolisi,
            inputLayanan,
            inputAntrian,
            estimasiHarga
        );
    });
}

//fungsi untuk mengambil isi data antrian
function isiAntrian(
    inputNama,
    inputAlamat,
    inputNoHp,
    inputMobil,
    // inputUkuran,
    textUkuran,
    inputNoPolisi,
    inputLayanan,
    inputAntrian,
    estimasiHarga
) {
    const nama = document.getElementById("nama");
    nama.innerText = inputNama;

    const alamat = document.getElementById("alamat");
    alamat.innerText = inputAlamat;

    const noHp = document.getElementById("noHp");
    noHp.innerText = inputNoHp;

    const mobil = document.getElementById("mobil");
    mobil.innerText = inputMobil;

    const ukuran = document.getElementById("ukuranMobil");
    ukuran.innerText = textUkuran;

    const noPolisi = document.getElementById("noPolisi");
    noPolisi.innerText = inputNoPolisi;

    const layanan = document.getElementById("layanan-antrian");
    layanan.innerText = inputLayanan;

    const antrian = document.getElementById("antrian-cust");
    antrian.innerText = inputAntrian;

    const harga = document.getElementById("estimasi-harga");
    harga.innerText = estimasiHarga;
}

var backToTop = document.querySelector(".back-to-top");

window.addEventListener("scroll", () => {
    if (this.scrollY >= 400) {
        backToTop.classList.add("show");

        backToTop.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
            });
        });
    } else {
        backToTop.classList.remove("show");
    }
});

function hitungEstimasi() {
    let harga = document.getElementById("harga");
    const ukuran = document.getElementById("ukuran");
    const layanan = document.getElementById("layanan");
    const antrian = document.getElementById("antrian");

    const cReguler = [45000, 45000, 50000, 60000];
    const cPancung = [35000, 35000, 40000, 45000];
    const cDeluxe = [125000, 135000, 150000, 180000];
    const cExpress = [75000, 85000, 90000, 100000];
    const aExpress = [30000, 40000];

    // console.log(ukuran.value);
    // console.log(layanan.value);
    // console.log(antrian.value);
    // console.log(aExpress);

    if (layanan.value == "Cuci Reguler") {
        price = cReguler[ukuran.value];
        // console.log(price);
        if (antrian.value == "Express" && ukuran.value == "S") {
            price += aExpress[0];
            // console.log(harga);
        } else if (antrian.value == "Express") {
            price += aExpress[1];
            // console.log(harga);
        }
    } else if (layanan.value == "Cuci Non-Reguler (Pancung)") {
        price = cPancung[ukuran.value];
        // console.log(price);
        if (antrian.value == "Express" && ukuran.value == "S") {
            price += aExpress[0];
            // console.log(harga);
        } else if (antrian.value == "Express") {
            price += aExpress[1];
            // console.log(harga);
        }
    } else if (layanan.value == "Cuci Deluxe") {
        price = cDeluxe[ukuran.value];
        // console.log(harga);
        if (antrian.value == "Express" && ukuran.value == "S") {
            price += aExpress[0];
            // console.log(harga);
        } else if (antrian.value == "Express") {
            price += aExpress[1];
            // console.log(harga);
        }
    } else if (layanan.value == "Cuci Express") {
        price = cExpress[ukuran.value];
        // console.log(harga);
    }

    harga.value = price;
}

// function menampilkan daftar antrian
// function boxAntrian(
//   idAntrian,
//   inputNomor,
//   inputPrediksiWaktu,
//   inputNoPolisi,
//   inputLayanan,
//   inputAntrian,
//   inputUkuran
// ) {
//   const p = document.createElement("p");
//   p.classList.add("nomor");
//   p.innerText = inputNomor;
//   const p2 = document.createElement("p");
//   p2.innerText = inputPrediksiWaktu;
//   const p3 = document.createElement("p");
//   p3.innerText = inputNoPolisi;
//   const p4 = document.createElement("p");
//   p4.innerText = inputLayanan;
//   const p5 = document.createElement("p");
//   p5.innerText = inputAntrian;
//   const p6 = document.createElement("p");
//   p6.innerText = inputUkuran;

//   const textContainer = document.createElement("div");
//   textContainer.classList.add("box-antrian");
//   textContainer.append(p, p2, p3, p4, p5, p6);
//   console.log(textContainer);
// }

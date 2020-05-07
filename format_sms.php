<?php
require ('header.php');
?>
    <div class="container">
        <h1 class="display-3 text-center my-5">Format SMS</h1>
        <table class="table table-striped table-hover table-inverse table-responsive">
            <tbody>
                <tr>
                    <td class="">Info Booking</td>
                    <td scope="row">
                        <p id="1">BMW Travel - [Rute] [Tanggal] [Jam] [Maskapai] . Status: BOOKED a/n:[Nama] dengan batas bayar [Tanggal] [Jam]. Pembayaran via transfer di No. Rek a/n: HJ. NURFADILAH BNI:0504-277-266 BRI : 025-901-036-139-503.Total:[Total]. Mohon konfirmasi setelah transfer. Terima kasih</p>
                    </td>
                    <td>
                        <button class="btn btn-secondary" onclick="copyToClipboard('#1')"
                            onmouseout="outFunc()">Copy</button>
                    </td>
                </tr>
                <tr>
                    <td>Info Harga</td>
                    <td scope="row">
                        <p id="2">[Rute] [Tanggal] harga terendah saat ini [Harga] Penerbangan pukul [Waktu] [Maskapai].Silahkan info nama lengkap sesuai KTP untuk reservasi</p>
                    </td>
                    <td>
                        <button class="btn btn-secondary" onclick="copyToClipboard('#2')"
                            onmouseout="outFunc()">Copy</button>
                    </td>
                </tr>
                <tr>
                    <td>No.Rekening</td>
                    <td scope="row">
                        <p id="3">BMW Travel - Pembayaran via transfer di No. Rek a/n: HJ. NURFADILAH BNI : 0504-277-266 BRI : 025-901-036-139-503. Total [Total] Mohon konfirmasi setelah transfer. Terima kasih</p>
                    </td>
                    <td>
                        <button class="btn btn-secondary" onclick="copyToClipboard('#3')"
                            onmouseout="outFunc()">Copy</button>
                    </td>
                </tr>
                <tr>
                    <td rowspan="2" class="align-middle">Kode Booking</td>
                    <td scope="row">
                        <p id="4">BMW Travel - [Maskapai] Air Ref. Code : [Kode Booking] Rute[Rute][Hari/Tanggal] [Jam] [Flight No] a/n: [Nama] Seat No.: Gate/Terminal: Bagasi/pax:0Kg.Silahkan tunjukkan kode booking ini pada petugas, 2 jam sebelum jam terbang.Selamat Jalan.</p>
                    <td>
                        <button class="btn btn-secondary" onclick="copyToClipboard('#4')"
                            onmouseout="outFunc()">Copy</button>
                    </td>
                <tr>
                    <td>
                        <p id="5">BMW Travel - Detail ticket reservation airline with booking code FOOFBT. Lion Air JT798 Jakarta (CGK) - Ujung Pandang (UPG) departure 01-Jan-19 21:40 LT arrival 02-Jan-19 01:00 LT. Passenger Detail :1. MR. BASMIN BASMIN"</p>
                    </td>
                    <td>
                        <button class="btn btn-secondary" onclick="copyToClipboard('#5')"
                            onmouseout="outFunc()">Copy</button>
                    </td>
                </tr>
                </td>
                </tr>
                <tr>
                    <td>Flight Replacement</td>
                    <td scope="row">
                        <p id="5">Kepada Yth. Calon Penumpang Garuda Airlines. Sehubungan dgn kendala operasional,
                            jadwal penerbangan Makassar menuju Jogjakarta mengalami perubahan yg semula berangkat di tgl 04/03/2019 pkl 06.00 menjadi tgl 03/03/2019 pkl 06.00. Mohon maaf atas ketidaknyamanannya. Demikian terima kasih. Info lebih lanjut silakan hubungi 0804 177 8899</p>
                    </td>
                    <td>
                        <button class="btn btn-secondary" onclick="copyToClipboard('#5')"
                            onmouseout="outFunc()">Copy</button>
                    </td>
                </tr>
                <tr>
                    <td>Dana Refund</td>
                    <td scope="row">
                        <p id="6">Selamat Siang.Terkait pembatalan (refund) Air Asia rute KualaLumpur Makassar 03
                            April atas nama penumpang : Mr. TOLAI SUNUSI, saat ini dana sudah dicairkan senilai
                            Rp.759.900. Dana dapat diterima tunai di kantor atau melalui transfer via BNI atau BRI.
                            Untuk pengiriman dana via transfer, silahkan mengisi form berikut:<br>Nomor
                            Rekening:<br>Nama pemilik rekening:<br>Nama Bank :<br>Terima kasih.</p>
                    </td>
                    <td>
                        <button class="btn btn-secondary" onclick="copyToClipboard('#6')"
                            onmouseout="outFunc()">Copy</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        function copyToClipboard(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            alert("Copied the text");
            $temp.remove();

        }
        function outFunc() {
            var tooltip = document.getElementById("myTooltip");
            tooltip.innerHTML = "Copy to clipboard";
        }
    </script>
    <?php
    require ('footer.php');
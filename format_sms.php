<?php
// require ('header.php');

?>
    <div class="container">
        <h1 class="display-3 text-center my-5">Format SMS</h1>
    <form action="">
        <div class="pilihan-fungsi">
        <input type="radio" name="fungsi" class="kodeBooking"><label for="">Kode Booking</label>
        <input type="radio" name="fungsi" class="perubahanJadwal"><label for="">Perubahan Jadwal
            Terbang</label>
        </div>

        <div class="input-utama">
            <select name="" id="maskapai">
                <option value="Lion Air">Lion Air</option>
                <option value="Batik Air">Batik Air</option>
                <input type="text" placeholder="Nama Penumpang" class="namaPenumpang">
            </select>
            <select name="" id="dari">
                <option value="Makassar">Makassar</option>
                <option value="Jakarta">Jakarta</option>
            </select>
            <select name="" id="ke">
                <option value="Makassar">Makassar</option>
                <option value="Jakarta">Jakarta</option>
            </select>
            <input type="date" name="" id="tanggal">
            <input type="time" name="" id="jam">
        </div>

        <h2></h2>

        <section id="perubahanJadwal">
            <label for="tanggal_baru">Masukkan Tanggal Baru</label>
            <input type="date" name="" id="tanggal_baru">

            <label for="waktu_baru">Masukkan Jam Baru</label>
            <input type="time" name="" id="waktu_baru">

            <input type="button" value="Generate">
        </section>

        <section id="kodeBooking">
            <input type="text" placeholder="Kode Booking" class="kode">
            <input type="text" name="" id="flight" placeholder="Flight No">
            <input type="text" name="" id="seat" placeholder="Seat">
            <input type="text" name="" id="gate" placeholder="Gate">
            <input type="text" name="" id="terminal" placeholder="Terminal">
            <input type="text" name="" id="bagasi" placeholder="Bagasi" value="0">
            <input type="button" value="Generate">
        </section>


        <p class="teks">Result Here</p>
    </form>

        <!--         
        <table class="table table-striped table-hover table-inverse table-responsive">
            <tbody>
                <tr>
                    <td class="">Info Booking</td>
                    <td scope="row">
                        <p id="1">Reservation Details - [Rute] [Tanggal] [Jam] [Maskapai] . Status: BOOKED a/n:[Nama] dengan batas bayar [Tanggal] [Jam]. Pembayaran via transfer di No. Rek a/n: HJ. NURFADILAH BNI:0504-277-266 BRI : 025-901-036-139-503.Total:[Total]. Mohon konfirmasi setelah transfer. Terima kasih</p>
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
                        <p id="3"> - Pembayaran via transfer di No. Rek a/n: HJ. NURFADILAH BNI : 0504-277-266 BRI : 025-901-036-139-503. Total [Total] Mohon konfirmasi setelah transfer. Terima kasih</p>
                    </td>
                    <td>
                        <button class="btn btn-secondary" onclick="copyToClipboard('#3')"
                            onmouseout="outFunc()">Copy</button>
                    </td>
                </tr>
                <tr>
                    <td rowspan="2" class="align-middle">Kode Booking</td>
                    <td scope="row">
                        <p id="4">Reservation Details - [Maskapai] Air Ref. Code : [Kode Booking] Rute[Rute][Hari/Tanggal] [Jam] [Flight No] a/n: [Nama] Seat No.: Gate/Terminal: Bagasi/pax:0Kg.Silahkan tunjukkan kode booking ini pada petugas, 2 jam sebelum jam terbang.Selamat Jalan.</p>
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
                        <p id="5">Kepada Yth. Calon Penumpang MASKAPAI. Sehubungan dengan kendala operasional,jadwal penerbangan DARI menuju KE mengalami perubahan yang semula berangkat pada *04/03/2019 pkl 06.00* menjadi *03/03/2019 pkl 06.00*. Mohon maaf atas ketidaknyamanannya. Demikian terima kasih. Info lebih lanjut silakan hubungi pusat bantuan maskapai terkait.</p>
                    </td>
                    <td>
                        <button class="btn btn-secondary" onclick="copyToClipboard('#5')"
                            onmouseout="outFunc()">Copy</button>
                    </td>
                </tr>
                <tr>
                    <td>Dana Refund</td>
                    <td scope="row">
                        <p id="6">Selamat Siang.Terkait pembatalan (refund) Air Asia rute KualaLumpur Makassar 03 April atas nama penumpang : Mr. TOLAI SUNUSI, saat ini dana sudah dicairkan senilai Rp.759.900. Dana dapat diterima tunai di kantor atau melalui transfer via BNI atau BRI. Untuk dana via transfer, silahkan balas pesan ini dengan info nomor rekening dengan format : Nomor Rekening [spasi] Nama pemilik rekening [spasi] Nama Bank Terima kasih.</p>
                    </td>
                    <td>
                        <button class="btn btn-secondary" onclick="copyToClipboard('#6')"
                            onmouseout="outFunc()">Copy</button>
                    </td>
                </tr>
            </tbody>
        </table>
         -->
    </div>

    <script>

$(function(){
    $('input[type="radio"]').click(function () {
                var inputValue = $(this).attr("class");
                var targetBox = $("#" + inputValue);
                $("section").not(targetBox).hide();
                $(targetBox).show();
        });

        $('#perubahanJadwal input[type="button"]').click(function () {

            var maskapai = $("#maskapai option:selected").val();
            var namaPenumpang = $(".namaPenumpang").val();
            var dari = $("#dari option:selected").val();
            var ke = $("#ke option:selected").val();

            var x = new Date($('#tanggal').val())
            day = x.getDate();
            month = x.getMonth() + 1;
            year = x.getFullYear();
            tanggal = [day, month, year].join('/');
            var jam = $('#jam').val();

            var y = new Date($('#tanggal_baru').val())
            day = y.getDate();
            month = y.getMonth() + 1;
            year = y.getFullYear();
            tanggal_baru = [day, month, year].join('/');
            var waktu_baru = $('#waktu_baru').val();

            var result = 'Pelanggan Yth Bpk/Ibu ' + namaPenumpang + ' Calon Penumpang ' + maskapai + ' Sehubungan dengan kendala operasional, jadwal penerbangan anda ' + dari + ' menuju ' + ke + ' mengalami perubahan yang semula berangkat di tanggal ' + tanggal + ' pukul ' + jam + ' menjadi ' + tanggal_baru + ' pukul ' + waktu_baru + ' Mohon maaf atas ketidaknyamanannya. Demikian terima kasih. Info lebih lanjut silakan hubungi call center maskapai terkait';

            $("p").text(result);

        });

        $('#kodeBooking input[type="button"]').click(function () {

            var maskapai = $("#maskapai option:selected").val();
            var namaPenumpang = $(".namaPenumpang").val();
            var dari = $("#dari").val();
            var ke = $("#ke").val();
            var kode = $(".kode").val();
            var flight = $("#flight").val();
            var seat = $("#seat").val();
            var gate = $("#gate").val();
            var terminal = $("#terminal").val();
            var bagasi = $("#bagasi").val();

            var x = new Date($('#tanggal').val())
            day = x.getDate();
            month = x.getMonth() + 1;
            year = x.getFullYear();
            tanggal = [day, month, year].join('/');
            var jam = $('#jam').val();

            var result = 'BMW Travel - ' + maskapai + ' Ref. Code : ' + kode + ' Rute ' + dari + ' Menuju ' + ke + ' Tanggal Keberangkatan ' + tanggal + ' Pukul ' + jam + ' Flight No.: ' + flight + ' a/n: ' + namaPenumpang + ' Seat No.: ' + seat + ' Gate/Terminal:' + gate + '/' + terminal + ' Bagasi/pax: ' + bagasi + ' Silahkan tunjukkan kode booking ini pada petugas, 3 jam sebelum jam terbang. Selamat Jalan.';

            $("p").text(result);

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
});
        
    </script>
    <?php
    // require ('footer.php');
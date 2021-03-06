<?php
include 'header.php';
?>

<div class="container">
    <div class="row">
        <h1 class="col display-3 text-center my-5">Aturan Pembatalan Dan Perubahan Jadwal</h1>
    </div>
    <div class="alert alert-danger">
        <strong>
            <ul>
                <li>Tiket yang sudah check-in tidak dapat dilakukan pembatalan (Hangus).</li>
            </ul>
        </strong>
    </div>
    <div class="tab mt-3">
        <ul class="nav nav-tabs nav-stacked mb-5">
            <li class="nav-item">
                <a data-toggle="tab" href="#lion" class="nav-item btn btn-danger ">Lion
                    Group</a>
            </li>
            <li class="nav-item ">
                <a data-toggle="tab" href="#sj" class="nav-item btn btn-warning">Sriwijaya Air</a>
            </li>
            <li class="nav-item ">
                <a data-toggle="tab" href="#citilink" class="nav-item btn btn-success">Citilink</a>
            </li>
            <li class="nav-item ">
                <a data-toggle="tab" href="#garuda" class="nav-item btn btn-primary">Garuda</a>
            </li>
            <li class="nav-item ">
                <a data-toggle="tab" href="#covid" class="nav-item btn ml-4"
                    style="background-color:orangered;color:white">
                    <h1 class="dot">.</h1>COVID-19
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade" id="lion">
                <h5>Reschedule</h5>
                <ul>
                    <li>Perubahan lebih dari 72 jam : Admin IDR 100.000 + selisih harga</li>
                    <li>Perubahan 72 – 4 jam : biaya reschedule 50% dari harga dasar</li>
                    <li>Perubahan kurang dari 4 jam / No Show : biaya reschedule 90% dari harga dasar</li>
                </ul>
                <small>Note : Perhitungan diatas berlaku apabila masih dikelas/harga yang sama, apabila ada
                    perubahan
                    harga ( kenaikan harga ) otomatis akan dikenakan tambahan biaya selisih antara harga tiket
                    lama
                    dan harga baru.</small>
                <h5>Refund</h5>
                <ul>
                    <li>Pembatalan lebih dari 72 jam: cancellation fee 25% dari basic fare + Admin Rp.50.000</li>
                    <li>Pembatalan 72 – 4 jam: cancellation fee 50% dari basic fare + Admin Rp.50.000</li>
                    <li>Pembatalan kurang dari 4 jam / No Show : cancellation fee 90% dari basic fare + Admin Rp.50.000
                    </li>
                </ul>
            </div>
            <div class="tab-pane fade" id="sj">
                <p>Masa validasi kelas : 1 hari</p>
                <h5>Reschedule</h5>
                <p>Low Season</p>
                <ul>
                    <li>Perubahan Lebih dari 72 - 4 Jam sebelum keberangkatan : Tidak dikenakan biaya reschedule
                    </li>
                    <li>Perubahan kurang dari 4 Jam sebelum keberangkatan atau setelah jam penerbangan : Biaya
                        reschedule 90%</li>
                </ul>
                <p>High Season</p>
                <ul>
                    <li>Perubahan Lebih dari 72 Jam sebelum keberangkatan : Biaya reschedule 25%</li>
                    <li>Perubahan 24 - 72 Jam sebelum keberangkatan : Biaya reschedule 50%</li>
                    <li>Perubahan 4 - 24 Jam sebelum keberangkatan : Biaya reschedule 70%</li>
                    <li>Perubahan kurang dari 4 Jam sebelum keberangkatan atau setelah jam penerbangan : Biaya
                        reschedule 90%</li>
                </ul>
                <h5>Refund</h5>
                <ul>
                    <li>Pembatalan lebih dari 72 Jam sebelum keberangkatan: cancellation fee 25% + Admin Rp.50.000</li>
                    <li>Pembatalan 24 - 72 Jam sebelum keberangkatan: cancellation fee 60% + Admin Rp.50.000</li>
                    <li>Pembatalan 4 - 24 Jam sebelum keberangkatan: cancellation fee 80% + Admin Rp.50.000</li>
                    <li>Pembatalan kurang dari 4 Jam sebelum keberangkatan atau setelah jam penerbangan:
                        cancellation
                        fee 90%
                    </li>
                </ul>
                <small>Note :
                    <ol>
                        <li>Perhitungan diatas berlaku apabila masih dikelas/harga yang sama, apabila ada
                            perubahan
                            harga (kenaikan harga) otomatis akan dikenakan tambahan biaya selisih antara harga
                            tiket
                            lama dan harga tiket baru.</li>
                        <li>Reschedule melebihi masa valid kelas otomatis akan dikenakan biaya upgrade sesuai
                            dengan
                            valid kelas yang tersedia.</li>
                    </ol>
                </small>
            </div>
            <div class="tab-pane fade" id="citilink">
                <h5>Reschedule</h5>
                <ul>
                    <li>Perubahan lebih dari 24 jam : Admin fee IDR 100.000</li>
                    <li>Perubahan kurang dari 24 jam / No Show : Tidak bisa di reschedule</li>
                </ul>
                <small>
                    <ol>
                        <p>Note:</p>
                        <li>Perhitungan diatas berlaku apabila masih dikelas/harga yang sama, apabila ada
                            perubahanharga
                            (kenaikan harga) otomatis akan dikenakan tambahan biaya selisih antara harga tiket
                            lama
                            dan
                            harga baru.</li>
                        <li>Untuk tiket return (pergi-pulang), jika salah satunya sudah digunakan, otomatis
                            tidak
                            dapat
                            dilakukan perubahan jadwal untuk schedule yang lain.</li>
                    </ol>
                </small>
                <h5>Refund</h5>
                <ul>
                    <li>Pembatalan lebih dari 72 jam : Cancellation fee 25% dari basic fare + Admin Rp.50.000</li>
                    <li>Pembatalan 72 – 48 jam : Cancellation fee 50% dari basic fare + Admin Rp.50.000</li>
                    <li>Pembatalan 48 – 24 jam : Cancellation fee 60% dari basic fare + Admin Rp.50.000</li>
                    <li>Pembatalan 24 – 12 jam : Cancellation fee 70% dari basic fare + Admin Rp.50.000</li>
                    <li>Pembatalan 12 – 4 jam : Cancellation fee 80% dari basic fare + Admin Rp.50.000</li>
                    <li>Pembatalan 4 jam – 1 jam : Cancellation fee 90% dari basic fare + Admin Rp.50.000</li>
                    <li>Pembatalan kurang dari 1 jam / No Show : Tidak bisa direfund</li>
                </ul>
            </div>
            <div class="tab-pane fade" id="garuda">
                <h5>Reschedule</h5>
                <ul>
                    <li>Perubahan lebih dari 72 jam : Biaya reschedule 100% dari basic</li>
                    <li>Perubahan 72 - 24 jam : Biaya reschedule 100% dari basic</li>
                    <li>Perubahan 24 - 2 jam : Biaya reschedule 100% dari basic</li>
                    <li>Perubahan kurang dari 2 jam / No Show : Biaya reschedule 100% dari basic</li>
                    <li>Perubahan setelah melewati jam keberangkat : Biaya reschedule 100% dari basic</li>
                </ul>
                <small>
                    <p>Note</p>
                    <ol>
                        <li>Perhitungan diatas berlaku apabila masih dikelas/harga yang sama, apabila ada
                            perubahan
                            harga (kenaikan harga) otomatis akan dikenakan tambahan biaya selisih antara harga
                            tiket
                            lama dan harga baru.</li>
                    </ol>
                </small>
                <h5>Refund</h5>
                <ul>
                    <li>Pembatalan lebih dari 72 jam : Cancellation fee 25% dari basic fare + Admin Rp.50.000</li>
                    <li>Pembatalan 72 - 24 jam : Cancellation fee 50% dari basic fare + Admin Rp.50.000</li>
                    <li>Pembatalan 24 - 2 jam : Cancellation fee 70% dari basic fare + Admin Rp.50.000</li>
                    <li>Pembatalan 2 - Noshow : Cancellation fee 90% dari basic fare + Admin Rp.50.000</li>
                    <li>Pembatalan setelah melewati jam keberangkat : Cancellation fee 90% dari basic fare + Admin
                        Rp.50.000</li>
                </ul>
            </div>
            <div class="tab-pane fade" id="covid">
                <div class="alert alert-warning" role="alert">
                    <span class="fas fa-exclamation"></span> Efektif 1 April
                </div>
                <h3>Lion Air</h3>
                <img src="img/lion.png"
                    class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                    alt="">
                <br>
                <br>
                <ul>
                    <li>Voucher dapat diklaim ke kantor Lion Air terdekat dengan membawa kartu identitas serta tiket
                        yang dibatalkan</li>
                </ul>
                <h3>Garuda</h3>
                <ul>
                    <li>Pengembalian dana refund tidak dalam bentuk uang tunai melainkan voucher yang dapat
                        digunakan untuk keberangkatan selanjutnya</li>
                    <li>Proses Klaim dilakukan secara mandiri oleh penumpang melalui kantor Garuda terdekat </li>
                </ul>
                <h3>Citilink</h3>
                <p>Pengembalian dalam bentuk Voucher. Ketentuan Voucher Refund :</p>
                <ul>
                    <li>Validitas voucher sampai dengan tanggal 20 Juli 2021, dengan periode DOT 1 Juni 2020 sampai dengan 20 Juli 2021.</li>
                    <li>Voucher dapat di-redeem di Kantor Penjualan Citilink dan Website Citilink (www.citilink.co.id).</li>
                    <li>Apabila nilai voucher lebih kecil dari nilai tiket yang akan dibeli, penumpang hanya membayar selisih antara nilai tiket dan nilai voucher.</li>
                    <li>Apabila nilai voucher lebih besar dari nilai tiket yang akan dibeli, saldo voucher akan berkurang secara otomatis. Saldo dapat digunakan untuk melakukan pembelian tiket lain berkali-kali sampai saldo atau masa validitasnya berakhir.</li>
                    <li>Voucher bersifat transferable (dapat dipindahtangankan), dapat digunakan untuk penumpang lain yang bukan penumpang pada reservasi sebelumnya.</li>
                    <li>Voucher tidak dapat diuangkan dan akan hangus apabila masa validitasnya sesuai poin 3 huruf a telah berakhir.</li>
                    <li>Untuk pengecekan nilai voucher dapat dilakukan di website Citilink.</li>
                </ul>
                <h3>Air Asia</h3>
                <ul>
                    <li>Refund Full dan Reshcedule tanpa biaya sampai tanggal keberangkatan 17 Mei 2020</li>
                    <li>Penumpang dapat melakukan perubahan jadwal ke tanggal berapapun dengan ketentuan dibawah
                        tanggal 1 Oktober 2020</li>
                </ul>
                <h3>Sriwijaya</h3>
                <ul>
                    <li>Cancellation Fee 15%</li>
                    <li>Pencairan 15-30 hari kerja</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>



</body>

</html>
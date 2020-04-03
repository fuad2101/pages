<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="ism/css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="">
    <title>Tools</title>
    <style>
        body {
            height: 1000px;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Tools</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="tools.php">Refund/Reschedule <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="format_sms.php">Format SMS</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">

        <h1 class="display-3 text-center my-5">Aturan Pembatalan/Perubahan Maskapai</h1>
        
        <div class="alert alert-danger">
            <strong>
                <ul>
                    <li>Tiket yang sudah check-in tidak dapat dilakukan pembatalan (Hangus).</li>
                    <li>Pengembalian Dana 7-14 hari kerja</li>
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
                        <li>Pembatalan lebih dari 72 jam: cancellation fee 25% dari basic fare</li>
                        <li>Pembatalan 72 – 4 jam: cancellation fee 50% dari basic fare</li>
                        <li>Pembatalan kurang dari 4 jam / No Show : cancellation fee 90% dari basic fare</li>
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
                        <li>Pembatalan lebih dari 72 Jam sebelum keberangkatan: cancellation fee 25%</li>
                        <li>Pembatalan 24 - 72 Jam sebelum keberangkatan: cancellation fee 60%</li>
                        <li>Pembatalan 4 - 24 Jam sebelum keberangkatan: cancellation fee 80%</li>
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
                        <li>Pembatalan lebih dari 72 jam : Cancellation fee 25% dari basic fare</li>
                        <li>Pembatalan 72 – 48 jam : Cancellation fee 50% dari basic fare</li>
                        <li>Pembatalan 48 – 24 jam : Cancellation fee 60% dari basic fare</li>
                        <li>Pembatalan 24 – 12 jam : Cancellation fee 70% dari basic fare</li>
                        <li>Pembatalan 12 – 4 jam : Cancellation fee 80% dari basic fare</li>
                        <li>Pembatalan 4 jam – 1 jam : Cancellation fee 90% dari basic fare</li>
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
                        <li>Pembatalan lebih dari 72 jam : Cancellation fee 25% dari basic fare</li>
                        <li>Pembatalan 72 - 24 jam : Cancellation fee 50% dari basic fare</li>
                        <li>Pembatalan 24 - 2 jam : Cancellation fee 70% dari basic fare</li>
                        <li>Pembatalan 2 - Noshow : Cancellation fee 90% dari basic fare</li>
                        <li>Pembatalan setelah melewati jam keberangkat : Cancellation fee 90% dari basic fare</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</body>

</html>
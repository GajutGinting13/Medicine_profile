<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $page = "Pesan";
    include 'head.php' ?>
</head>

<body>
    <div class="page-body-wrapper default-menu default-menu">
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="card">
                        <div class="card-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5>Pesanan</h5>
                                                <form class="needs-validation" novalidate="" id="pesanan">
                                                    <div class="row g-3">
                                                        <div class="col-md-4">
                                                            <label class="form-label" for="namapemesan">Nama Pemesan</label>
                                                            <input class="form-control" id="namapemesan" type="text" name="nama" required="">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label" for="namaperusahaan">Nama Perusahaan</label>
                                                            <input class="form-control" id="namaperusahaan" type="text" name="nmperusahaan" required="">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="dp">DP</label>
                                                            <div class="input-group"><span class="input-group-text" id="uangmuka">Rp. </span>
                                                                <input class="form-control" id="dp" type="number" aria-describedby="uangmuka" name="dp" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3">
                                                        <div class="col-md-4">
                                                            <label class="form-label" for="alamat">Alamat</label>
                                                            <input class="form-control" id="alamat" type="text" name="alamat" required="">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label" for="catatan">Catatan</label>
                                                            <input class="form-control" id="catatan" type="text" required="" name="catatan">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label" for="paket">Paket</label>
                                                            <select class="form-select" id="paket" required="" name="paket">
                                                                <option selected="" disabled="">- Pilih -</option>
                                                                <option value="lengkap">Lengkap</option>
                                                                <option value="satusehat">Satu Sehat</option>
                                                                <option value="bpjs">BPJS</option>
                                                                <option value="rme">RME</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <button class="btn btn-primary" type="button" id="simpan">Pesan</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#simpan').click(function(event) {
                let data = $('#pesanan').serialize();
                $.ajax({
                    method: "POST",
                    url: "proses_pesanan.php",
                    data: data,
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                title: "Success",
                                text: response.message,
                                icon: "success",
                                confirmButtonColor: "#3085d6",
                                cancelButtonColor: "#d33",
                                confirmButtonText: "Ok"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "index.php";
                                }
                            });
                        } else {
                            Swal.fire({
                                title: "Error!",
                                text: response.message || "There was an error processing your request.",
                                icon: "error"
                            });
                        }
                    }
                });
            });
        });
    </script>

</body>

</html>
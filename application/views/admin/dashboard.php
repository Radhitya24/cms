<div class="container mt-5">
    <!-- Header -->
    <div class="text-center mb-5">
        <h2 class="font-weight-bold text-dark">Selamat Datang di Halaman Dashboard</h2>
        <p class="text-muted">Kelola data Anda dengan mudah dan efisien</p>
    </div>

    <div class="row">
        <!-- Weather Card -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-lg" style="background: linear-gradient(135deg, #00BFFF, #1E90FF); border: none; border-radius: 15px;">
                <div class="card-body d-flex align-items-center text-white">
                    <img src="<?= base_url('assets/skydash') ?>/images/dashboard/people.svg" alt="Weather" class="img-fluid" style="width: 100px;">
                    <div class="ml-4">
                        <h3 class="font-weight-bold mb-1"><i class="fas fa-sun"></i> 27<sup>°C</sup></h3>
                        <p class="mb-0">Karanganyar, Indonesia</p>
                        <small>Cerah • Diperbarui Sekarang</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Info Card -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-lg" style="background-color: #F2F4F7; border-radius: 15px;">
                <div class="card-body text-center">
                    <i class="fas fa-user-circle fa-3x text-primary mb-3"></i>
                    <h5 class="text-muted mb-1">Level</h5>
                    <h3 class="font-weight-bold text-dark"><?= $this->session->userdata('level') ?></h3>
                    <p class="text-primary mb-0"><?= $this->session->userdata('nama') ?></p>
                    <small><?= $this->session->userdata('username') ?></small>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-lg border-0" style="background-color: #A7F3D0; border-radius: 15px;">
                <div class="card-body text-center">
                    <i class="fas fa-users fa-3x text-success mb-3"></i>
                    <h5 class="text-muted mb-1">Total User</h5>
                    <h3 class="font-weight-bold text-dark"><?= $jumlah_user ?></h3>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card shadow-lg border-0" style="background-color: #BBE1FA; border-radius: 15px;">
                <div class="card-body text-center">
                    <i class="fas fa-layer-group fa-3x text-info mb-3"></i>
                    <h5 class="text-muted mb-1">Total Kategori Konten</h5>
                    <h3 class="font-weight-bold text-dark"><?= $jumlah_kategori ?></h3>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card shadow-lg border-0" style="background-color: #FFEB3B; border-radius: 15px;">
                <div class="card-body text-center">
                    <i class="fas fa-file-alt fa-3x text-warning mb-3"></i>
                    <h5 class="text-muted mb-1">Total Konten</h5>
                    <h3 class="font-weight-bold text-dark"><?= $jumlah_konten ?></h3>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card shadow-lg border-0" style="background-color: #FFFACD; border-radius: 15px;">
                <div class="card-body text-center">
                    <i class="fas fa-file-alt fa-3x text-warning mb-3"></i>
                    <h5 class="text-muted mb-1">Total Galeri</h5>
                    <h3 class="font-weight-bold text-dark"><?= $jumlah_galeri ?></h3>
                </div>
            </div>
        </div>
    </div>
</div>

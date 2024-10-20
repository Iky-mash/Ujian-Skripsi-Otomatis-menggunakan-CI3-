<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">

            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="searchInput" onkeyup="searchTable()" placeholder="Cari berdasarkan judul tugas akhir, NIM, atau pembimbing...">
                    </div>
                </div>
                <div class="row m-2">
                    <p class="card-title mb-3">Data Tugas Akhir</p>
                    <!-- Tombol Tambah Data Tugas Akhir di ujung kanan -->
                    <div class="ml-auto">
                        <button class="btn btn-primary mb-3" onclick="addTugasAkhir()">Tambah Data Tugas Akhir</button>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                        <thead>
                            <tr>
                                <th>Judul Tugas Akhir</th>
                                <th>NIM Mahasiswa</th>
                                <th>Pembimbing</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pengembangan Aplikasi Pembelajaran Bahasa Indonesia</td>
                                <td class="font-weight-bold">1234567890</td>
                                <td>Dr. Ahmad Fauzi, M.Pd</td>
                                <td class="font-weight-medium">
                                    <div class="badge badge-success">Selesai</div>
                                </td>
                                <td>
                                    <button class="btn btn-warning btn-sm" onclick="editTugasAkhir(this)">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteTugasAkhir(this)">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Implementasi Sistem Informasi Sekolah</td>
                                <td class="font-weight-bold">0987654321</td>
                                <td>Prof. Sri Rahayu, M.Sc</td>
                                <td class="font-weight-medium">
                                    <div class="badge badge-success">Selesai</div>
                                </td>
                                <td>
                                    <button class="btn btn-warning btn-sm" onclick="editTugasAkhir(this)">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteTugasAkhir(this)">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Analisis Struktur Jembatan Baja</td>
                                <td class="font-weight-bold">1122334455</td>
                                <td>Dr. Budi Santoso, S.T., M.T.</td>
                                <td class="font-weight-medium">
                                    <div class="badge badge-warning">Dalam Proses</div>
                                </td>
                                <td>
                                    <button class="btn btn-warning btn-sm" onclick="editTugasAkhir(this)">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteTugasAkhir(this)">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Peningkatan Pembelajaran Studi Islam</td>
                                <td class="font-weight-bold">5544332211</td>
                                <td>Dr. Fitriani, M.Ag</td>
                                <td class="font-weight-medium">
                                    <div class="badge badge-warning">Dalam Proses</div>
                                </td>
                                <td>
                                    <button class="btn btn-warning btn-sm" onclick="editTugasAkhir(this)">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteTugasAkhir(this)">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Pengembangan Model Pembelajaran Matematika</td>
                                <td class="font-weight-bold">6677889900</td>
                                <td>Dr. Indah Pratiwi, S.Si, M.Si</td>
                                <td class="font-weight-medium">
                                    <div class="badge badge-danger">Ditolak</div>
                                </td>
                                <td>
                                    <button class="btn btn-warning btn-sm" onclick="editTugasAkhir(this)">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteTugasAkhir(this)">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Pengelolaan Pendidikan Berbasis Teknologi</td>
                                <td class="font-weight-bold">9988776655</td>
                                <td>Prof. Suyanto, Ph.D</td>
                                <td class="font-weight-medium">
                                    <div class="badge badge-warning">Dalam Proses</div>
                                </td>
                                <td>
                                    <button class="btn btn-warning btn-sm" onclick="editTugasAkhir(this)">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteTugasAkhir(this)">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Peningkatan Kesehatan Mental Melalui Psikologi</td>
                                <td class="font-weight-bold">5566778899</td>
                                <td>Dr. Nanda Putri, M.Psi</td>
                                <td class="font-weight-medium">
                                    <div class="badge badge-success">Selesai</div>
                                </td>
                                <td>
                                    <button class="btn btn-warning btn-sm" onclick="editTugasAkhir(this)">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteTugasAkhir(this)">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
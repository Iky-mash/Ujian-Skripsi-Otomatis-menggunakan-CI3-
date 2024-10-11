<!-- kode salah -->

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
                    <p class="card-title mb-3">Data Dosen</p>
                    <!-- Tombol Tambah Data Dosen di ujung kanan -->
                    <div class="ml-auto">
                        <button class="btn btn-primary mb-3" onclick="addDosen()">Tambah Data Dosen</button>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                        <thead>
                            <tr>
                                <th>Nama Dosen</th>
                                <th>NIDN</th>
                                <th>Bidang Keahlian</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dr. Ahmad Fauzi, M.Pd</td>
                                <td class="font-weight-bold">1234567890</td>
                                <td>Pendidikan Bahasa</td>
                                <td class="font-weight-medium">
                                    <div class="badge badge-success">Aktif</div>
                                </td>
                                <td>
                                    <button class="btn btn-warning btn-sm" onclick="editDosen(this)">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteDosen(this)">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Prof. Sri Rahayu, M.Sc</td>
                                <td class="font-weight-bold">0987654321</td>
                                <td>Teknologi Informasi</td>
                                <td class="font-weight-medium">
                                    <div class="badge badge-success">Aktif</div>
                                </td>
                                <td>
                                    <button class="btn btn-warning btn-sm" onclick="editDosen(this)">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteDosen(this)">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Dr. Budi Santoso, S.T., M.T.</td>
                                <td class="font-weight-bold">1122334455</td>
                                <td>Teknik Sipil</td>
                                <td class="font-weight-medium">
                                    <div class="badge badge-warning">Cuti</div>
                                </td>
                                <td>
                                    <button class="btn btn-warning btn-sm" onclick="editDosen(this)">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteDosen(this)">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Dr. Fitriani, M.Ag</td>
                                <td class="font-weight-bold">5544332211</td>
                                <td>Studi Islam</td>
                                <td class="font-weight-medium">
                                    <div class="badge badge-warning">Cuti</div>
                                </td>
                                <td>
                                    <button class="btn btn-warning btn-sm" onclick="editDosen(this)">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteDosen(this)">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Dr. Indah Pratiwi, S.Si, M.Si</td>
                                <td class="font-weight-bold">6677889900</td>
                                <td>Matematika</td>
                                <td class="font-weight-medium">
                                    <div class="badge badge-danger">Tidak Aktif</div>
                                </td>
                                <td>
                                    <button class="btn btn-warning btn-sm" onclick="editDosen(this)">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteDosen(this)">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Prof. Suyanto, Ph.D</td>
                                <td class="font-weight-bold">9988776655</td>
                                <td>Manajemen Pendidikan</td>
                                <td class="font-weight-medium">
                                    <div class="badge badge-warning">Cuti</div>
                                </td>
                                <td>
                                    <button class="btn btn-warning btn-sm" onclick="editDosen(this)">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteDosen(this)">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Dr. Nanda Putri, M.Psi</td>
                                <td class="font-weight-bold">5566778899</td>
                                <td>Psikologi</td>
                                <td class="font-weight-medium">
                                    <div class="badge badge-success">Aktif</div>
                                </td>
                                <td>
                                    <button class="btn btn-warning btn-sm" onclick="editDosen(this)">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteDosen(this)">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- kode salah -->
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">

            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="searchInput" onkeyup="searchTable()" placeholder="Cari berdasarkan nama mahasiswa, NIM, atau penguji...">
                    </div>
                </div>
                <div class="row m-2">
                    <p class="card-title mb-3">Data Dosen Penguji</p>
                    <!-- Tombol Tambah Data Dosen Penguji di ujung kanan -->
                    <div class="ml-auto">
                        <button class="btn btn-primary mb-3" onclick="addDosenPenguji()">Tambah Data Dosen Penguji</button>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-borderless" id="dosenPengujiTable">
                        <thead>
                            <tr>
                                <th>Nama Mahasiswa</th>
                                <th>NIM</th>
                                <th>Penguji 1</th>
                                <th>Penguji 2</th>
                                <th>Dosen Pembimbing</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Andi Setiawan</td>
                                <td class="font-weight-bold">1234567890</td>
                                <td>Dr. Ahmad Fauzi, M.Pd</td>
                                <td>Dr. Budi Santoso, S.T., M.T.</td>
                                <td>Prof. Sri Rahayu, M.Sc</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" onclick="editDosenPenguji(this)">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteDosenPenguji(this)">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Rina Amalia</td>
                                <td class="font-weight-bold">0987654321</td>
                                <td>Prof. Suyanto, Ph.D</td>
                                <td>Dr. Indah Pratiwi, S.Si, M.Si</td>
                                <td>Dr. Nanda Putri, M.Psi</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" onclick="editDosenPenguji(this)">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteDosenPenguji(this)">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Yusuf Maulana</td>
                                <td class="font-weight-bold">1122334455</td>
                                <td>Dr. Fitriani, M.Ag</td>
                                <td>Dr. Ahmad Fauzi, M.Pd</td>
                                <td>Prof. Sri Rahayu, M.Sc</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" onclick="editDosenPenguji(this)">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteDosenPenguji(this)">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Fatimah Zahra</td>
                                <td class="font-weight-bold">5544332211</td>
                                <td>Dr. Budi Santoso, S.T., M.T.</td>
                                <td>Prof. Suyanto, Ph.D</td>
                                <td>Dr. Indah Pratiwi, S.Si, M.Si</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" onclick="editDosenPenguji(this)">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteDosenPenguji(this)">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>David Pratama</td>
                                <td class="font-weight-bold">6677889900</td>
                                <td>Dr. Nanda Putri, M.Psi</td>
                                <td>Dr. Ahmad Fauzi, M.Pd</td>
                                <td>Prof. Sri Rahayu, M.Sc</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" onclick="editDosenPenguji(this)">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteDosenPenguji(this)">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
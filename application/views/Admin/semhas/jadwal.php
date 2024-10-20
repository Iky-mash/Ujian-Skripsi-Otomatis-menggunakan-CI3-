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
                    <p class="card-title mb-3">Agenda Ujian Seminar Hasil</p>
                    <div class="ml-auto">
                        <button class="btn btn-primary mb-3" onclick="addProposal()">Tambah Agenda Ujian Seminar Hasil</button>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                        <thead>
                            <tr>
                                <th>Nama Mahasiswa</th>
                                <th>NIM</th>
                                <th>Nama Dosen Pembimbing</th>
                                <th>Penguji 1</th>
                                <th>Penguji 2</th>
                                <th>Tanggal Ujian</th>
                                <th>Waktu Ujian</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Doe</td>
                                <td class="font-weight-bold">1234567890</td>
                                <td>Dr. Ahmad Fauzi, M.Pd</td>
                                <td>Prof. Sri Rahayu, M.Sc</td>
                                <td>Dr. Budi Santoso, S.T., M.T.</td>
                                <td>10 Okt 2024</td>
                                <td>10:00 - 11:00</td>
                                <td>
                                    <div class="badge badge-success">ACC</div>
                                </td>
                                <td>
                                    <button class="btn btn-warning btn-sm" onclick="editProposal(this)">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteProposal(this)">Delete</button>

                                </td>
                            </tr>
                            <tr>
                                <td>Jane Smith</td>
                                <td class="font-weight-bold">0987654321</td>
                                <td>Dr. Fitriani, M.Ag</td>
                                <td>Dr. Indah Pratiwi, S.Si, M.Si</td>
                                <td>Prof. Suyanto, Ph.D</td>
                                <td>11 Okt 2024</td>
                                <td>13:00 - 14:00</td>
                                <td>
                                    <div class="badge badge-success">ACC</div>
                                </td>
                                <td>
                                    <button class="btn btn-warning btn-sm" onclick="editProposal(this)">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteProposal(this)">Delete</button>

                                </td>
                            </tr>
                            <tr>
                                <td>Alice Johnson</td>
                                <td class="font-weight-bold">1122334455</td>
                                <td>Dr. Nanda Putri, M.Psi</td>
                                <td>Dr. Ahmad Fauzi, M.Pd</td>
                                <td>Dr. Budi Santoso, S.T., M.T.</td>
                                <td>12 Okt 2024</td>
                                <td>15:00 - 16:00</td>
                                <td>
                                    <div class="badge badge-warning">Terjadwal</div>
                                </td>
                                <td>
                                    <button class="btn btn-warning btn-sm" onclick="editProposal(this)">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteProposal(this)">Delete</button>

                                </td>
                            </tr>
                            <tr>
                                <td>Bob Brown</td>
                                <td class="font-weight-bold">5544332211</td>
                                <td>Dr. Indah Pratiwi, S.Si, M.Si</td>
                                <td>Prof. Suyanto, Ph.D</td>
                                <td>Dr. Nanda Putri, M.Psi</td>
                                <td>13 Okt 2024</td>
                                <td>09:00 - 10:00</td>
                                <td>
                                    <div class="badge badge-info">Reschedule</div>
                                </td>
                                <td>
                                    <button class="btn btn-warning btn-sm" onclick="editProposal(this)">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteProposal(this)">Delete</button>

                                </td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
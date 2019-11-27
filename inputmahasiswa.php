


<div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header">
                                        Input Mahasiswa
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="input.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">NRP</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="nrp" name="nrp" placeholder="Masukkan NRP mahasiswa" class="form-control">
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nama</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="nama" name="nama" placeholder="Masukkan Nama mahasiswa" class="form-control">
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="selectLg" class=" form-control-label">Kelas</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="kelas" id="kelas" class="form-control-lg form-control">
                                                        <option value="0">Please select</option>
                                                        <option value="D4">D4</option>
                                                        <option value="D3">D3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="selectSm" class=" form-control-label">Prodi</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="prodi" id="prodi" class="form-control-sm form-control">
                                                        <option value="0">Please select</option>
                                                        <option value="Elektronika">Elektronika</option>
                                                        <option value="Telekomunikasi">Telekomunikasi</option>
                                                        <option value="Elektro Industri">Elektro Industri</option>
                                                        <option value="Informatika">Informatika</option>
                                                        <option value="Multimedia Broadcasting">Multimedia Broadcasting</option>
                                                        <option value="Mekatronika">Mekatronika</option>
                                                        <option value="Teknik Komputer">Teknik Komputer</option>
                                                        <option value="Sistem Pembangkit Energi">Sistem Pembangkit Energi</option>
                                                        <option value="Teknik Game">Teknik Game</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Dosen</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="dosen" name="dosen" placeholder="Masukkan dosen mahasiswa" class="form-control">
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Judul TA</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="judulta" name="judulta" placeholder="Masukkan Judul TA" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Username</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="username" name="username" placeholder="username" class="form-control">

                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Tahun Lulus</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="tahunlulus" name="tahunlulus" placeholder="Tahun Lulus" class="form-control">

                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-multiple-input" class=" form-control-label">Foto Mahasiswa</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="userfile" name="userfile" multiple="" class="form-control-file">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="password" name="password" placeholder="Text" class="form-control">
                                                </div>
                                            </div>
											<div>
                                                    <button id="upload" name="upload" type="submit" class="btn btn-lg btn-info btn-block">
                                                        <i class="fas fa-cloud-upload-alt"></i>&nbsp;
                                                        <span id="payment-button-amount">Submit</span>
                                                        <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                    </button>
                                                </div>

                                        </form>
                                        
                                    </div>
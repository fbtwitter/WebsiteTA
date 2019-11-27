
<form action="inputbuku.php" method="post" enctype="multipart/form-data" name="uploadform">
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <h3>Upload BUKU</h3>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Judul</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="judul" name="judul" placeholder="Masukkan Judul Buku" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Penulis</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="penulis" name="penulis" placeholder="Masukkan Nama Penulis" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="textarea-input" class=" form-control-label">Sinopsis</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <textarea name="sinopsis" id="sinopsis" rows="9" placeholder="Sinopsi..." class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="file-input" class=" form-control-label">Upload Buku</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="file" id="userfile" name="userfile" class="form-control-file">
                                                        <small class="form-text text-muted">Ukuran Maksimal 12MB</small>
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

 <form action="inputjurnal.php" method="post" enctype="multipart/form-data" name="uploadform">
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <h3>Upload Jurnal</h3>
                                                    </div>
                                                </div>
                                          
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Judul</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="judul" name="judul" placeholder="Masukkan Judul Jurnal" class="form-control">
                                                        
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Pengarang</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="pengarang" name="pengarang" placeholder="Masukkan Nama Pengarang" class="form-control">
                                                        
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="textarea-input" class=" form-control-label">Abstrak</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <textarea name="abstrak" id="abstrak" rows="9" placeholder="Abstrak" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="file-input" class=" form-control-label">Upload Jurnal</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="file" id="userfile" name="userfile" class="form-control-file">
                                                    </div>
                                                </div>
                                                <div>
                                                    <button id="upload" name="upload" type="submit" class="btn btn-lg btn-info btn-block">
                                                        <i class="fas fa-cloud-upload-alt"></i>&nbsp;
                                                        <span id="payment-button-amount">Submit</span>
                                                    </button>
                                                </div>
											</form>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end modal small -->
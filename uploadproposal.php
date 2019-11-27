<form action="upload1.php" method="post" enctype="multipart/form-data" name="uploadform" >
                                                        <div class="row form-group" >
                                                                    <div class="col col-md-3">
                                                                        <label for="file-input" class=" form-control-label">Upload Proposal</label>
                                                                    </div>
                                                                    <div class="col-12 col-md-9">
                                                                        <input type="file" id="userfile" name="userfile" class="form-control-file">
                                                                    </div>
                                                        </div>
                                                        <div class="row form-group">
                                                                    <div class="col col-md-3">
                                                                        <label for="textarea-input" class=" form-control-label">Keterangan</label>
                                                                    </div>
                                                                    <div class="col-12 col-md-9">
                                                                        <textarea name="keterangan" id="keterangan" rows="9" placeholder="Content..." class="form-control"></textarea>
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
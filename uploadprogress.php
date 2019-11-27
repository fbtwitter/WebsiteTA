<div class="modal fade" id="uploadmodal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Upload TA</h5>
                                <button type="button" class="open" data-dismiss="modal" aria-label="Open">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="login-content">
                                        <div class="login-logo">
                                                    <img src="images/icon/logo-pensklog2.png" alt="">
                                            </div>
                                <div class="login-form">
                                    <div class="container-fluid" id="exampleQ">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-4" id="proposal1">
                                            <button class="btn btn-warning" style="width: 100%;" data-toggle="collapse" data-target="#proposal" aria-expanded="true" aria-controls="proposal">
                                                Proposal
                                            </button>
                                        </div>
                                        <div class="col-md-4 col-lg-4" id="penelitian1">
                                            <button class="btn btn-warning" style="width: 100%;"  data-toggle="collapse" data-target="#penelitian" aria-expanded="true" aria-controls="penelitian">
                                                Penelitian
                                            </button>
                                        </div>
                                        <div class="col-md-4 col-lg-4" id="hasilakhir1">
                                            <button class="btn btn-warning" style="width: 100%;"  data-toggle="collapse" data-target="#hasilakhir" aria-expanded="true" aria-controls="hasilakhir">
                                                Hasil Akhir
                                            </button>
                                        </div>
                                    </div>
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12">
                                                <div class="collapse show" id="proposal" aria-labelledby="proposal1" data-parent="#exampleQ" style="padding-top: 30px;">
                                                    <div class="card card-body active">
                                                    <?php include 'uploadproposal.php';
                                                    ?>
                                                    </div>
                                                </div>
                                                <div class="collapse" id="penelitian" aria-labelledby="penelitian1" data-parent="#exampleQ" style="padding-top: 30px;">
                                                    <div class="card card-body">
                                                    <?php include 'uploadpenelitian.php';
                                                    ?>
                                                    </div>
                                                </div>
                                                <div class="collapse" id="hasilakhir" aria-labelledby="hasilakhir1" data-parent="#exampleQ" style="padding-top: 30px;">
                                                    <div class="card card-body">
                                                    <?php include 'uploadhasilakhir.php';
                                                    ?>
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
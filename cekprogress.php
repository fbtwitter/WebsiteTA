<?php 
								include 'config.php';
   
								$query1  = "SELECT * FROM user WHERE nrp='$kuki' ";
								$result1 = mysql_query($query1) or die('Error, query failed'); 
								$row1 = mysql_fetch_array($result1)
							?>
<div class="modal fade" id="cekprogress" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Cek Progress</h5>
                                <button type="button" class="open" data-dismiss="modal" aria-label="Open">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="login-content">
                                        <div class="login-logo">
                                                <img src="fotouser/<?php echo $row1[2]; ?>" class="img-circle">
                                            </div>
                                <div class="login-form">
                                    <div class="row form-group">
                                                <div class="col col-md-4 .offset-md-1">
                                                    <label class=" form-control-label">Nama</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <p class="form-control-static"><?php echo $row1[1]; ?></p>
                                                </div>
                                        </div>
                                        <div class="row form-group">
                                                <div class="col col-md-4 .offset-md-1">
                                                    <label class=" form-control-label">NRP</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <p class="form-control-static"><?php echo $row1[0]; ?></p>
                                                </div>
                                        </div>
                                        <div class="row form-group">
                                                <div class="col col-md-4 .offset-md-1">
                                                    <label class=" form-control-label">Kelas / Prodi</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <p class="form-control-static"><?php echo $row1[3]." / ".$row1[5]; ?></p>
                                                </div>
                                        </div>
                                        <div class="row form-group">
                                                <div class="col col-md-4 .offset-md-1">
                                                    <label class=" form-control-label">Judul</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <p class="form-control-static"><?php echo $row1[7]; ?></p>
                                                </div>
                                        </div>
                                        <div class="row form-group" style="padding-top: 30px;">
												<?php 
													include 'config.php';
					   
													$query  = "SELECT * FROM proposal WHERE nrp='$kuki' ";
													$result = mysql_query($query) or die('Error, query failed'); 
													$row = mysql_fetch_array($result);
												?>
                                                <div class="col col-md-4">
                                                    <label class=" form-control-label">Proposal</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <p class="text-center"><a href="downloadproposal.php?id=<?php echo $row[0] ?>"><?php echo $row[2] ?></a></p>
                                                </div>
                                                <div class="col-12 col-md-1">
                                                    <p class="form-control-static"><a href="deleteproposal.php?del=<?php echo $row[0]; ?>">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
														
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
														</a>
                                                    </p>
                                                </div>
                                        </div>
                                        <div class="row form-group">
												<?php 
													include 'config.php';
					   
													$query  = "SELECT * FROM penelitian WHERE nrp='$kuki' ";
													$result = mysql_query($query) or die('Error, query failed'); 
													$row = mysql_fetch_array($result);
												?>
                                                <div class="col col-md-4">
                                                    <label class=" form-control-label">Penelitian</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <p class="text-center"><a href="downloadpenelitian.php?id=<?php echo $row[0] ?>"><?php echo $row[2] ?></a></p>
                                                </div>
                                                <div class="col-12 col-md-1">
                                                    <p class="form-control-static"><a href="deletepenelitian.php?del=<?php echo $row[0]; ?>">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
														</a>
                                                    </p>
                                                </div>
                                        </div>
                                        <div class="row form-group">
												<?php 
													include 'config.php';
					   
													$query  = "SELECT * FROM hasilakhir WHERE nrp='$kuki' ";
													$result = mysql_query($query) or die('Error, query failed'); 
													$row = mysql_fetch_array($result);
												?>
                                                <div class="col col-md-4">
                                                    <label class=" form-control-label">Hasil Akhir</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <p class="text-center"><a href="downloadhasilakhir.php?id=<?php echo $row[0] ?>"><?php echo $row[2] ?></a></p>
                                                </div>
                                                <div class="col-12 col-md-1">
                                                    <p class="form-control-static"><a href="deletehasilakhir.php?del=<?php echo $row[0]; ?>">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
														</a>
                                                    </p>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
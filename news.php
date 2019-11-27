<?php 
    include 'config.php';

    $query = "SELECT * FROM news ";
    $result = mysql_query($query);


    while ($row = mysql_fetch_array($result)) { ?>

        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="news/<?php echo $row[2];?>" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title mb-3"><?php   echo $row[1];  ?></h4>
                    
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php   echo $row[0];  ?>">
                        Lihat Selengkapnya
                    </button>

                    <div class="modal fade" id="<?php   echo $row[0];  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle"><?php   echo $row[1];  ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img class="card-img-top" src="news/<?php echo $row[2];?>" alt="Card image cap">
                            <br>
                            <div class="berita">
                                <?php   echo $row[3];  ?>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    <?php } ?>
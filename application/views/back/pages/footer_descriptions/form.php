    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="pd-30">
        <h4 class="tx-gray-800 mg-b-5"><?php echo ucfirst(str_replace('_', ' ', $this->uri->segment(2))); ?></h4>
        <p class="mg-b-0"><?php echo subtitle(); ?></p>
        <hr>
      </div><!-- d-flex -->

      <div class="br-pagebody mg-t-0 pd-x-30">
        <?php if(isset($_SESSION['flashdata'])): ?>
        <div id="alert-box"><?php echo $_SESSION['flashdata']; ?></div>
        <?php endif; ?>

          <form class="form-layout form-layout-2" action="<?php echo base_url(); ?>panel/<?php echo $this->uri->segment(2); ?>/action/<?php echo $this->uri->segment(4) . '/' . $this->uri->segment(2); ?>/<?php echo @$value->id; ?>" method="post"  enctype="multipart/form-data">

            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group">
                                <label class="form-control-label">Przydatne linki: </label>
                                <textarea class="summernote" name="links"><?php echo @$value->links; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group  bd-t-0-force">
                                <label class="form-control-label">Skontaktuj się z nami:</label>
                                <textarea class="summernote" name="contact"><?php echo @$value->contact; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force  ">
                                <label class="form-control-label">Godziny otwarcia:</label>
                                <textarea class="summernote" name="hours"><?php echo @$value->hours; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                    </div> <!-- set -->



                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group">
                                <label class="form-control-label">Przydatne linki (j. angielski): </label>
                                <textarea class="summernote" name="en_links"><?php echo @$value->en_links; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group  bd-t-0-force">
                                <label class="form-control-label">Skontaktuj się z nami (j. angielski):</label>
                                <textarea class="summernote" name="en_contact"><?php echo @$value->en_contact; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force  ">
                                <label class="form-control-label">Godziny otwarcia (j. angielski):</label>
                                <textarea class="summernote" name="en_hours"><?php echo @$value->en_hours; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                    </div> <!-- set -->
                    
                    <div class="row">
                        <div class="col-md-12 pr-0">
                            <div class="form-layout-footer bd pd-20 bd-t-0-force ">
                                <button class="btn btn-info" type="submit">Zapisz</button>
                                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Anuluj</button>
                            </div><!-- form-group -->
                        </div>
                    </div>
                </div>
                
            </div><!-- row -->
          </form><!-- form-layout -->
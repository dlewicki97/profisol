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
                                <label class="form-control-label">Tytuł: <span class="tx-danger">*</span></label>
                                <textarea class="summernote" name="title"><?php echo @$value->title; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group  bd-t-0-force">
                                <label class="form-control-label">Napis na przycisku:</label>
                                <textarea class="summernote" name="button_name"><?php echo @$value->button_name; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group  bd-t-0-force">
                                <label class="form-control-label">Link przycisku:</label>
                                <textarea class="summernote" name="link"><?php echo @$value->link; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                    </div> <!-- set -->


                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group">
                                <label class="form-control-label">Tytuł (j. angielski): <span class="tx-danger">*</span></label>
                                <textarea class="summernote" name="en_title"><?php echo @$value->en_title; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group  bd-t-0-force">
                                <label class="form-control-label">Napis na przycisku (j. angielski):</label>
                                <textarea class="summernote" name="en_button_name"><?php echo @$value->en_button_name; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                        
                    </div> <!-- set -->
                    
                    <div class="row">
                        <div class="col-md-12 pr-0">
                            <div class="form-layout-footer bd pd-20 bd-t-0-force">
                                <button class="btn btn-info" type="submit">Zapisz</button>
                                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Anuluj</button>
                            </div><!-- form-group -->
                        </div>
                    </div>
                </div>
                
            </div><!-- row -->
          </form><!-- form-layout -->
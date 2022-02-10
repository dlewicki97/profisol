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
                <div class="col-md-8">
                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-r-0-force bd-b-0-force">
                                <label class="form-control-label">Co nas wyróżnia: </label>
                                <textarea class="summernote" name="special"><?php echo @$value->special; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-r-0-force bd-b-0-force">
                                <label class="form-control-label">Napis na przycisku na stronie głównej: </label>
                                <textarea class="summernote" name="button_name"><?php echo @$value->button_name; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                        
                    </div> <!-- set -->




                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-r-0-force bd-b-0-force">
                                <label class="form-control-label">Co nas wyróżnia (j. angielski): </label>
                                <textarea class="summernote" name="en_special"><?php echo @$value->en_special; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-r-0-force bd-b-0-force">
                                <label class="form-control-label">Napis na przycisku na stronie głównej (j. angielski): </label>
                                <textarea class="summernote" name="en_button_name"><?php echo @$value->en_button_name; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                        
                    </div> <!-- set -->
                   
                    <div class="row">
                        <div class="col-md-12 pr-0">
                            <div class="form-layout-footer bd pd-20 bd-r-0-force">
                                <button class="btn btn-info" type="submit">Zapisz</button>
                                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Anuluj</button>
                            </div><!-- form-group -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-12">
                        <div id="photoViewer_1" class="form-group  text-center delete_photo cursor" onclick="clear_box(1);">
                            <?php if(@$value->photo != '') {
                                echo '<img class="img-fluid img-thumbnail" src="' . base_url() . 'uploads/' . @$value->photo . '" width=75%>';
                            } else {
                                echo '<img class="img-fluid img-thumbnail" src="http://via.placeholder.com/64x64" alt="">';
                            } ?>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group  bd-t-0-force ">
                            <label class="form-control-label">Ikona pobierania:</label>
                            <input type="hidden" id="name_photo_1" name="name_photo_1">
                            <button type="button" class="btn btn-info white w-100" onclick="openModal(1);">Dodaj</button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="photoViewer_1" class="form-group  bd-b-0-force bd-t-0-force ">
                            <label class="form-control-label">Tekst alternatywny zdjęcia:</label>
                            <input class="form-control" type="text" name="alt" value="<?php echo @$value->alt; ?>">
                        </div>
                    </div>
                    <?php $names = ['Strzałka w lewo', 'Strzałka w prawo', 'Ikona wznowienia filmu', 'Ikona pełnego ekranu']; foreach($names as $i => $name): ?>
                    <div class="col-md-12">
                        <div id="photoViewer_<?= $i+2 ?>" class="form-group text-center delete_photo cursor" onclick="clear_box(<?= $i+2 ?>);">
                            <?php if(@get_object_vars(@$value)['photo'. ($i+2)] != '') {
                                echo '<img class="img-fluid img-thumbnail" src="' . base_url() . 'uploads/' . @get_object_vars(@$value)['photo'. ($i+2)] . '" width=75%>';
                            } else {
                                echo '<img class="img-fluid img-thumbnail" src="http://via.placeholder.com/64x64" alt="">';
                            } ?>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force ">
                            <label class="form-control-label"><?= $name ?>:</label>
                            <input type="hidden" id="name_photo_<?= $i+2 ?>" name="name_photo_<?= $i+2 ?>">
                            <button type="button" class="btn btn-info white w-100" onclick="openModal(<?= $i+2 ?>);">Dodaj</button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="photoViewer_<?= $i+2 ?>" class="form-group <?php if($i != count($names) -1) echo 'bd-b-0-force' ?> bd-t-0-force">
                            <label class="form-control-label"><?= $name ?> tekst alternatywny :</label>
                            <input class="form-control" type="text" name="alt<?= $i +2 ?>" value="<?php echo @get_object_vars(@$value)['alt'. $i+2]; ?>">
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div><!-- row -->
            <?php $this->load->view('back/forms/double_modal'); ?>
          </form><!-- form-layout -->
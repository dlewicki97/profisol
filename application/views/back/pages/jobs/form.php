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
                            <div class="form-group bd-b-0-force">
                                <label class="form-control-label">Stanowisko: <span class="tx-danger">*</span></label>
                                <textarea class="summernote" name="work_place"><?php echo @$value->work_place; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-6 pr-0">
                            <div class="form-group ">
                                <label class="form-control-label">Napis na przycisku 1:</label>
                                <textarea class="summernote" name="button_name1"><?php echo @$value->button_name1; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                        
                        <div class="col-md-6 px-0">
                            <div class="form-group bd-l-0-force">
                                <label class="form-control-label">Napis na przycisku 2:</label>
                                <textarea class="summernote" name="button_name2"><?php echo @$value->button_name2; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                        
                    </div> <!-- set -->
                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force ">
                                <label class="form-control-label">Krótki opis:</label>
                                <textarea class="summernote" name="short_description"><?php echo @$value->short_description; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                    </div> <!-- set -->
                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force  ">
                                <label class="form-control-label">Zarobki:</label>
                                <textarea class="summernote" name="earnings"><?php echo @$value->earnings; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                    </div> <!-- set -->
                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force bd-b-0-force">
                                <label class="form-control-label">Godziny pracy:</label>
                                <textarea class="summernote" name="hours"><?php echo @$value->hours; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                    </div> <!-- set -->








                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-b-0-force">
                                <label class="form-control-label">Stanowisko (j. angielski): <span class="tx-danger">*</span></label>
                                <textarea class="summernote" name="en_work_place"><?php echo @$value->en_work_place; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-6 pr-0">
                            <div class="form-group ">
                                <label class="form-control-label">Napis na przycisku 1 (j. angielski):</label>
                                <textarea class="summernote" name="en_button_name1"><?php echo @$value->en_button_name1; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                        
                        <div class="col-md-6 px-0">
                            <div class="form-group bd-l-0-force">
                                <label class="form-control-label">Napis na przycisku 2 (j. angielski):</label>
                                <textarea class="summernote" name="en_button_name2"><?php echo @$value->en_button_name2; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                        
                    </div> <!-- set -->
                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force ">
                                <label class="form-control-label">Krótki opis (j. angielski):</label>
                                <textarea class="summernote" name="en_short_description"><?php echo @$value->en_short_description; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                    </div> <!-- set -->
                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force  ">
                                <label class="form-control-label">Zarobki (j. angielski):</label>
                                <textarea class="summernote" name="en_earnings"><?php echo @$value->en_earnings; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                    </div> <!-- set -->
                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force bd-b-0-force">
                                <label class="form-control-label">Godziny pracy (j. angielski):</label>
                                <textarea class="summernote" name="en_hours"><?php echo @$value->en_hours; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                    </div> <!-- set -->
                    
                    <div class="row">
                        <div class="col-md-12 pr-0">
                            <div class="form-layout-footer bd pd-20 ">
                                <button class="btn btn-info" type="submit">Zapisz</button>
                                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Anuluj</button>
                            </div><!-- form-group -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-12">
                        <div id="photoViewer_1" class="form-group bd-l-0-force text-center delete_photo cursor" onclick="clear_box(1);">
                            <?php if(@$value->photo != '') {
                                echo '<img class="img-fluid img-thumbnail" src="' . base_url() . 'uploads/' . @$value->photo . '" width=75%>';
                            } else {
                                echo '<img class="img-fluid img-thumbnail" src="http://via.placeholder.com/64x64" alt="">';
                            } ?>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group bd-l-0-force bd-t-0-force ">
                            <label class="form-control-label">Zdjęcie zarobki:</label>
                            <input type="hidden" id="name_photo_1" name="name_photo_1">
                            <button type="button" class="btn btn-info white w-100" onclick="openModal(1);">Dodaj</button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="photoViewer_1" class="form-group bd-l-0-force bd-b-0-force bd-t-0-force ">
                            <label class="form-control-label">Tekst alternatywny zdjęcia zarobków:</label>
                            <input class="form-control" type="text" name="alt" value="<?php echo @$value->alt; ?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="photoViewer_2" class="form-group bd-l-0-force text-center delete_photo cursor" onclick="clear_box(2);">
                            <?php if(@$value->photo2 != '') {
                                echo '<img class="img-fluid img-thumbnail" src="' . base_url() . 'uploads/' . @$value->photo2 . '" width=75%>';
                            } else {
                                echo '<img class="img-fluid img-thumbnail" src="http://via.placeholder.com/64x64" alt="">';
                            } ?>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force bd-l-0-force">
                            <label class="form-control-label">Zdjęcie godziny pracy:</label>
                            <input type="hidden" id="name_photo_2" name="name_photo_2">
                            <button type="button" class="btn btn-info white w-100" onclick="openModal(2);">Dodaj</button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="photoViewer_2" class="form-group bd-l-0-force bd-b-0-force bd-t-0-force">
                            <label class="form-control-label">Tekst alternatywny zdjęcia godzin pracy:</label>
                            <input class="form-control" type="text" name="alt2" value="<?php echo @$value->alt2; ?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div id="photoViewer_3" class="form-group bd-l-0-force text-center delete_photo cursor" onclick="clear_box(3);">
                            <?php if(@$value->photo3 != '') {
                                echo '<img class="img-fluid img-thumbnail" src="' . base_url() . 'uploads/' . @$value->photo3 . '" width=75%>';
                            } else {
                                echo '<img class="img-fluid img-thumbnail" src="http://via.placeholder.com/64x64" alt="">';
                            } ?>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force bd-l-0-force">
                            <label class="form-control-label">Zdjęcie wymagania:</label>
                            <input type="hidden" id="name_photo_3" name="name_photo_3">
                            <button type="button" class="btn btn-info white w-100" onclick="openModal(3);">Dodaj</button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force bd-l-0-force">
                            <label class="form-control-label">Tekst alternatywny zdjęcia wymagania:</label>
                            <input class="form-control" type="text" name="alt3" value="<?php echo @$value->alt3; ?>">
                        </div>
                    </div>
                </div>
            </div><!-- row -->
            <?php $this->load->view('back/forms/double_modal'); ?>
          </form><!-- form-layout -->
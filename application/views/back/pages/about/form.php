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
                                <label class="form-control-label">Tytuł: <span class="tx-danger">*</span></label>
                                <textarea class="summernote" name="title"><?php echo @$value->title; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-6 pr-0">
                            <div class="form-group ">
                                <label class="form-control-label">Napis na przycisku:</label>
                                <textarea class="summernote" name="button_name"><?php echo @$value->button_name; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                        
                        <div class="col-md-6 px-0">
                            <div class="form-group bd-l-0-force">
                                <label class="form-control-label">Link przycisku:</label>
                                <textarea class="summernote" name="link"><?php echo @$value->link; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                        
                    </div> <!-- set -->
                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force ">
                                <label class="form-control-label">Krótki opis na stronie głównej:</label>
                                <textarea class="summernote" name="description"><?php echo @$value->description; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                    </div> <!-- set -->
                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force ">
                                <label class="form-control-label">Nasza firma:</label>
                                <textarea class="summernote" name="company"><?php echo @$value->company; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                    </div> <!-- set -->
                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force  ">
                                <label class="form-control-label">Pracownicy:</label>
                                <textarea class="summernote" name="employees"><?php echo @$value->employees; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                    </div> <!-- set -->
                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force bd-b-0-force">
                                <label class="form-control-label">Sprzęt:</label>
                                <textarea class="summernote" name="eq"><?php echo @$value->eq; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                    </div> <!-- set -->



                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-b-0-force">
                                <label class="form-control-label">Tytuł (j.angielski): <span class="tx-danger">*</span></label>
                                <textarea class="summernote" name="en_title"><?php echo @$value->en_title; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-6 pr-0">
                            <div class="form-group ">
                                <label class="form-control-label">Napis na przycisku (j.angielski):</label>
                                <textarea class="summernote" name="en_button_name"><?php echo @$value->en_button_name; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                        
                        <div class="col-md-6 px-0">
                            <div class="form-group bd-l-0-force">
                                <label class="form-control-label">Link przycisku (j.angielski):</label>
                                <textarea class="summernote" name="en_link"><?php echo @$value->en_link; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                        
                    </div> <!-- set -->
                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force ">
                                <label class="form-control-label">Krótki opis na stronie głównej (j.angielski):</label>
                                <textarea class="summernote" name="en_description"><?php echo @$value->en_description; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                    </div> <!-- set -->
                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force ">
                                <label class="form-control-label">Nasza firma (j.angielski):</label>
                                <textarea class="summernote" name="en_company"><?php echo @$value->en_company; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                    </div> <!-- set -->
                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force  ">
                                <label class="form-control-label">Pracownicy (j.angielski):</label>
                                <textarea class="summernote" name="en_employees"><?php echo @$value->en_employees; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                    </div> <!-- set -->
                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force bd-b-0-force">
                                <label class="form-control-label">Sprzęt (j.angielski):</label>
                                <textarea class="summernote" name="en_eq"><?php echo @$value->en_eq; ?></textarea>
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
                            <label class="form-control-label">Zdjęcie strona główna:</label>
                            <input type="hidden" id="name_photo_1" name="name_photo_1">
                            <button type="button" class="btn btn-info white w-100" onclick="openModal(1);">Dodaj</button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="photoViewer_1" class="form-group bd-l-0-force bd-b-0-force bd-t-0-force ">
                            <label class="form-control-label">Tekst alternatywny zdjęcia strona główna:</label>
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
                        <div class="form-group bd-l-0-force bd-t-0-force ">
                            <label class="form-control-label">Zdjęcie2 strona główna:</label>
                            <input type="hidden" id="name_photo_2" name="name_photo_2">
                            <button type="button" class="btn btn-info white w-100" onclick="openModal(2);">Dodaj</button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="photoViewer_2" class="form-group bd-l-0-force bd-b-0-force bd-t-0-force ">
                            <label class="form-control-label">Tekst alternatywny zdjęcia2 strona główna:</label>
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
                            <label class="form-control-label">Zdjęcie Nasza firma:</label>
                            <input type="hidden" id="name_photo_3" name="name_photo_3">
                            <button type="button" class="btn btn-info white w-100" onclick="openModal(3);">Dodaj</button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="photoViewer_3" class="form-group bd-l-0-force bd-b-0-force bd-t-0-force">
                            <label class="form-control-label">Tekst alternatywny zdjęcia Nasza firma:</label>
                            <input class="form-control" type="text" name="alt3" value="<?php echo @$value->alt3; ?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div id="photoViewer_4" class="form-group bd-l-0-force text-center delete_photo cursor" onclick="clear_box(4);">
                            <?php if(@$value->photo4 != '') {
                                echo '<img class="img-fluid img-thumbnail" src="' . base_url() . 'uploads/' . @$value->photo4 . '" width=75%>';
                            } else {
                                echo '<img class="img-fluid img-thumbnail" src="http://via.placeholder.com/64x64" alt="">';
                            } ?>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force bd-l-0-force">
                            <label class="form-control-label">Zdjęcie Pracownicy:</label>
                            <input type="hidden" id="name_photo_4" name="name_photo_4">
                            <button type="button" class="btn btn-info white w-100" onclick="openModal(4);">Dodaj</button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force bd-b-0-force bd-l-0-force">
                            <label class="form-control-label">Tekst alternatywny zdjęcia Pracownicy:</label>
                            <input class="form-control" type="text" name="alt4" value="<?php echo @$value->alt4; ?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div id="photoViewer_5" class="form-group bd-l-0-force text-center delete_photo cursor" onclick="clear_box(5);">
                            <?php if(@$value->photo5 != '') {
                                echo '<img class="img-fluid img-thumbnail" src="' . base_url() . 'uploads/' . @$value->photo5 . '" width=75%>';
                            } else {
                                echo '<img class="img-fluid img-thumbnail" src="http://via.placeholder.com/64x64" alt="">';
                            } ?>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force bd-l-0-force">
                            <label class="form-control-label">Zdjęcie Sprzęt:</label>
                            <input type="hidden" id="name_photo_5" name="name_photo_5">
                            <button type="button" class="btn btn-info white w-100" onclick="openModal(5);">Dodaj</button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force bd-l-0-force">
                            <label class="form-control-label">Tekst alternatywny zdjęcia Sprzęt:</label>
                            <input class="form-control" type="text" name="alt5" value="<?php echo @$value->alt5; ?>">
                        </div>
                    </div>
                </div>
            </div><!-- row -->
            <?php $this->load->view('back/forms/double_modal'); ?>
          </form><!-- form-layout -->
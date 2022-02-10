    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="pd-30">
        <h4 class="tx-gray-800 mg-b-5">Co nas wyróznia - <?= $offer->title ?></h4>
        <p class="mg-b-0"><?php echo subtitle(); ?></p>
        <hr>
      </div><!-- d-flex -->

      <div class="br-pagebody mg-t-0 pd-x-30">
        <?php if(isset($_SESSION['flashdata'])): ?>
        <div id="alert-box"><?php echo $_SESSION['flashdata']; ?></div>
        <?php endif; ?>

          <form class="form-layout form-layout-2" action="<?php echo base_url(); ?>panel/<?php echo $this->uri->segment(2); ?>/action/<?php echo $this->uri->segment(4) . '/' . $this->uri->segment(2); ?>/<?php echo $offer->id. '/'. @$value->id; ?>" method="post"  enctype="multipart/form-data">

            <div class="row no-gutters">
                <div class="col-md-8">
                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-r-0-force">
                                <label class="form-control-label">Tytuł: <span class="tx-danger">*</span></label>
                                <textarea class="summernote" name="title"><?php echo @$value->title; ?></textarea>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-r-0-force">
                                <label class="form-control-label">Tytuł (j. angielski): <span class="tx-danger">*</span></label>
                                <textarea class="summernote" name="en_title"><?php echo @$value->en_title; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-12 pr-0">
                                <div class="form-group bd-t-0-force bd-r-0-force">
                                    <label class="form-control-label mg-b-0-force">Oferta: <span class="tx-danger">*</span></label>
                                    <select id="select-kategoria" class="form-control select2-show-search w-100" name="offer_id" data-placeholder="Wybierz ofertę" required>
                                        <option label="Wybierz ofertę"></option>
                                        <?php foreach($offers as $offer): ?>
                                            <option value="<?= $offer->id ?>" <?php if(@$value->offer_id == $offer->id) echo 'selected'; elseif($offer->id == $this->uri->segment(5)) echo 'selected' ?>>
                                                <?= $offer->title ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                    </div> <!-- set -->
                    
                    <div class="row">
                        <div class="col-md-12 pr-0">
                            <div class="form-layout-footer bd pd-20 bd-t-0-force bd-r-0-force">
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
                            <label class="form-control-label">Zdjęcie:</label>
                            <input type="hidden" id="name_photo_1" name="name_photo_1">
                            <button type="button" class="btn btn-info white w-100" onclick="openModal(1);">Dodaj</button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="photoViewer_1" class="form-group bd-t-0-force ">
                            <label class="form-control-label">Tekst alternatywny zdjęcia:</label>
                            <input class="form-control" type="text" name="alt" value="<?php echo @$value->alt; ?>">
                        </div>
                    </div>
                    
                </div>
                
            </div><!-- row -->
            <?php $this->load->view('back/forms/double_modal'); ?>
          </form><!-- form-layout -->
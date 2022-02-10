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
                    <div class="row"> 
                        <div class="col-md-6 pr-0">
                            <div class="form-group">
                                <label class="form-control-label">Tytuł: <span class="tx-danger">*</span></label>
                                <textarea class="summernote" name="title"><?php echo @$value->title; ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6 px-0">
                            <div class="form-group bd-l-0-force bd-r-0-force">
                                <label class="form-control-label">Tytuł opisu:</label>
                                <textarea class="summernote" name="title_description"><?php echo @$value->title_description; ?></textarea>
                            </div>
                        </div>
                    </div> 
                    <div class="row"> 
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force bd-r-0-force">
                                <label class="form-control-label">Krótki opis:</label>
                                <textarea class="summernote" name="description"><?php echo @$value->description; ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force bd-b-0-force bd-r-0-force">
                                <label class="form-control-label">Napis na przycisku (zostaw puste, aby schować przycisk):</label>
                                <textarea class="summernote" name="button_name"><?php echo @$value->button_name; ?></textarea>
                            </div>
                        </div>
                    </div>




                    <div class="row"> 
                        <div class="col-md-6 pr-0">
                            <div class="form-group">
                                <label class="form-control-label">Tytuł (j. angielski): <span class="tx-danger">*</span></label>
                                <textarea class="summernote" name="en_title"><?php echo @$value->en_title; ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6 px-0">
                            <div class="form-group bd-l-0-force bd-r-0-force">
                                <label class="form-control-label">Tytuł opisu (j. angielski):</label>
                                <textarea class="summernote" name="en_title_description"><?php echo @$value->en_title_description; ?></textarea>
                            </div>
                        </div>
                    </div> 
                    <div class="row"> 
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force bd-r-0-force">
                                <label class="form-control-label">Krótki opis (j. angielski):</label>
                                <textarea class="summernote" name="en_description"><?php echo @$value->en_description; ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force bd-b-0-force bd-r-0-force">
                                <label class="form-control-label">Napis na przycisku (zostaw puste, aby schować przycisk) (j. angielski):</label>
                                <textarea class="summernote" name="en_button_name"><?php echo @$value->en_button_name; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 pr-0">
                            <div class="form-layout-footer bd pd-20 bd-r-0-force">
                                <button class="btn btn-info" type="submit">Zapisz</button>
                                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Anuluj</button>
                            </div>
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
                        <div id="photoViewer_1" class="form-group  bd-b-0-force bd-t-0-force ">
                            <label class="form-control-label">Tekst alternatywny zdjęcia:</label>
                            <input class="form-control" type="text" name="alt" value="<?php echo @$value->alt; ?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="photoViewer_2" class="form-group  text-center delete_photo cursor" onclick="clear_box(2);">
                            <?php if(@$value->photo2 != '') {
                                echo '<img class="img-fluid img-thumbnail" src="' . base_url() . 'uploads/' . @$value->photo2 . '" width=75%>';
                            } else {
                                echo '<img class="img-fluid img-thumbnail" src="http://via.placeholder.com/64x64" alt="">';
                            } ?>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force ">
                            <label class="form-control-label">Zdjęcie 2:</label>
                            <input type="hidden" id="name_photo_2" name="name_photo_2">
                            <button type="button" class="btn btn-info white w-100" onclick="openModal(2);">Dodaj</button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="photoViewer_2" class="form-group  bd-t-0-force">
                            <label class="form-control-label">Tekst alternatywny zdjęcia 2:</label>
                            <input class="form-control" type="text" name="alt2" value="<?php echo @$value->alt2; ?>">
                        </div>
                    </div>
                    
                    

                    <div class="col-md-12">
                        <div class="form-group  bd-t-0-force">
                            <?php if(@$value->file): ?>
                                <div style="display: flex" class="file-placeholder justify-content-between">
                                    <a download href="<?php echo base_url(). 'uploads/'. @$value->file ?>"><?= explode('/', @$value->file)[1]  ?></a>

                                    <span style="cursor: pointer;" onclick="deleteFile(<?= $value->id ?>)" class="tx-danger">Usuń</span>
                                </div>
                            <?php endif; ?>
                            <label id="infoFile1" class="form-control-label"></label>
                            <label class="form-control-label">Plik:</label>
                            <input type="hidden" id="name_file_1" name="name_file_1">
                            <label class="custom-file">
                                <input type="file" id="file_1" class="custom-file-input" name="file_1" onchange="uploadFile(1);">
                                <span class="custom-file-control custom-file-control-inverse"></span>
                            </label>
                        </div>
                    </div><!-- col-12 -->



                    <?php if(empty(@$video)):?>
                        <div class="col-md-12">
                            <div class="form-group  bd-t-0-force <?php if(!empty(@$video)) echo 'bd-b-0-force' ?>  ">
                                <label id="infoFile2" class="form-control-label"></label>
                                <label class="form-control-label">Film:</label>
                                <label class="custom-file">
                                    <input multiple type="file" id="video" class="custom-file-input" name="video" onchange="uploadFile(2);">
                                    <span class="custom-file-control custom-file-control-inverse"></span>
                                </label>
                            </div>
                        </div><!-- col-12 -->
                    <?php endif; ?>
                    <?php if(!empty(@$video)):?>
                        <div class="col-md-12">
                            <div class="form-group bd-t-0-force ">
                                <label class="form-control-label mb-0">Wrzucony film:
                                    <div class="d-flex align-items-end mt-2">
                                        <div class="d-flex flex-column align-items-center  mr-2">
                                            <?php
                                            $full_path = explode('/', $video[0]->full_path);
                                            $path = $full_path[count($full_path) - 2] . '/'. $full_path[count($full_path) - 1];
                                            ?>
                                            <video controls width="100%" height="100%" src="<?php echo base_url(); ?>uploads/<?php echo $path ?>"></video>
                                            <p style="cursor: pointer" class="tx-danger mb-0 mt-1" onclick="deleteVideo('<?= $video[0]->id ?>')">Usuń</p>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </div><!-- row -->
            <?php $this->load->view('back/forms/double_modal'); ?>
        </form><!-- form-layout -->


        <script>
            function uploadFile(n) {
                document.getElementById('infoFile' + n).innerHTML = '<span class="text-center"><i class="fas fa-spinner fa-pulse loader"></i></span>';
                setTimeout(function(){
                    document.getElementById('infoFile' + n).innerHTML = '<span class="text-success"><i class="fas fa-check"></i> Plik został przygotowany do wysłania</span>';
                }, 200);
            }
            function deleteVideo(id) {
                if(!confirm('Czy na pewno usunąć film?')) return;
                $.ajax({
                    type: "post",
                    url:"<?php echo base_url(); ?>panel/offers/delete_video",
                    data: {id:id},
                    cache: false,
                    complete: function(html) {
                        location.reload();
                    }
                });
            }

            function deleteFile(id) {
                if(!confirm('Czy na pewno usunąć plik?')) return;
                document.getElementsByClassName('file-placeholder')[0].style.display = 'none';
                document.getElementById('name_file_1').value = 'usunięte';
            }
        </script>
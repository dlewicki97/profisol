<section class="realizations-page">
    <ul class="nav nav-tabs nav-justified realizations-tabs" role="tablist">
        <?php foreach($realizations_categories as $i => $category): ?>
            <li class="nav-item">
                <a class="nav-link realization-category-tab <?php if($i == 0) echo 'active' ?>" data-toggle="tab" href="#panel<?= $category->id ?>" role="tab"><?= lang($category, 'title') ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
    <div class="tab-content p-0">
        <?php foreach($realizations_categories as $i => $category): ?>
            <div class="tab-pane realizations-pane fade in <?php if($i == 0) echo 'show active' ?>" id="panel<?= $category->id ?>" role="tabpanel">
                <?php $row = 0; foreach($realizations as $j => $realization): ?>
                    <?php if($realization->realizations_category_id == $category->id): ?>
                        <div class="col-12 col-lg-3 p-2 wow fadeInLeft" data-wow-delay="<?= 0.0 + $row/10  ?>s">
                            <div class="bg-picture lazy realizations-categories-photo" title="<?= $realization->alt ?>" data-bg="<?= file_url(). $realization->photo ?>">
                                <a data-lcl-title="<?= lang($realization, 'title') ?>" data-lcl-txt="<?= lang($realization, 'subtitle') ?>" class="elem-<?= $realization->id ?>" href="<?= file_url(). $realization->photo ?>">
                                    <div class="mask">
                                        <h4 class="realizations-title"><img class="lazy mr-2" width="auto" height="15px" data-src="<?= file_url(). $realizations_descriptions->photo ?>" alt="<?= $realizations_descriptions->alt ?>"><?= lang($realization, 'title') ?></h4>
                                        <div class="realizations-subtitle"><?= lang($realization, 'subtitle') ?></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php foreach($realizations_galleries[$realization->id] as $photo): ?>
                            <a class="elem-<?= $realization->id ?>" href="<?= file_url(). $photo->photo ?>"></a>
                        <?php endforeach; ?>
                    <?php endif; ?>

                <?php if($row == 3) $row = 0; else $row++; endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>
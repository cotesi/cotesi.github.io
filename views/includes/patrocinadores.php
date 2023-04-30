<?php foreach($patrocinadores as $key => $patrocinador) : ?>
    <div class="col-md col-6">
        <div>
            <div class="sponsors">
                <a href="<?= $patrocinador->url ?>" target="_blank">
                    <img src="<?= '/public/images/patrocinadores/' . $patrocinador->logo ?>" alt="<?= $patrocinador->name ?>">
                </a>
            </div>
        </div>
    </div>
<?php endforeach; ?>
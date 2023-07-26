<?php require'sidebar.php'; ?>

<!--Conteúdo da Página--> 
<section class="page-container">
    <div class="page-content-wrapper">

        <!--Conteúdo Principal-->

 <div class="content sm-gutter">
            <div class="container-fluid padding-25 sm-padding-10">
                <div class="row">
                    <div class="col-12">
                        <div class="block-heading d-flex align-items-center title-pages">
                            <h5 class="text-truncate">Novo Exercício</h5>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-block mb-4">

<form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" novalidate>


<div class="form-row">
    <div class="form-group col-md-12">
        <div class="block col-md-12" style="padding-bottom: 35px">

        <label class="control-label">Título</label>
        <input type="text" value="" maxlength="80" placeholder="Título" name="exercise_title" class="form-control" required="">

        <label class="control-label">Parte do Corpo</label>
        <select multiple="multiple" class="my-select form-control" name="bodypart_id[]" required="">
            <?php foreach($bodyparts_lists as $bodyparts_list): ?>
            <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $bodyparts_list['bodypart_image']; ?>" value="<?php echo $bodyparts_list['bodypart_id']; ?>"><?php echo $bodyparts_list['bodypart_title']; ?></option>
            <?php endforeach; ?>
        </select>

        <label class="control-label">Equipamento</label>
        <select class="form-control" name="exercise_equipment" required="">
            <?php foreach($equipments_lists as $equipments_list): ?>
            <option value="<?php echo $equipments_list['equipment_id']; ?>"><?php echo $equipments_list['equipment_title']; ?></option>
            <?php endforeach; ?>
        </select>

        <label class="control-label">Nível</label>
        <select class="form-control" name="exercise_level" required="">
            <?php foreach($levels_lists as $levels_list): ?>
            <option value="<?php echo $levels_list['level_id']; ?>"><?php echo $levels_list['level_title']; ?></option>
            <?php endforeach; ?>
        </select>

        <label class="control-label">Descanso</label>
        <input type="text" value="" placeholder="Descanso" name="exercise_rest" class="form-control" required="">

        <label class="control-label">Séries</label>
        <input type="text" value="" placeholder="Séries" name="exercise_sets" class="form-control" required="">

        <label class="control-label">Repetições</label>
        <input type="text" value="" placeholder="Repetições" name="exercise_reps" class="form-control" required="">

        <label class="control-label">URL do Vídeo (MP4)</label>
        <input type="text" value="" placeholder="URL do Vídeo (MP4)" name="exercise_video" class="form-control" required="">

        <label class="control-label">Instruções</label>
        <textarea value="" name="exercise_instructions" class="advancedtinymce form-control" id="instructions" required=""></textarea>

        <label class="control-label">Dicas</label>
        <textarea value="" name="exercise_tips" class="advancedtinymce form-control" id="tips" required=""></textarea>

        <label class="control-label">Imagem</label>
        <div class="new-image" id="image-preview">
            <label for="image-upload" id="image-label">Escolher Ficheiro</label>
            <input type="file" name="exercise_image" id="image-upload" required="" />
        </div>

        <span class="text-danger recomendedsize">Tamanho recomendado: <b>550 x 350</b> </span>
        <br/>
        <br/>

        <div class="action-button">
            <input type="submit" name="save" value="Submeter" class="btn btn-embossed btn-primary">
            <input type="reset" name="reset" value="Redefinir" class="btn btn-embossed btn-danger">
        </div>

        </div>
    </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

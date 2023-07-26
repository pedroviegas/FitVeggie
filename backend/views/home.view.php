<?php require'../controller/sidebar.php'; ?>  

<!--Container da Página-->
<section class="page-container">
    <div class="page-content-wrapper">

        <!--Conteúdo Principal-->
        <div class="content sm-gutter">
            <div class="container-fluid padding-25 sm-padding-10">
                <div class="row">

                    <div class="col-12">
                        <div class="section-title">
                            <h4>Secções</h4>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="block counter-block mb-4">
                            <div class="value"><?php echo $exercises_total; ?></div>
                            <i class="dripicons-stopwatch i-icon"></i>
                            <p class="label">Exercícios</p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="block counter-block mb-4">
                            <div class="value"><?php echo $workouts_total; ?></div>
                            <i class="dripicons-to-do i-icon"></i>
                            <p class="label">Treinos</p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="block counter-block mb-4">
                            <div class="value"><?php echo $bodyparts_total; ?></div>
                            <i class="dripicons-user i-icon"></i>
                            <p class="label">Partes do Corpo</p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="block counter-block mb-4">
                            <div class="value"><?php echo $equipments_total; ?></div>
                            <i class="dripicons-lifting i-icon"></i>
                            <p class="label">Equipamentos</p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="block counter-block mb-4">
                            <div class="value"><?php echo $levels_total; ?></div>
                            <i class="dripicons-pulse i-icon"></i>
                            <p class="label">Níveis</p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="block counter-block mb-4">
                            <div class="value"><?php echo $goals_total; ?></div>
                            <i class="dripicons-trophy i-icon"></i>
                            <p class="label">Objetivos</p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="block counter-block mb-4">
                            <div class="value"><?php echo $diets_total; ?></div>
                            <i class="dripicons-cutlery i-icon"></i>
                            <p class="label">Receitas</p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="block counter-block mb-4">
                            <div class="value"><?php echo $posts_total; ?></div>
                            <i class="dripicons-article i-icon"></i>
                            <p class="label">Publicações</p>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="section-title">
                            <h4>Resumo</h4>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="block table-block mb-4">
                            <div class="block-heading d-flex align-items-center" style="border:0; padding-bottom: 0;">
                                <h5 class="text-truncate">Exercícios</h5>
                                <div class="graph-pills graph-home">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active active-2" href="../controller/exercises.php">Ver Todos <i class="fa fa-angle-right" style="margin-left: 5px"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <?php echo $exercises_latest; ?>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="block table-block mb-4">
                            <div class="block-heading d-flex align-items-center" style="border:0; padding-bottom: 0;">
                                <h5 class="text-truncate">Publicações Recentes</h5>
                                <div class="graph-pills graph-home">
                                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active active-2" href="../controller/posts.php">Ver Todos <i class="fa fa-angle-right" style="margin-left: 5px"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        <?php echo $posts_latest; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require'../controller/footer.php'; ?>


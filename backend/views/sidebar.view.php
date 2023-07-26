<nav id="navigation" class="navigation-sidebar bg-primary">
        <div class="navigation-header">
        <a href="<?php echo SITE_URL ?>"><img src="../assets/images/fitveggie.png" style="max-width: 130px;"></a>
    </div>

    <div class="welcome">
        Bem vindo, <b><?php echo $user['manager_name']; ?></b> <a href="../controller/logout.php" class="sidebar-user"><i class="dripicons-exit"></i></a>
    </div>

    <!--Navigation Menu Links-->
    <div class="navigation-menu">

        <ul class="menu-items custom-scroll">

            <li>
                <a href="javascript:void(0);" class="have-submenu <?php showMenu('exercises.php');?>">
                    <span class="icon-thumbnail"><i class="dripicons-stopwatch"></i></span>
                    <span class="title">Exercícios</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu" style="display: <?php activePage('exercises.php');?>">

                    <li>
                        <a href="../controller/exercises.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Mostrar Todos</span>
                        </a>
                    </li>

                    <li>
                        <a href="../controller/new_exercise.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Novo Exercício</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" class="have-submenu <?php showMenu('workouts.php');?>">
                    <span class="icon-thumbnail"><i class="dripicons-to-do"></i></span>
                    <span class="title">Treinos</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu" style="display: <?php activePage('workouts.php');?>">

                    <li>
                        <a href="../controller/workouts.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Mostrar Todos</span>
                        </a>
                    </li>

                    <li>
                        <a href="../controller/new_workout.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Novo Treino</span>
                        </a>
                    </li>

                </ul>
            </li>


            <li>
                <a href="javascript:void(0);" class="have-submenu <?php showMenu('bodyparts.php');?>">
                    <span class="icon-thumbnail"><i class="dripicons-user"></i></span>
                    <span class="title">Partes do corpo</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu" style="display: <?php activePage('bodyparts.php');?>">

                    <li>
                        <a href="../controller/bodyparts.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Mostrar Todos</span>
                        </a>
                    </li>

                    <li>
                        <a href="../controller/new_bodypart.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Novas Partes do corpo</span>
                        </a>
                    </li>

                </ul>
            </li>


            <li>
                <a href="javascript:void(0);" class="have-submenu <?php showMenu('equipments.php');?>">
                    <span class="icon-thumbnail"><i class="dripicons-lifting"></i></span>
                    <span class="title">Equipamentos</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu" style="display: <?php activePage('equipments.php');?>">

                    <li>
                        <a href="../controller/equipments.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Mostrar Todos</span>
                        </a>
                    </li>

                    <li>
                        <a href="../controller/new_equipment.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Novo Equipamento</span>
                        </a>
                    </li>

                </ul>
            </li>


            <li>
                <a href="javascript:void(0);" class="have-submenu <?php showMenu('levels.php');?>">
                    <span class="icon-thumbnail"><i class="dripicons-pulse"></i></span>
                    <span class="title">Níveis</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu" style="display: <?php activePage('levels.php');?>">

                    <li>
                        <a href="../controller/levels.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Mostrar Todos</span>
                        </a>
                    </li>

                    <li>
                        <a href="../controller/new_level.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Novo Nível</span>
                        </a>
                    </li>

                </ul>
            </li>


            <li>
                <a href="javascript:void(0);" class="have-submenu <?php showMenu('goals.php');?>">
                    <span class="icon-thumbnail"><i class="dripicons-trophy"></i></span>
                    <span class="title">Metas</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu" style="display: <?php activePage('goals.php');?>">

                    <li>
                        <a href="../controller/goals.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Mostrar Todos</span>
                        </a>
                    </li>

                    <li>
                        <a href="../controller/new_goal.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Nova Meta</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" class="have-submenu <?php showMenu('recipes.php');?>">
                    <span class="icon-thumbnail"><i class="dripicons-cutlery"></i></span>
                    <span class="title">Receitas</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu" style="display: <?php activePage('recipes.php');?>">

                    <li>
                        <a href="../controller/recipes.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Mostrar Todos</span>
                        </a>
                    </li>

                    <li>
                        <a href="../controller/new_recipe.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Nova Receita</span>
                        </a>
                    </li>

                </ul>
            </li>


            <li>
                <a href="javascript:void(0);" class="have-submenu <?php showMenu('categories.php');?>">
                    <span class="icon-thumbnail"><i class="dripicons-folder"></i></span>
                    <span class="title">Categorias</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu" style="display: <?php activePage('categories.php');?>">

                    <li>
                        <a href="../controller/categories.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Mostrar Todos</span>
                        </a>
                    </li>

                    <li>
                        <a href="../controller/new_category.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Nova Categoria</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" class="have-submenu <?php showMenu('posts.php');?>">
                    <span class="icon-thumbnail"><i class="dripicons-article"></i></span>
                    <span class="title">Postagens</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu" style="display: <?php activePage('posts.php');?>">

                    <li>
                        <a href="../controller/posts.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Mostrar Todos</span>
                        </a>
                    </li>

                    <li>
                        <a href="../controller/new_post.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Nova Postagem</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" class="have-submenu <?php showMenu('tags.php');?>">
                    <span class="icon-thumbnail"><i class="dripicons-bookmarks"></i></span>
                    <span class="title">Tags</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu" style="display: <?php activePage('tags.php');?>">

                    <li>
                        <a href="../controller/tags.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Mostrar Todos</span>
                        </a>
                    </li>

                    <li>
                        <a href="../controller/new_tag.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Nova Tag</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" class="have-submenu <?php showMenu('products.php');?>">
                    <span class="icon-thumbnail"><i class="dripicons-cart"></i></span>
                    <span class="title">Produtos afiliados</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu" style="display: <?php activePage('products.php');?>">

                    <li>
                        <a href="../controller/products.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Mostrar Todos</span>
                        </a>
                    </li>

                    <li>
                        <a href="../controller/new_product.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Novo Produtos afiliados</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" class="have-submenu <?php showMenu('types.php');?>">
                    <span class="icon-thumbnail"><i class="dripicons-bookmarks"></i></span>
                    <span class="title">Tipos de produtos</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu" style="display: <?php activePage('types.php');?>">

                    <li>
                        <a href="../controller/types.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Mostrar Todos</span>
                        </a>
                    </li>

                    <li>
                        <a href="../controller/new_type.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Novos Tipos de produtos</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" class="have-submenu <?php showMenu('managers.php');?>">
                    <span class="icon-thumbnail"><i class="dripicons-user"></i></span>
                    <span class="title">Gerentes</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu" style="display: <?php activePage('managers.php');?>">

                    <li>
                        <a href="../controller/managers.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Mostrar Todos</span>
                        </a>
                    </li>

                    <li>
                        <a href="../controller/new_manager.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Novo Gerente</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="../controller/users.php">
                    <span class="icon-thumbnail"><i class="dripicons-user-group"></i></span>
                    <span class="title">Utilizadores</span>
                </a>
            </li>

            <li>
                <a href="../controller/strings.php">
                    <span class="icon-thumbnail"><i class="dripicons-document-edit"></i></span>
                    <span class="title">Strings</span>
                </a>
            </li>

        </div>
    </div>
</ul>
</div>

</nav>

<div class="header fixed-header">
            <div class="container-fluid side-padding">
                <div class="row">
                    <div class="col-7 col-md-6 d-lg-none">
                        <a id="toggle-navigation" href="javascript:void(0);" class="icon-btn mr-3"><i class="fa fa-bars"></i></a>
                        <img src="../assets/images/fitveggie.png" class="logo-side-dark">
                    </div>
                    <div class="col-lg-8 d-none d-lg-block">
                        <p class="sidebar-relative">Bem vindo, <b><?php echo $user['manager_name']; ?></b> <a href="../controller/logout.php" class="sidebar-logout"><i class="dripicons-exit"></i></a></p>
                    </div>
                    
                </div>
            </div>
        </div>
<?php require'../controller/sidebar.php'; ?>  

<!--Page Container-->
<section class="page-container">
    <div class="page-content-wrapper">

        <!--Main Content-->
        <div class="content sm-gutter">
            <div class="container-fluid padding-25 sm-padding-10">
                <div class="row">

                    <div class="col-12">
                        <div class="section-title">
                            <h4>Sections</h4>
                        </div>
                    </div>

                    <?php 
                    $elements = array("exercises", "workouts", "bodyparts", "equipments", "levels", "goals", "diets", "posts");
                    $icons = array("stopwatch", "to-do", "user", "lifting", "pulse", "trophy", "cutlery", "article");

                    for($i=0; $i<count($elements); $i++) { ?>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="block counter-block mb-4">
                                <div class="value"><?php echo ${$elements[$i].'_total'}; ?></div>
                                <i class="dripicons-<?php echo $icons[$i]; ?> i-icon"></i>
                                <p class="label"><?php echo ucfirst($elements[$i]); ?></p>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="col-12">
                        <div class="section-title">
                            <h4>Summary</h4>
                        </div>
                    </div>

                    <?php 
                    $elements = array("exercises", "workouts", "posts", "diets");
                    $headers = array("Exercises", "Workouts", "Posts", "Recipes");
                    $icons = array("cog", "cog", "cog", "cog");

                    for($j=0; $j<count($elements); $j++) { ?>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="block table-block mb-4">
                                <div class="block-heading d-flex align-items-center" style="border:0; padding-bottom: 0;">
                                    <h5 class="text-truncate"><?php echo $headers[$j]; ?></h5>
                                    <div class="graph-pills graph-home">
                                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active active-2" href="../controller/<?php echo $elements[$j]; ?>.php">View All <i class="fa fa-angle-right" style="margin-left: 5px"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="custom-scroll" style="max-height: 250px;">
                                    <div class="table-responsive text-no-wrap">
                                        <table class="table">
                                            <tbody class="text-middle">
                                            <?php foreach(array_slice(${$elements[$j]}, 0, 5) as $element): ?>
                                            <tr>
                                                <td class="product">
                                                    <img class="product-img" src="../images/<?php echo $element[$elements[$j].'_image']; ?>">
                                                </td>
                                                <td class="name"><span class="span-title"><?php echo $element[$elements[$j].'_title']; ?></span></td>
                                                <td class="price price-td-home"><a href="../controller/edit_<?php echo $elements[$j]; ?>.php?id=<?php echo $element[$elements[$j].'_id']; ?>"><i class="fa fa-<?php echo $icons[$j]; ?> a-i-color"></i></a> <a style="cursor: pointer;" onclick="alertdelete_<?php echo $elements[$j][0].$element[$elements[$j].'_id']; ?>();"><i class="fa fa-trash-o a-i-color"></i></a></td>
                                            </tr>

                                <script type="text/javascript">
                                  function alertdelete_<?php echo $elements[$j][0].$element[$elements[$j].'_id']; ?>() {
                                  swal({ title: "Are you sure?", text: "You will not be able to recover this item!", type: "warning",cancelButtonClass: "btn-default btn-sm", showCancelButton: true, confirmButtonClass: "btn-danger btn-sm", confirmButtonText: "Yes, delete it!", closeOnConfirm: false }, function(){window.location.href = "../controller/delete_<?php echo $elements[$j]; ?>.php?id=<?php echo $element[$elements[$j].'_id']; ?>" });}
                                </script>

                                <?php endforeach; ?>
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                           </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!--End Page Container-->

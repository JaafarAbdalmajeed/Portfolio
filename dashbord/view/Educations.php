
<?php
    require_once('../../Backend/config/db.php');
    require_once('../../Backend/controllers/Educations.php');

    $userHandler = new Educations($conn);

    $educations = $userHandler->getEducationsByUserId(1);
    if(!$educations) {
        return ;
    }
?>



    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Educations</h6>
                </div>
                </div>
                <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                        
                        <?php
                            $educationsKeys = array_keys($educations[0]);
                            for($i = 0; $i < count($educationsKeys); $i++){
                                $columnName = $educationsKeys[$i];
                                if ($educations[0][$columnName]) {
                                    ?>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><h6><?php echo $columnName?></h6></th>
                                    <?php
                                }
                            }
                            ?>
                        <th class="text-secondary opacity-7"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($j = 0; $j < count($educations); $j++) {
                        ?>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm"><?php echo $educations[$j]['education']; ?></h6>
                                        </div>
                                    </div>
                                </td>

                                <?php
                                $educationsKeys = array_keys($educations[$j]);
                                for ($i = 0; $i < count($educationsKeys); $i++) {
                                    $columnName = $educationsKeys[$i];
                                    if ($educations[$j][$columnName]) {
                                ?>
                                        <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo $educations[$j][$columnName] ?></td>
                                <?php
                                    }
                                }
                                ?>
                                <td class="align-middle">
                                    <a href="../crud/education/updateEducation.php?userId=<?php echo $educations[$j]['user_id']?>&id=<?php echo $educations[$j]['id']?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                        Update
                                    </a>
                                </td>

                                <td class="align-middle">
                                    <a href="../crud/education/deleteEducation.php?userId=<?php echo $educations[$j]['user_id']?>&id=<?php echo $educations[$j]['id']?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                        Delete
                                    </a>
                                </td>

                                <td class="align-middle">
                                    <a href="../crud/education/createEducation.php?userId=<?php echo $educations[$j]['user_id']?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                        Create
                                    </a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>

                    </table>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
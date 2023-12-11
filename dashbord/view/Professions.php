
<?php
    require_once('../../Backend/config/db.php');
    require_once('../../Backend/controllers/Professions.php');
    
    $userHandler = new Professions($conn);

    $professions = $userHandler->getProfessions(1);
?>



    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Profession</h6>
                </div>
                </div>
                <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                        
                        
                        <?php
                            $professionsKeys = array_keys($professions[0]);
                            for($i = 0; $i < count($professionsKeys); $i++){
                                $columnName = $professionsKeys[$i];
                                if ($professions[0][$columnName]) {
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
                        for ($j = 0; $j < count($professions); $j++) {
                        ?>
                            <tr>

                                <?php
                                $professionsKeys = array_keys($professions[$j]);
                                for ($i = 0; $i < count($professionsKeys); $i++) {
                                    $columnName = $professionsKeys[$i];
                                    if ($professions[$j][$columnName]) {
                                ?>
                                        <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo $professions[$j][$columnName] ?></td>
                                <?php
                                    }
                                }
                                ?>
                                <td class="align-middle">
                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                        Edit
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

<?php
    require_once('../../Backend/config/db.php');
    require_once('../../Backend/controllers/Skills.php');

    $skillHandler = new Skills($conn);

    $skills = $skillHandler->getSkillsByUserId(1);
    if(!$skills) {
        return ;
    }
?>



    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Skills</h6>
                </div>
                </div>
                <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                        
                        
                        <?php
                            $skillsKeys = array_keys($skills[0]);
                            for($i = 0; $i < count($skillsKeys); $i++){
                                $columnName = $skillsKeys[$i];
                                if ($skills[0][$columnName]) {
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
                        for ($j = 0; $j < count($skills); $j++) {
                        ?>
                            <tr>

                                <?php
                                $skillsKeys = array_keys($skills[$j]);
                                for ($i = 0; $i < count($skillsKeys); $i++) {
                                    $columnName = $skillsKeys[$i];
                                    if ($skills[$j][$columnName]) {
                                ?>
                                        <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo $skills[$j][$columnName] ?></td>
                                <?php
                                    }
                                }
                                ?>
                                <td class="align-middle">
                                    
                                    <a href="../crud/skill/updateSkill.php?skillId=<?php echo $skills[$j]['id']?>&userId=<?php echo $skills[$j]['user_id']?>" class="text-white btn btn-primary text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                        Update
                                    </a>
                                    
                                    <a href="../crud/skill/deleteSkill.php?skillId=<?php echo $skills[$j]['id']?>&userId=<?php echo $skills[$j]['user_id']?>" class="text-white btn btn-primary text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                        Delete
                                    </a>
                                    
                                    <a href="../crud/skill/createSkill.php?userId=<?php echo $skills[$j]['user_id']?>" class="text-white btn btn-primary text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
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
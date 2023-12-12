
<?php
    require_once('../../Backend/config/db.php');
    require_once('../../Backend/controllers/Project.php');

    $userHandler = new Project($conn);

    $projects = $userHandler->getProjectsByUserId(1);
?>




    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Projects</h6>
                </div>
                </div>
                <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                        
                        <?php
                            $projectsKeys = array_keys($projects[0]);
                            for($i = 0; $i < count($projectsKeys); $i++){
                                $columnName = $projectsKeys[$i];
                                if ($projects[0][$columnName]) {
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
                        for ($j = 0; $j < count($projects); $j++) {
                        ?>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm"><?php echo $projects[$j]['project_name']; ?></h6>
                                        </div>
                                    </div>
                                </td>

                                <?php
                                $projectsKeys = array_keys($projects[$j]);
                                for ($i = 0; $i < count($projectsKeys); $i++) {
                                    $columnName = $projectsKeys[$i];
                                    if ($projects[$j][$columnName]) {
                                ?>
                                        <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo $projects[$j][$columnName] ?></td>
                                <?php
                                    }
                                }
                                ?>
                                <td class="align-middle">
                                    <a href="../crud/project/updateProject.php?projectId=<?php echo $projects[$j]['id']?>&userId=<?php echo $projects[$j]['user_id']?>" class=" text-white btn btn-primary text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                        Edit
                                    </a>
                                    <a href="../crud/project/deleteProject.php?projectId=<?php echo $projects[$j]['id']?>&userId=<?php echo $projects[$j]['user_id']?>" class="text-white btn btn-primary text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                        Delete
                                    </a>
                                    <a href="../crud/project/createProject.php?userId=<?php echo $projects[$j]['user_id']?>" class="text-white btn btn-primary text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                        create
                                        
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
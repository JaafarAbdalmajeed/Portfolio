
<?php
    require_once('../../Backend/config/db.php');
    require_once('../../Backend/controllers/User.php');

    $userHandler = new User($conn);
    $users = $userHandler->getUserAuth('jaafarabdalmajead@gmail.com','$2y$10$Fx3nLNn23lfGJejlxO7Pc.v6Yf2dRcRcZ.Ru6lgz76B2fjWyIA8LO');
    if(!$users) {
        return ;
    }
?>



    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a href="../crud/user/createUser.php" class="text-white btn btn-primary text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Create
                            </a>
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3"><?php echo $users['name']; ?></h6>
                </div>
                </div>
                <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                        
                        <?php
                            foreach(array_keys($users) as $columnName) {
                                if($columnName !== 'password' && $users[$columnName]) {
                                    ?>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo $columnName?></th>
                                    <?php

                                }
                            }
                            ?>
                        <th class="text-secondary opacity-7"></th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>

                        <td>
                            <div class="d-flex px-2 py-1">
                            <div>
                                <img src="../../uploads/user images/<?php $users['image']?>" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm"><?php echo $users['name']; ?></h6>
                                <p class="text-xs text-secondary mb-0"><?php echo $users['email']; ?></p>
                            </div>
                            </div>
                        </td>
                        
                                                    <?php
                            foreach(array_keys($users) as $columnName) {
                                if($columnName !== 'password' && $users[$columnName]) {
                                    ?>                              
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?php echo $users[$columnName]?></p>
                                        </td>
                                        <?php
                                            }
                                        }
                                        ?>
                        <td class="align-middle">
                            <a href="../crud/user/updateUser.php?id=<?php echo $users['id'];?>" class="text-white btn btn-primary text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Update
                            </a>
                            <a href="../crud/user/deleteUser.php?id=<?php echo $users['id'];?>" class="text-white btn btn-primary text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Delete
                            </a>
                            
                        </td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
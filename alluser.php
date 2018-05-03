<!-- Example DataTables Card-->

<?php
include_once('header.php');
?>

     <div class="card mb-3">
       <div class="card-header">
         <i class="fa fa-table"></i> รายชื่อผู้สมัคร</div>
       <div class="card-body">
         <div class="table-responsive">
           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
             <thead>
               <tr>
                 <th>ชื่อ</th>
                 <th>นามสกุล</th>
                 <th>สาขา</th>
               </tr>
             </thead>

             <tbody>
               <?php

               $result1 = $auth_user->showUserAll();
               foreach($result1 as $row) {
                 echo  "
                <tr>
                  <td>".$row['th_name']."</td>
                  <td>".$row['th_lname']."</td>
                  <td>".$row['major_n']."</td>
                 </tr>";

                }
                ?>


             </tbody>
           </table>
         </div>
       </div>
       <div class="card-footer small text-muted">อัพเดต วันนี้ เวลา 11:59 PM</div>
     </div>

     <?php
     include_once('footer.php');
     ?>

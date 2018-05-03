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
                 <th>ชื่อสาขา</th>
                 <th>จำนวนผู้สมัคร</th>
               </tr>
             </thead>

             <tbody>
               <?php

               $result1 = $auth_user->showMajor();
               foreach($result1 as $row) {
                $result2 = $auth_user->courseReg($row['major_id']);
                $te = $result2->fetch(PDO::FETCH_ASSOC);
                 echo  "
                <tr>
                  <td>".$row['major_n']."</td>
                  <td>".$te['reg_std']
                  ."</td>
                 </tr>";


             }?>


             </tbody>
           </table>
         </div>
       </div>
       <div class="card-footer small text-muted"></div>
     </div>

     <?php
     include_once('footer.php');
     ?>

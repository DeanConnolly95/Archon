<!-- 
    ArchonPrime PHP Website Template
   Copyright 2016 Dean Connolly

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.

!-->
<?php
    require "core/head.php";
    include "core/navbar.php";
?>
    <div class="container">
        <!-- CONTENT DIV (LEFT) !-->
        <div class="col-md-9">
            <?php
              // Set the default name
              $action = 'intro';
              // Specify some disallowed paths
              $disallowed_paths = array('header', 'footer', 'admin', 'config', 'data', 'users');
              if (!empty($_GET['action'])) {
                $tmp_action = basename($_GET['action']);
                // If it's not a disallowed path, and if the file exists, update $action
                if (!in_array($tmp_action, $disallowed_paths) && file_exists("interfaces/{$tmp_action}.php"))
                  $action = $tmp_action;
                }
              // Include $action
              include("interfaces/$action.php");
            ?>
        </div>

        <!-- SPACER DIV (RIGHT) !-->
        <div class="col-md-3">
            <?php
                include "interfaces/login.php";
            ?>
        </div>
    </div>
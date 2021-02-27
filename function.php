<?php
function alert($text,$type){
switch ($type){
    case 'success':
        echo "
         <div class='alert alert-success alert-dismissible fade show' role='alert'>
          $text
         <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
         </div>
        ";
        break;
    case  'error':
        echo "
         <div class='alert alert-danger alert-dismissible fade show' role='alert'>
          .$text.
         <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
         </div>
        ";
        break;
}

}
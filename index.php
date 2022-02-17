<?php 
require "vendor/autoload.php";
use App\Controller\NoteController;
$notecontroller = new NoteController;
$page = $_GET['page'] ?? "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="index.php?page=note-list">List</a>
<a href="index.php?page=note-create">Create</a>
    <?php
    switch($page){
        case "note-list":
            $notecontroller->showAllNote();
            break;
            case"note-create":
                if($_SERVER["REQUEST_METHOD"]=="GET"){
                    $notecontroller->showFormCreate();
                }else{
                    $notecontroller->createNote($_POST);
                }
                break;
                case "note-delete":
                    $notecontroller->deleteNote($_REQUEST['id']);
                    break;
                    case "note-update":
                        if($_SERVER["REQUEST_METHOD"]=="GET"){
                            $notecontroller->showFormUpdate();
                        }else{
                            $notecontroller->updateNote($_POST,$_REQUEST['id']);
                        }
                        
                        break;
                        case "note-detail":
                            $notecontroller->detailNote();
                            break;


            default:
    }
    ?>    
</body>
</html>
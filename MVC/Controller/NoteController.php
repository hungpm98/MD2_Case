<?php

namespace App\Controller;

use App\Model\NoteModel;

class NoteController
{
    public $noteModel;
    public function __construct()
    {
        $this->noteModel = new NoteModel;
    }
    public function showAllNote(){
        $notes = $this->noteModel->getAll();
        include "MVC/View/Note/list.php";
    }
    public function showFormCreate(){
        include "MVC/View/Note/create.php";

    }
    public function createNote($request){
        $this->noteModel->create($request);
        header("location:index.php?page=note-list");
    }
    public function deleteNote($id){
        $this->noteModel->deleteById($id);
    }
    public function showFormUpdate(){
       $notes = $this->noteModel->getById($_GET["id"]);
        include "MVC/View/Note/update.php";
    }
    public function updateNote($request,$id){
        $this->noteModel->update($request,$id);
        header("location:index.php?page=note-list");
    }
    public function detailNote(){
       $notes =  $this->noteModel->getById($_GET['id']);
        include "MVC/View/Note/detail.php";
    }
}

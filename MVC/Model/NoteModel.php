<?php 
namespace App\Model;

use PDO;

class NoteModel extends BaseModel{
    public $table = "notes";
    public function create($data){
        $sql = "insert into $this->table (title,content,category_id) values (?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$data['title']);
        $stmt->bindParam(2,$data['content']);
        $stmt->bindParam(3,$data['category_id']);
        $stmt->execute();
    }
    public function update($data,$id){
        $sql ="update $this->table set title = ?, content =?,category_id =? where id = $id ";
        $stmt =$this->connect->prepare($sql);
        $stmt->bindParam(1,$data['title']);
        $stmt->bindParam(2,$data['content']);
        $stmt->bindParam(3,$data['category_id']);
        $stmt->execute();

    }
    public function getAll()
    {
        $sql = "select notes.id as id,notes.title as title,notes.content as content,notes.category_id as category_id ,categories.name as name, categories.description as description 
        from notes join categories on notes.category_id = categories.id";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}

?>
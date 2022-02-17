<?php 
namespace App\Model;
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
}

?>
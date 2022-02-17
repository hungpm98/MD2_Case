<form action="" method="POST">
   Title <input type="text" name="title" value="<?php echo $notes->title?>">
    Content <input type="text" name="content" value="<?php echo $notes->content?>" >
    Category_id <input type="text" name="category_id" value="<?php echo $notes->category_id?>">
    <button>Update</button>
</form>
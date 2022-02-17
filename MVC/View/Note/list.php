<table border="1">
    <thead>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
        <th>Category_id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
        <?php foreach($notes as $note): ?>
            <tr>
                <td><?php echo $note->id?></td>
                <td><?php echo $note->title?></td>
                <td><?php echo $note->content?></td>
                <td><?php echo $note->category_id?></td>
               <td><a onclick="return confirm('Are you sure?')" href="index.php?page=note-delete&id=<?php echo $note->id?>">Delete</a></td> 
            
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>
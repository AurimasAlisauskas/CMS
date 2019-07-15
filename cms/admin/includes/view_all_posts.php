<?php ob_start(); ?>
<?php

include("delete_modal.php");

if (isset($_POST['checkBoxArray'])){
    foreach($_POST['checkBoxArray'] as $postValueId){
       $bulk_options = $_POST['bulk_options'];
       switch($bulk_options){
               case 'published':
               $query = "UPDATE posts SET post_status = '{$bulk_options}' WHERE post_id = {$postValueId} ";
               $update_to_published_status = mysqli_query($connection, $query);
               confirmQuery($update_to_published_status);
               break;

               case 'draft':
               $query = "UPDATE posts SET post_status = '{$bulk_options}' WHERE post_id = {$postValueId} ";
               $update_to_draft_status = mysqli_query($connection, $query);
               confirmQuery($update_to_draft_status);
               break;

               case 'delete':
               $query = "DELETE FROM posts WHERE post_id = {$postValueId} ";
               $delete_post = mysqli_query($connection, $query);
               confirmQuery($delete_post);
               break;

               case 'clone':
                $query = "SELECT * FROM posts WHERE post_id = '$postValueId'";
                $select_post_query = mysqli_query ($connection, $query);

                while ($row = mysqli_fetch_array($select_post_query)) {
                $post_id = $row['post_id'];
                $post_author = $row['post_author'];
                $post_title = $row['post_title'];
                $post_category_id = $row['post_category_id'];
                $post_status = $row['post_status'];
                $post_image = $row['post_image'];
                $post_tags = $row['post_tags'];
                $post_content = $row['post_content'];
                $post_date = $row['post_date'];
                }

                $query = "INSERT INTO posts (post_category_id, post_title, post_author, post_date, post_image, post_content,
                post_tags, post_status)";
                $query .= "VALUES ({$post_category_id}, '{$post_title}', '{$post_author}', now(), '{$post_image}', '{$post_content}',
                '{$post_tags}', '{$post_status}')";

                $copy_query = mysqli_query($connection, $query);

                confirmQuery($copy_query);
               break;
    }
    }
}
?>

  <form action="" method="post">
   <table class="table table-hover table-bordered">
   <div class="row">
   <div id="bulkOptionsContainer" class="col-xs-4">
       <select class="form-control" name="bulk_options" id="">
           <option value="">Select Option</option>
           <option value="published">Publish</option>
           <option value="draft">Draft</option>
           <option value="delete">Delete</option>
           <option value="clone">Clone</option>
       </select>
   </div>
   <div>
       <input type="submit" name="submit" class="btn btn-success" value="Apply">
       <a class="btn btn-primary" href="posts.php?source=add_post">Add new</a>
   </div>
   </div>

    <thead>
        <tr>
            <th><input id="selectAllBoxes" type="checkbox"></th>
            <th>Id</th>
            <th>User</th>
            <th>Title</th>
            <th>Category</th>
            <th>Status</th>
            <th>Image</th>
            <th>Tags</th>
            <th>Comments</th>
            <th>Date</th>
            <th>Reads</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>

    <?php
    $query = "SELECT * FROM posts ORDER BY post_id DESC";
    $select_posts = mysqli_query ($connection, $query);

    while ($row = mysqli_fetch_assoc($select_posts)) {
        $post_id = $row['post_id'];
        $post_author = $row['post_author'];
        $post_user = $row['post_user'];
        $post_title = $row['post_title'];
        $post_category_id = $row['post_category_id'];
        $post_status = $row['post_status'];
        $post_image = $row['post_image'];
        $post_tags = $row['post_tags'];
        $post_comment_count = $row['post_comment_count'];
        $post_date = $row['post_date'];
        $post_views_count = $row['post_views_count'];

        echo "<tr>";
        ?>
        <td><input class="checkBoxes" type="checkbox" name="checkBoxArray[]" value="<?php echo "$post_id" ?>"></td>
        <?php
        echo "<td>{$post_id}</td>";

        if (!empty($post_author)){
            echo "<td>{$post_author}</td>";
        }elseif (!empty($post_user)){
            echo "<td>{$post_user}</td>";
        }

        echo "<td>{$post_title}</td>";

            $query = "SELECT * FROM categories WHERE cat_id = $post_category_id ";
            $select_categories_id = mysqli_query ($connection, $query);

            while ($row = mysqli_fetch_assoc($select_categories_id)) {
            $cat_id = $row['cat_id'];
            $cat_title = $row['cat_title'];

        echo "<td>{$cat_title}</td>";

            }

        echo "<td>{$post_status}</td>";
        echo "<td><img width='100' src='../images/$post_image'></td>";
        echo "<td>{$post_tags}</td>";

        $query = "SELECT * FROM comments WHERE comment_post_id = $post_id";
        $send_comment_query = mysqli_query($connection, $query);
        $row = mysqli_fetch_array($send_comment_query);
        $comment_id = $row['comment_id'];
        $count_comments = mysqli_num_rows($send_comment_query);

        echo "<td><a href='post_comments.php?id=$post_id'>{$count_comments}</a></td>";

        echo "<td>{$post_date}</td>";
        echo "<td>{$post_views_count}</td>";
        echo "<td><a href='../post.php?&p_id={$post_id}'>View Post</a></td>";
        echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";
        echo "<td><a rel='$post_id' href='javascript:void(0)' class='delete_link'>Delete</a></td>";
    //echo "<td><a onClick=\"javascript: return confirm('Are You Sure You Want to Delete This?'); \" href='posts.php?delete={$post_id}'>Delete</a></td>";
        echo "</tr>";
    }
    ?>

</tbody>
</table>
</form>

<?php deletePost(); ?>

<script>
$(document).ready(function(){
    $(".delete_link").on('click', function(){
        var id = $(this).attr("rel");
        var delete_url = "posts.php?delete="+ id +" ";
        $(".modal_delete_link").attr("href", delete_url);
        $("#myModal").modal('show');
    });
});
</script>

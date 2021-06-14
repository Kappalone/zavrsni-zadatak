<?php ?>

<div class="blog-post-comments"> 
    <h5>Komentari</h5>
    <ul>
        
        <?php 
            $commentsql = "SELECT * FROM comments WHERE post_id = $id";
            $comments = getDataFromDatabase($connection, $commentsql);
            foreach ($comments as $comment) {
            ?>
            <li>
                <span> Postavio: <strong><?php echo $comment['author']?> </strong></span>
                <div>
                    <?php echo $comment['text']?>
                </div>
        
                </li>
            <br>
            <?php }?>
    </ul>
</div>
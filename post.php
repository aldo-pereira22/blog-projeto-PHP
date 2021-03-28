<?php
    include_once("templates/header.php");


    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;
        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }

?>

    <main id="post-container">
        
        <div class="content-container">
            <h1 id="main-title">
                <?= $currentPost['title'] ?>
            </h1>
                <p id="post-description"> <?= $currentPost['description'] ?> </p>
                <div class="img-container">
                    <img src="img/<?=$post['img']?>" alt="<?=$currentPost['img'] ?>">
                </div>


            <p class="post-content">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Nostrum minus sequi nobis ullam voluptatibus vitae dolores
                aspernatur autem eaque enim laborum ducimus illum, distinctio
                debitis possimus? Id quod deserunt voluptatibus!
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Nostrum minus sequi nobis ullam voluptatibus vitae dolores
                aspernatur autem eaque enim laborum ducimus illum, distinctio
                debitis possimus? Id quod deserunt voluptatibus!

                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Nostrum minus sequi nobis ullam voluptatibus vitae dolores
                aspernatur autem eaque enim laborum ducimus illum, distinctio
                debitis possimus? Id quod deserunt voluptatibus!
            </p>
            <P class="#post-content">


                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Nostrum minus sequi nobis ullam voluptatibus vitae dolores
                aspernatur autem eaque enim laborum ducimus illum, distinctio
                debitis possimus? Id quod deserunt voluptatibus!
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Nostrum minus sequi nobis ullam voluptatibus vitae dolores
                aspernatur autem eaque enim laborum ducimus illum, distinctio
                debitis possimus? Id quod deserunt voluptatibus!
                
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Nostrum minus sequi nobis ullam voluptatibus vitae dolores
                aspernatur autem eaque enim laborum ducimus illum, distinctio
                debitis possimus? Id quod deserunt voluptatibus!
                
            </P>
                        
        </div>

        

            <aside id="nav-container">

                <h3 id="tags-title"> Tags </h3>
                <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>    
                        <li> 
                            <a href="#"> <?= $tag?> </a>

                        </li>    
                    <?php endforeach; ?>
                </ul>

                <h3 id="categories-title"> Categorias</h3>
                <ul id="categories-list">
                    <?php foreach($categories as $category): ?>    
                        <li> 
                            <a href="#"> <?= $category?> </a>

                        </li>    
                    <?php endforeach; ?>
                </ul>

            </aside>
    </main>




    

<?php
    include_once("templates/footer.php")
?> 

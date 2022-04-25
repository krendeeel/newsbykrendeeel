<h1><?php echo htmlspecialchars_decode($news['title']);?></h1>
<hr />
<section>
    <?php
        echo strval($news['content']); 
    ?>
</section>
<hr/>
<div class="exit">
    
    <h3>
        <a href="/news"> Все новости >> </a>
    </h3> 
    
</div>

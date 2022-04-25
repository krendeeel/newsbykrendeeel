
    <h1>Новости</h1>
    <hr />
    <section>
        <?php foreach ($news as $oneNews): ?>
            <article>
                <div>
                    <span class="date">
                        <?php echo date('d.m.Y', $oneNews['idate']); ?>
                    </span>
                    <a href=<?php echo '/news/view?id='.$oneNews['id']; ?> >
                        <?php
                            echo htmlspecialchars_decode($oneNews['title']);
                        ?>
                    </a>
                </div>
                    <p>
                        <?php echo htmlspecialchars_decode($oneNews['announce']); ?>
                    </p>
            </article>
        <?php endforeach; ?>
    </section>
    <hr />
    <section>
        <h3>Страницы:</h3>
        <ul class="pagination">
            <?php foreach (range(1, $pages) as $page): ?> 
                <li class=<?php echo $currentPage == $page ? "activepage" : "page" ?>>
                    <a 
                        style="text-decoration: none; color: inherit; border: none;" 
                        href=<?php echo '/news?page='.$page; ?> 
                    >
                        <?php echo $page; ?>
                    </a>   
            </li>
            <?php endforeach; ?>
            </ul>
    </section>

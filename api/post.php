<?php
include_once("templates/header.php");

if (isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {

        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}
?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere cumque sint officia dicta fugit necessitatibus, iusto aliquam porro, perferendis animi debitis labore repellendus provident vel voluptate dignissimos saepe dolor veritatis!
            Consequuntur ipsam eos error architecto fuga non facilis odit, molestiae quisquam eligendi ad labore minus voluptate consectetur nostrum, doloribus inventore quas! Amet atque ipsa maiores accusamus sunt sit voluptates voluptatibus?
            Error voluptas iure, itaque cumque odit a quia, maiores molestias, quae hic quis dicta nihil ab libero maxime. Quae vel accusantium temporibus perferendis placeat quisquam illum eos odit quibusdam nesciunt!
            Deserunt expedita rerum inventore ad molestiae repellat iste quae explicabo saepe quo, ratione harum minus sit assumenda natus consectetur doloremque pariatur excepturi, earum fuga necessitatibus animi quasi! Accusantium, suscipit nam?
            Iure beatae doloribus eius nihil neque explicabo enim, asperiores impedit repellendus id eaque sapiente dolorum voluptatem nulla, natus iste error repudiandae? Eius molestiae dolorum obcaecati. Blanditiis eaque tempora fuga architecto.
        </p>
    </div>
    <aside id="nav-container">
        <h3 id="tag-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentPost['tags'] as $tag) : ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category) : ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>

<?php
include_once("templates/footer.php");
?>
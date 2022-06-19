<?php foreach ($category as $cat): ?>
<a href='http://localhost/category/<?= $cat['id'] ?>'>
    <?= $cat['id'] ?> <?= $cat['category'] ?>
</a>
    <br>
<?php endforeach; ?>


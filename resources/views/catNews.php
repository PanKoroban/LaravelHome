<?php foreach ($news as $n): ?>
    <div>
        <a href="http://localhost/news/<?= $n['id'] ?>"><h3> №<?= $n['id'] ?> <?= $n['name'] ?></h3></a>
        <p><?= $n['text'] ?></p>
    </div>
<br><br>
<?php endforeach; ?>


<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>

<form action="/news/create" method="post">
    <?= csrf_field() ?>

    <label for="title">Title</label>
    <input type="input" name="title" placeholder="Blog Title" /><br />

    <label for="body">Text</label>
    <textarea name="body" cols="45" rows="4" placeholder="Blog body"></textarea><br />

    <input type="submit" name="submit" value="Create news item" />
</form>
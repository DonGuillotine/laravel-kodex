<h1><?php echo $heading ?></h1>
<?php foreach($jobs as $job): ?>
    <h2><?php echo $job['title'] ?></h2>
    <p><?php echo $job['description'] ?></p>
<?php endforeach; ?>
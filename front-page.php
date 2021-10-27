<?php
get_header();


$title = get_field('title');
$description = get_field('description');
$link = get_field('page_link');
$heroImageArray = get_field('image');
?>

<h1 class="display-1"><?php echo $title; ?></h1>
<?php echo $description; ?>
<button type="button" class="btn btn-outline-light">
<a style="text-decoration: none; color: white"href="<?php echo $link['url']; ?>">
<?php echo $link['title']; ?>

<?php
get_footer();
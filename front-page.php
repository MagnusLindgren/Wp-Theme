<?php
get_header();
# Declarations
$title = get_field('title');
$description = get_field('description');
$link = get_field('page_link');
$heroImageArray = get_field('image');
$heroImage = $heroImageArray['sizes']['large'];
?>

<div class="container">
    <h1 class="display-1"><?php echo $title; ?></h1>
    <div class="row">
        <div class="col-sm my-5">
            <?php echo $description; ?>
        </div>
        <div class="col-sm my-5">
            <img class=" img-fluid front-page-image" src="<?php echo $heroImage; ?>">
            <div class="mx-auto mt-5" style="width: 200px;">
                <button type="button" class="btn btn-outline-light text-center">
                    <a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>        
                </button>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
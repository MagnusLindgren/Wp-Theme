<?php
get_header();

$about_title = get_field('about_title');
$about_desc = get_field('about_description');
$aboutImageArray = get_field('about_image');
$aboutImage = $aboutImageArray['sizes']['medium'];
$aboutEmail = get_field('about_email');
?>
<div class="container">
    <h1 class="display-1"><?php echo $about_title; ?></h1>
    <div class="row">
        <div class="col-sm">
            <?php echo $about_desc; ?>
        </div>
        <div class="col-sm">
            <img class=" img-fluid front-page-image" src="<?php echo $aboutImage; ?>">
            <div class="row">
            Contact Info:
            <a href="mailto:<?php echo $aboutEmail; ?>"><?php echo $aboutEmail; ?></a>
            </div>
        </div>
        
    </div>
    
</div>

<?php
get_footer();
<nav class="navbar nav">

<?php 
$args = [
   'theme_location' => 'primary',
];
$siteLogo = get_custom_logo();

$logoArgs = [

];
?>
<?php echo wp_kses($siteLogo, $logoArgs) ?>
<?php wp_nav_menu($args) ?>
</nav>
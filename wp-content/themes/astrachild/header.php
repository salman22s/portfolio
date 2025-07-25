<!-- <!DOCTYPE html> -->
<?php wp_head(); ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<div class="navbar-container">
    <div class="logo">
        <a href="<?php echo home_url(); ?>">
            <img src="https://i.pinimg.com/736x/b3/8e/7a/b38e7a0904dbfc2bd42aa32bd3e7515c.jpg" alt="Logo"
                class="logo-img">
            <p>Salman</p>
        </a>
    </div>

    <!-- Navigation Menu -->
    <?php
  wp_nav_menu(array(
      'theme_location' => 'navmenu',
      'menu_class'     => 'navbar',
  ));
  ?>
    <button id="hamburgerBtn">☰</button>

</div>

<div id="mobileNav">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'mobilemenu',
        'menu_class'     => 'mobilemenu',
));
?>
</div>
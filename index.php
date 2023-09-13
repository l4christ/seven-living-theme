<?php
get_header();

?>

<h1 class="hero-content">
                Coming Soon
            </h1>

            <div class="scroll-down">
                <svg class="feather feather-chevron-down" fill="none" height="50" stroke="#fff" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="50"
                    xmlns="http://www.w3.org/2000/svg">
                    <polyline points="6 9 12 15 18 9" />
                </svg>
            </div>
        </div>
    </section>
    <section class="content">
        <p>
            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </p>

        <span class="border"></span>

        <div class="contact-info">
            <div class="contact-details">
                <img src="<?php echo get_theme_file_uri('/icons/phone.svg') ?>" alt="phone">
                <span></span>0121 468 3264</span>
            </div>
            <div class="contact-details">
                <img src="<?php echo get_theme_file_uri('/icons/email.svg') ?>" alt="email">
                <span>hello@sevenliving.com</span>
            </div>
            <div class="contact-details">
                <img src="<?php echo get_theme_file_uri('/icons/location.svg') ?>" alt="location">
                <span>97 Park Lane, London, W1K 7TG</span>
            </div>
        </div>
    </section>
    <section class="contact-us">
        <div class="form-container">
            <h2>Send us a message</h2>
            <form action="">
                <div class="input-group">
                    <input type="text" placeholder="Name">
                    <input type="text" placeholder="Email address">
                </div>
                <textarea placeholder="Your message" cols="30" rows="10"></textarea>
            </form>
        </div>

<?php
get_footer();
?>
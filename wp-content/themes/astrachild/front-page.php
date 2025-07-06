<?php
    // front-page
    get_header(); 
?>

<div class='parent'>
    <div class='intro' id="home">

        <div class='introTxt'>
            <h1>Hi, I am Salman.</h1>
            <h2>A Wordpress developer.</h2>
            <p><?php echo esc_html(get_field('introduction')); ?></p>
            <button class = 'btn-secondary' >Get In Touch</button>
        </div>
        <div class='introImg'>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/static/boy.avif" alt="hello">
        </div>
    </div>
    <hr>

    <!--About Section-->

    <section class="section about" id="about" aria-label="about">

        <div class="container">

            <div class="wrapper">
                <div class="aboutContent" id = 'about'>
                    <div class="aboutText">
                        <h2>What I Do?</h2>

                        <p><?php echo esc_html(get_field('whatido')); ?></p>
                    </div>

                    <div class='aboutImg'>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/static/languages.jpg" alt="hello">
                    </div>
                </div>

                <div class="strength" id = 'skills'>
                    <h2>My Strength</h2>
                    <br>
                    <ul class="progress-list" data-reveal="right">

                        <li class="progress-item">

                            <div class="label-wrapper">
                                <p>Frontend Development</p>

                                <span class="span">90 %</span>
                            </div>

                            <div class="progress">
                                <div class="progress-fill" style="width: 90%; background-color: #c7b1dd"></div>
                            </div>

                        </li>

                        <li class="progress-item">

                            <div class="label-wrapper">
                                <p>Responsive & Pixel Perfect Development</p>

                                <span class="span">100 %</span>
                            </div>

                            <div class="progress">
                                <div class="progress-fill" style="width: 100%; background-color: #8caeec"></div>
                            </div>

                        </li>

                        <li class="progress-item">

                            <div class="label-wrapper">
                                <p>Custom Tempelates and Themes</p>

                                <span class="span">80 %</span>
                            </div>

                            <div class="progress">
                                <div class="progress-fill" style="width: 80%; background-color: #b0d4c1"></div>
                            </div>

                        </li>

                        <li class="progress-item">

                            <div class="label-wrapper">
                                <p>SQL</p>

                                <span class="span">70 %</span>
                            </div>

                            <div class="progress">
                                <div class="progress-fill" style="width: 70%; background-color: #e3a6b6"></div>
                            </div>

                        </li>

                        <li class="progress-item">

                            <div class="label-wrapper">
                                <p>Backend</p>

                                <span class="span">60 %</span>
                            </div>

                            <div class="progress">
                                <div class="progress-fill" style="width: 60%; background-color: #e3a6b6"></div>
                            </div>

                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </section>
    <!-- education siection -->
    <div class="educationParent" id="education">
        <h1>Have A look on my Educational Background</h1>
        <div class="education" >
            <div class='educationImg'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/static/graduation.jpg" alt="hello">
            </div>
            <div class="degree">
                <h3>
                    Bachelor of Science in Computer Science (BSCS)
                </h3>
                <h3>
                    University of Management & Technology (UMT)
                </h3>
            </div>
            <p><?php echo esc_html(get_field('graduationbriefe')); ?></p>

        </div>


        <div class="education">
            <div class='educationImg'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/static/school.jpg" alt="hello">
            </div>
            <div class="degree">
                <h3>
                    GCE Advanced Level (A-Level)
                </h3>
                <h3>
                    Lahore Learning Campus (LLC), Lahore
                </h3>

            </div>
            <p><?php echo esc_html(get_field('highschoolbriefe')); ?></p>

        </div>


        <div class="education">
            <div class='educationImg'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/static/school2.jpg" alt="hello">
            </div>
            <div class="degree">
                <h3>
                    GCE Ordinary Level (O Level)
                </h3>
                <h3>
                    Lahore Learning Campus (LLC), Lahore
                </h3>

            </div>

            <p><?php echo esc_html(get_field('schoolbriefe')); ?></p>

        </div>


    </div>
    <!--CONTACT-->
    <hr>
    <section class="section contact" id="contact" aria-label="contact">

        <div class="contactMe">
            <div class="contact-card">
                <h2 class="h2 section-title">If you like what you see, let's work together.</h2>

                <p class="section-text">
                    I bring rapid solutions to make the life of my clients easier. Have any questions? Reach out
                    to me
                    from
                    this contact form and I will get back to you shortly.
                </p>

                <div class="image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/static/boy3.jpg" alt="Hello">
                </div>

            </div>

            <div>
                <form action="" class="contact-form" data-reveal="right">

                    <div class="input-wrapper">
                        <input type="text" name="name" placeholder="Name *" required class="input-field">

                        <input type="email" name="email_address" placeholder="Email *" required class="input-field">
                    </div>

                    <textarea name="message" placeholder="Message *" required class="input-field"></textarea>

                    <button type="submit" class="btn btn-secondary">Send message</button>

                </form>
            </div>

        </div>
        <div class='contactInfo'>
            <div class='contactDetail'>
                <h3>Call Me</h3>
                <p>+92 335 4738362</p>
            </div>
            <div class='contactDetail'>
                <h3>M Email</h3>
                <p>ss69salman@gmail.com</p>
            </div>
            <div class='contactDetail'>
                <h3>Visit M LinkedIn Profile </h3>
                <a href="https://www.linkedin.com/in/salman2210" >
                    <p>Salman Siddiq</p>
                </a>
            </div>
        </div>
    </section>
    
</div>


<?php get_footer(); ?>

<?php /* Template Name: Full Page */ ?>
<?php
get_header();
?>

<?php if ( have_rows( 'blocks' ) ): ?>
	<?php while ( have_rows( 'blocks' ) ): the_row(); ?>
		<?php if ( get_row_layout() == 'block-title' ): ?>
			<?php if ( have_rows( 'text' ) ): ?>

				<?php while ( have_rows( 'text' ) ): the_row();
					$contenttitle = get_sub_field( 'h1-title' );
					$contenttext  = get_sub_field( 'sub-title' );
					$buttontext   = get_sub_field( 'text' );
					$link         = get_sub_field( 'link' );
					?>
				<?php endwhile; ?>
			<?php endif; ?>
            <section style="margin-bottom: 5rem">
                <!--title+subtitle-->
                <div class="container-fluid">
                    <div class="flex-box">
                        <h1 class="title  typing-demo"> <?php echo $contenttitle ?> </h1>
                        <h3 class="sub-title"><?php echo $contenttext ?></h3>
                    </div>
                </div>
                <!--buttons-->
                <div class="buttons">
                    <a href="<?php echo $link['url'] ?>"
                       class="button">
						<?php echo $buttontext ?>
                    </a>
                </div>
            </section>
		<?php endif; ?>
        <!--Skills-->
		<?php if ( get_row_layout() == 'block-skills' ): ?>
			<?php if ( have_rows( 'skills' ) ): ?>
				<?php while ( have_rows( 'skills' ) ): the_row();
					$skilltitle      = get_sub_field( 'skills-title' );
					$skilltext       = get_sub_field( 'skill-sub-title' );
					$skillbuttontext = get_sub_field( 'cv-text' );
					$skilllink       = get_sub_field( 'cv-link' );
					$images          = get_sub_field( 'image' );
					$skillpicture    = $images['sizes']['large']; ?>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php if ( have_rows( 'lists-group' ) ): ?>
				<?php while ( have_rows( 'lists-group' ) ): the_row();
					$skilllist  = get_sub_field( 'lists' );
					$skilllist2 = get_sub_field( 'lists2' );
					$skilllist3 = get_sub_field( 'lists3' );
					?>
				<?php endwhile; ?>
			<?php endif; ?>
            <section>
                <div class="flex-container">
                    <div id="about" class="container-fluid">
                        <div class="flex-box">
                            <h1 class="title"> <?php echo $skilltitle ?> </h1>
                            <h3 class="sub-title"><?php echo $skilltext ?></h3>

                            <div class="lists">
								<?php echo $skilllist ?>
								<?php echo $skilllist2 ?>
								<?php echo $skilllist3 ?>
                            </div>
                            <img class="img-mobile img-fluid" src="<?php echo $skillpicture ?>">
                            <div class="skillbuttons">
                                <a class="skillbutton" target="_blank" href="<?php echo $skilllink['url'] ?>">
									<?php echo $skillbuttontext ?>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="img-box">
                        <img class="img-fluid" src="<?php echo $skillpicture ?>">
                    </div>
                </div>
            </section>
		<?php endif; ?>

        <!--Project-->
		<?php if ( get_row_layout() == 'block-project' ): ?>
			<?php if ( have_rows( 'project' ) ): ?>
				<?php while ( have_rows( 'project' ) ): the_row();
					$projecttitle   = get_sub_field( 'project-title' );
					$projectdetails = get_sub_field( 'project-sub-title' );
					$img            = get_sub_field( 'project-image' );
					$side =             get_sub_field( 'image-position' );
					$projectimage   = $img['sizes']['large']; ?>
					<?php if ( $side == 'left' ): ?>
                    <section id="projects" class="projects">
                        <div class="work container-fluid">
                            <div class="container-work">
                                <div class="left"><img class="img-fluid" src="<?php echo $projectimage ?>"></div>
                                <div class="right">
                                    <div class="content">
                                        <h1><?php echo $projecttitle ?></h1>
                                        <p><?php echo $projectdetails ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
					<?php else: ?>
                        <section class="projects">
                            <div class="work container-fluid">
                                <div class="container-work">
                                    <div class="right-side">
                                        <div class="content">
                                            <h1><?php echo $projecttitle ?></h1>
                                            <p><?php echo $projectdetails ?></p>
                                        </div>
                                    </div>
                                    <div class="left"><img class="img-fluid" src="<?php echo $projectimage ?>"></div>
                                </div>
                            </div>
                        </section>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
		<?php endif; ?>
		<?php if ( get_row_layout() == 'block-title-section' ): ?>
			<?php if ( have_rows( 'title-repeater' ) ): ?>
				<?php while ( have_rows( 'title-repeater' ) ): the_row();
					$titleproject   = get_sub_field( 'title' );
				 ?>
                    <section  class="title-project">
                        <div class=" container-fluid">
                            <div class="flex-box">
                        <h1 id="#projects" class="title"><?php echo $titleproject; ?></h1>
                            </div>
                        </div>
                    </section>
				<?php endwhile; ?>
			<?php endif; ?>
		<?php endif; ?>

<!--    contact-->
		<?php if ( get_row_layout() == 'block-contact' ): ?>
			<?php if ( have_rows( 'contact' ) ): ?>
				<?php while ( have_rows( 'contact' ) ): the_row();
					$contacttitle      = get_sub_field( 'contact-title' );
					$contacttext       = get_sub_field( 'contact-sub-title' );
					$contactbuttontext = get_sub_field( 'contact-text' );
					$contactlink       = get_sub_field( 'contact-link' );
					?>
                    <section  class="title-project">
                        <div class=" container-fluid">
                            <div class="flex-box">
                                <section>
                                    <div class="flex-container">
                                        <div id="contact" class="container-fluid">
                                            <div class="flex-box-contact">
                                                <h1 class="title"> <?php echo $contacttitle ?> </h1>
                                                <h3 class="sub-title"><?php echo $contacttext ?></h3>
                                                <div class="skillbuttons">
                                                    <a class="skillbutton" target="_blank" href="<?php echo $contactlink['url'] ?>">
							                            <?php echo $contactbuttontext ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </section>
				<?php endwhile; ?>
			<?php endif; ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>
    <!--Footer-->
<?php
get_footer();
?>
<?php /* Template Name: Home */
get_header();
?>
<main id="primary" class="site-main">
  <?php
  if (have_rows('hero_slider')) : ?>
    <section class="section-hero-slider">
      <div class="splide">
        <div class="splide__track">
          <ul class="splide__list">
            <?php
            while (have_rows('hero_slider')) : the_row();
              $img_id = get_sub_field('image');
              $image = wp_get_attachment_image($img_id, 'full');
              $subtitle = get_sub_field('subtitle');
              $title = get_sub_field('title');
              $button_text = get_sub_field('button_text');
              $button_url = get_sub_field('button_url');
              $index = get_row_index() - 1;

            ?>
              <li class="splide__slide single-slide position-relative d-flex justify-content-center align-items-center flex-column">
                <div class="single-slide__img-wrap absolute">
                  <?php echo $image ?>
                </div>
                <h3 class="position-relative text-center"><?php echo $subtitle ?></h3>
                <<?php echo ($index) ? 'h2' : 'h1' ?> class="position-relative text-center"><?php echo $title ?></<?php echo ($index) ? 'h2' : 'h1' ?>>
                <a href="<?php echo $button_url ?>" class="btn btn-primary position-relative"><?php echo $button_text ?></a>
              </li>
            <?php endwhile; ?>
          </ul>
        </div>
      </div>
    </section>
  <?php
  endif; ?>
  <section class="content-img d-flex">
    <div class="content-img__col--img content-img__col position-relative">
      <?php
      $section_image_id = get_field('section_image');
      $section_image = wp_get_attachment_image($section_image_id, 'full', false, ['class' => 'absolute']);
      $section_subtitle = get_field('section_subtitle');
      $section_title = get_field('section_title');
      $section_text = get_field('section_text');
      $section_button_text = get_field('section_button_text');
      $section_button_url = get_field('section_button_url');

      ?>
      <?php echo $section_image ?>
    </div>
    <div class="content-img__col--text content-img__col">
      <div class="content-img__text-inner d-flex flex-column justify-content-center">
        <h3 class="subheader"><?php echo $section_subtitle ?></h3>
        <h2><?php echo $section_title ?></h2>
        <?php echo $section_text ?>
        <a href="<?php echo $section_button_url ?>" class="btn btn-primary align-self-start">a<?php echo $section_button_text ?></a>
      </div>
    </div>
  </section>

  <?php
  if (have_rows('testimonial_slider')) : ?>
    <section class="testimonials-slider">
      <div class="splide">
        <div class="splide__arrows">
          <button class="splide__arrow splide__arrow--prev">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71 71">
              <path fill="#d4b254" d="m36 70 34-34a1 1 0 0 0 0-1L36 1a1 1 0 0 0-1 0 1 1 0 0 0 0 1l33 33-33 34a1 1 0 0 0 0 1 1 1 0 0 0 1 0Z" data-name="Combined Shape" />
            </svg>
          </button>
          <button class="splide__arrow splide__arrow--next">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71 71">
              <path fill="#d4b254" d="m36 70 34-34a1 1 0 0 0 0-1L36 1a1 1 0 0 0-1 0 1 1 0 0 0 0 1l33 33-33 34a1 1 0 0 0 0 1 1 1 0 0 0 1 0Z" data-name="Combined Shape" />
            </svg>
          </button>
        </div>
        <div class="splide__track">
          <ul class="splide__list">
            <?php
            while (have_rows('testimonial_slider')) : the_row();
              $subtitle = get_sub_field('subtitle');
              $title = get_sub_field('title');
              $name = get_sub_field('name');
              $text = get_sub_field('text');
              $button_text = get_sub_field('button_text');
              $button_url = get_sub_field('button_url');


            ?>
              <li class="splide__slide single-slide w-100">
                <div class="single-slide__inner position-relative d-flex justify-content-center align-items-center flex-column h-100">
                  <h3 class="text-center subheader"><?php echo $subtitle ?></h3>
                  <h2 class="text-center"><?php echo $title ?></h2>
                  <p class="text-center">
                    <?php echo $text ?>
                  </p>
                  <span class="single-slide__name d-flex"><?php echo $name ?></span>
                  <a href="<?php echo $button_url ?>" class="btn btn-primary position-relative mt-auto"><?php echo $button_text ?></a>
                </div>
              </li>
            <?php endwhile; ?>
          </ul>
        </div>
      </div>
    </section>
  <?php
  endif; ?>

  <section class="customer-gallery">
    <div class="container">
      <div class="row r-title">
        <div class="col-12">
          <h2 class="text-center">Customer Gallery</h2>
        </div>
      </div>

      <?php

      if (have_rows('gallery')) : ?>
        <ul class="row r-gallery gy-3 list-unstyled">
          <?php
          while (have_rows('gallery')) : the_row();
            $image_id = get_sub_field('image');
            $img_url = wp_get_attachment_image_url($image_id, 'full');
            $img_set = wp_get_attachment_image($image_id, 'full');
            $gallery_button_url = get_sub_field('gallery_button_url');
            $gallery_button_text = get_sub_field('gallery_button_text');

          ?>
            <li class="col-md-6 col-lg-3 c-gallery">
              <a href="<?php echo $img_url ?>"><?php echo $img_set ?></a>
            </li>
          <?php endwhile; ?>
        </ul>
      <?php
      endif; ?>
    </div>
    <div class="row r-btn">
      <div class="col-12 d-flex justify-content-center">
        <a href="<?php the_field('gallery_button_url') ?>" class="btn btn-primary btn-small"><?php the_field('gallery_button_text') ?></a>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();

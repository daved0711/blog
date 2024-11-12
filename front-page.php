   <!-- BAnner -->
    <?php get_header()?>
        <section class="Banner py-10  ">
          <div class="container">
            <div class="Banner__wrapper border-b-2 ">
              <div
                class="Banner__text font-bold items-center text-center text-[110px]"
              >
              <?php the_field('banner_title')?>
              </div>
            </div>
          </div>
        </section>
        <!-- Fames -->
        <section class="fames py-10 ">
          <div class="container">
            <div class="fames__wrapper lg:grid lg:grid-cols-[_3fr_2fr] lg:gap-5 "
>
            <?php
            $args = array(
              'post_type'  =>'post',
              'posts_per_page' => -1,
            );
            $newQuery = new WP_Query($args);
            ?>

            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

              <div class="left flex flex-col pb-5">
                <div class="fames__img">
                 <?php
                if(has_post_thumbnail()) :
                  the_post_thumbnail();
                endif;
                 ?>
                </div>
                <div class="fames__text">
                  <h4><?php the_field('home_date') ?></h4>
                  <h3 class="font-bold">
                    <?php the_field('home_title') ?>
                  </h3>
                  <p class="text-primaryy">
                    <?php the_field('home_text') ?>
                  </p>
                  
                  <a href="#" class="text-sm"><?php the_field('read_more') ?></a>
                </div>
             <?php
            endwhile;
            else :
              echo "No Available Content Yet";
            endif;
            wp_reset_postdata();
            ?>
           
             </div>

  
              <div class="right flex flex-col  gap-5">
           <?php 
            $args = array(
              'post_type'  =>'right_detail',
              'posts_per_page' => 4,
            );
            $newQuery = new WP_Query($args);
            ?>

            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

                <div class="right--details">
                <div class="fames__img2">
                  
                <?php
                if(has_post_thumbnail()) :
                  the_post_thumbnail();
                endif;
                ?>
                  </div>
                  <div class="fames__text2">
                    <h4><?php the_field('right_date') ?></h4>
                    <p >
                    <?php the_field('right_text') ?>
                    </p>
                      <a href="#" class="text-sm"><?php the_field('read_more') ?></a>
                  </div>
         
                </div>
                    <?php
            endwhile;
            else :
              echo "No Available Content Yet";
            endif;
            wp_reset_postdata();
            ?>
              </div>
            </div> 
          </div>
           

        </section>

        <!-- Latest Story -->
        <section class="lates ">
          <div class="container">
            <div class="latest__wrapper">
              <div class="latest_title text-center">
                <h1><?php the_field('latest_title')?></h1>
              </div>
              <div class="latest__cards lg:grid lg:grid-cols-3 gap-2 ">
               <?php 

            $args = array(
              'post_type'  =>'latest_story',
              'posts_per_page' => 3,
            );
            $newQuery = new WP_Query($args);
            ?>

            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

                <div class="latest__card">
                  <div class="latest__img pb-5">
                       <?php
                if(has_post_thumbnail()) :
                  the_post_thumbnail();
                endif;
                 ?>
                  </div>
                  <div class="latest__text">
                    <div class="latest__date flex justify-between">
                      <small><?php the_field('latest_date') ?></small>
                      <small><?php the_field('latest_date2') ?></small>
                    </div>
                    <div class="latest__bold font-bold">
                      <p>
                        <?php the_field('latest_title')?>
                      </p>
                    </div>
                    <div class="latest__p">
                      <p>
                        <?php the_field('latest_text') ?>
                      </p>
                    </div>
                  </div>
                </div>
                                 <?php
            endwhile;
            else :
              echo "No Available Content Yet";
            endif;
            wp_reset_postdata();
            ?>
              </div>
            </div>
          </div>
        </section>
        <!-- Feature -->
        <section class="feature pt-20 lg:border-none  ">
          <div class="container">
      
            <div class="feature__wrapper">
              <div class="feature__title text-center flex flex-col gap-3 lg:px-[10rem] pb-5">
                <h2 class="font-bold"><?php the_field('feature_title') ?></h2>
                <h3 class="font-bold">
                 <?php the_field('feature_bold') ?></h2>
                </h3>
                <p>
                  <?php the_field('feature_text') ?></h2>
                </p>
              </div>
            </div>
          </div>
          

          
          <div class="container flex items-center justify-center">
            <img class="w-full h-[20rem] object-cover"
              src="<?php the_field('feature_image') ?>"
              alt=""
            />
          </div>
          
          <div class="container py-10 grid lg:grid-cols-[_2fr_1fr] gap-5">

           
            <div class="left3 flex flex-col gap-5">
               <?php     
            $args = array(
              'post_type'  =>'left_feature',
              'posts_per_page' => 3,
            );
            $newQuery = new WP_Query($args);
            ?>
            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
              <div class="feature__details">
                <div class="feature__img ">
                  <img class="lg:w-[40rem] h-[17rem] w-full object-cover" src="<?php the_field('left_image')?>"alt=""/>
                </div>
                <div class="feature__text">
                  <small><?php the_field('left_date') ?></small>
                  <h4>
                   <?php the_field('left_text_bold')?>
                  </h4>
                  <p>
                   <?php the_field('left_text')?>
                  </p>
                </div>
              </div>
               
            <?php
            endwhile;
            else :
              echo "No Available Content Yet";
            endif;
            wp_reset_postdata();
            ?>      
            </div>
            <?php     
            $args = array(
              'post_type'  =>'ramen_menu',
              'posts_per_page' => 6,
            );
            $newQuery = new WP_Query($args);
            ?>
            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
            <div class="right3 py-2">
              <div class="feature__text3 py-2  pb-11">
                <small><?php the_field('right_date')?></small>
                <p>
                 <?php the_field('right_text_bold')?>
                </p>
              </div>      
              <?php
            endwhile;
            else :
              echo "No Available Content Yet";
            endif;
            wp_reset_postdata();
            ?>      
              
            </div>
            
          </div>
        </section>

        <?php get_footer()?>
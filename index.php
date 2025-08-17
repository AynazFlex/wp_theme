<?php get_header(); ?>
    <div class="about" id="about" style="background: url(<?= CFS()->get('background_light') ?>) center 100% repeat-x,
                url(<?= CFS()->get('background_light') ?>) center 100% repeat-x, #1d1d1d;">
        <div class="container">
            <div class="about__inner">
                <?php 
                    $loop = CFS()->get('card');

                    foreach ($loop as $row) {
                        ?>
                        <div class="about__item">
                            <div class="about__year"><?= $row['card_year'] ?></div>
                            <div class="about__text"><?= $row['card_text'] ?></div>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="team" id="team">
        <div class="container">
            <div class="block__head">
                <h2 class="block__title"><?= CFS()->get('team_title') ?></h2>
                <p class="block__text"><?= CFS()->get('team_description') ?></p>
            </div>
            <div class="swiper mySwiper team__inner">
                <div class="swiper-wrapper">
                <?php
                    $loop = CFS()->get('team_card');

                    foreach ($loop as $row) {
                        $name = $row['team_name']
                        ?>
                            <div class="swiper-slide">
                                <div class="team__item">
                                    <img class="team__item-img" src="<?= $row['team_ava'] ?>" alt="ava <?= $name?>">
                                    <h3 class="team__item-title"><?= $name?></h3>
                                    <p class="team__item-text"><?= $row['team_post'] ?></p>
                                    <div class="team__icon-box">
                                        <?php
                                            $twitter_url = $row['team_twitter']['url'];
                                            $inst_url = $row['team_instagram']['url'];

                                            if(!empty($twitter_url)) {
                                                ?>
                                                    <a href="<?= $twitter_url ?>" target="<?= $row['team_twitter']['target'] ?>"><i class="icon-twitter"></i></a>
                                                <?php
                                            }
                                            if(!empty($inst_url)) {
                                                ?>
                                                    <a href="<?= $inst_url ?>" target="<?= $row['team_instagram']['target'] ?>"><i class="icon-instagram"></i></a>
                                                <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <div class="provide" id="provide">
        <div class="container">
            <div class="block__head inverse">
                <h2 class="block__title"><?= CFS()->get('provide_title') ?></h2>
                <p class="block__text"><?= CFS()->get('provide_text') ?></p>
            </div>
            <div class="provide__inner">
                <?php
                    $loop = CFS()->get('provide_loop');

                    foreach ($loop as $row) {
                        $provide_name = $row['provide_name'];

                        ?>
                        <div class="provide__item">
                            <img src="<?= $row['provide_img'] ?>" alt="<?= $provide_name ?>">
                            <h3 class="provide__item-title"><?= $provide_name ?></h3>
                            <p class="provide__item-text"><?= $row['provide_description'] ?></p>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div> 
    <div class="contact" id="contact">
        <div class="container">
            <div class="block__head">
                <h2 class="block__title"><?= CFS()->get('footer_title') ?></h2>
                <p class="block__text"><?= CFS()->get('footer_subtitle') ?></p>
            </div>
            <div class="contact__inner">
                <div class="contact__icon-box">
                    <div class="contact__item">
                        <i class="icon-phone"></i>
                        <div class="contact__text"><a href="tel:<?= CFS()->get('footer_phone') ?>"><?= CFS()->get('footer_phone') ?></a></div>
                    </div>
                    <div class="contact__item">
                        <i class="icon-location"></i> 
                        <div class="contact__text">
                            <?php
                                $address = CFS()->get('footer_address');
                                $url = $address['url'];

                                if(!empty($url)) {
                                    ?>
                                        <a href="<?= $url ?>" target="<?= $address['target'] ?>"><?= $address['text'] ?></a>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="contact__item">
                        <i class="icon-mail-alt"></i>
                        <div class="contact__text">
                            <?php
                                $email = CFS()->get('footer_email');

                                ?>
                                    <a href="mailto:<?= $email ?>"><?= $email ?></a>
                                <?php
                            ?>
                        </div>
                    </div>
                </div>
                <?php the_content() ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>

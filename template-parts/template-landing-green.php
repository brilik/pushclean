<?php
/**
 * Template Name: Landing Green
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php the_block('head'); ?>

<body <?php body_class('loaded'); ?>>

<?php wp_body_open(); ?>

<!-- BEGIN BODY -->

<div class="main-wrapper">

    <!-- BEGIN CONTENT -->

    <main class="content">
        <!-- BEGIN MAIN -->
        <div class="main-block">
            <div class="main-block-content">
                <div class="main-block__img">
                    <div class="wrapper">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/main-img.png">
                    </div>
                </div>
                <div class="main-block__info">
                    <div class="wrapper">
                        <div class="main-block__info-content">
                            <div>
                                <span>Revolutionary</span>
                                <h1>All Natural</h1>
                                <p>Hand Towelettes</p>
                            </div>
                            <div class="main-block__info-img">
                                <img data-src="<?= get_template_directory_uri(); ?>/assets/img/main-info-img.png"
                                     src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="" class="js-img">
                            </div>
                        </div>
                        <div class="main-block-form">
                            <form class="js--contact-form">
                                <img data-src="<?= get_template_directory_uri(); ?>/assets/img/form-plant1.png" src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
                                     alt="" class="js-img form-plant1">
                                <img data-src="<?= get_template_directory_uri(); ?>/assets/img/form-plant2.png" src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
                                     alt="" class="js-img form-plant2">
                                <img data-src="<?= get_template_directory_uri(); ?>/assets/img/super-offer.svg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
                                     alt="" class="js-img super-offer">
                                <div class="box-field">
                                    <label class="box-field__label" for="input-name">First Name</label>
                                    <input class="form-control" type="text" id="input-name" name="name" required>
                                </div>
                                <div class="box-field">
                                    <label class="box-field__label" for="input-surname">Last Name</label>
                                    <input class="form-control" type="text" id="input-surname" name="surname"
                                           required>
                                </div>
                                <div class="box-field">
                                    <label class="box-field__label" for="input-tel">Phone</label>
                                    <input class="form-control" type="tel" id="input-tel" name="tel" required>
                                </div>
                                <div class="box-field">
                                    <label class="box-field__label" for="input-email">Email</label>
                                    <input class="form-control" type="email" id="input-email" name="email" required>
                                </div>
                                <div class="form-info">
                                    <img data-src="<?= get_template_directory_uri(); ?>/assets/img/form-img.png"
                                         src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="" class="js-img">
                                    <span class="form-info__price">$29.<sup>99</sup></span>
                                    <div class="form-info__text">
                                        <span class="per-box">Per box!</span>
                                        <span class="free-shipping">+ free shipping</span>
                                        <p>Continental EU/CIS</p>
                                    </div>
                                </div>
                                <button type="submit" class="btn">Rush My Order!</button>
                                <img data-src="<?= get_template_directory_uri(); ?>/assets/img/form-img2.png" data-srcset="<?= get_template_directory_uri(); ?>/assets/img/form-img2.png 1x, <?= get_template_directory_uri(); ?>/assets/img/form-img2-2x.png 2x" srcset="/" src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
                                     alt="" class="js-img">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MAIN EOF   -->

        <!-- BEGIN SAFE -->
        <section class="safe">
            <div class="wrapper">
                <h2>Safe for you & the environment!</h2>
                <div class="safe-content">
                    <div class="safe-row">
                        <div class="safe-column"></div>
                        <div class="safe-column">
                            <div class="safe-img">
                                <img data-src="<?= get_template_directory_uri(); ?>/assets/img/safe-img1.png" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt=""
                                     class="js-img">
                            </div>
                            <span class="safe-title">Push Clean Hand</span>
                        </div>
                        <div class="safe-column">
                            <div class="safe-img">
                                <img data-src="<?= get_template_directory_uri(); ?>/assets/img/safe-img2.png" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt=""
                                     class="js-img">
                            </div>
                            <span class="safe-title">Other wipes</span>
                        </div>
                    </div>
                    <div class="safe-row">
                        <div class="safe-column">Easy to use and carry</div>
                        <div class="safe-column"><span class="icon-check"></span></div>
                        <div class="safe-column"><span class="icon-close"></span></div>
                    </div>
                    <div class="safe-row">
                        <div class="safe-column">Durable, lasts much longer than regular pocket wipes</div>
                        <div class="safe-column"><span class="icon-check"></span></div>
                        <div class="safe-column"><span class="icon-close"></span></div>
                    </div>
                    <div class="safe-row">
                        <div class="safe-column">Does not harm your skin</div>
                        <div class="safe-column"><span class="icon-check"></span></div>
                        <div class="safe-column"><span class="icon-close"></span></div>
                    </div>
                    <div class="safe-row">
                        <div class="safe-column">Natural Scrubbing</div>
                        <div class="safe-column"><span class="icon-check"></span></div>
                        <div class="safe-column"><span class="icon-close"></span></div>
                    </div>
                    <div class="safe-row">
                        <div class="safe-column">No CFC, Green Product</div>
                        <div class="safe-column"><span class="icon-check"></span></div>
                        <div class="safe-column"><span class="icon-close"></span></div>
                    </div>
                    <div class="safe-btn-content">
                        <a href="#" class="btn btn-small">Rush My Order!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- SAFE EOF   -->

        <!-- BEGIN WHY -->
        <section class="why">
            <div class="wrapper">
                <h2>Why use PushClean?</h2>
                <span class="why-subtitle">JUST ONE STEP</span>
                <div class="why-content">
                    <div class="why-column">
                        <ul>
                            <li>Even if the towelette is removed from the capsule, it still remains compressed until it reacts with water <span class="why-column__circle"></span></li>
                            <li>It does not leave any fibers on the skin or surface after using <span class="why-column__circle"></span></li>
                            <li>Shake the PushClean(TM) towelette in the air and it will cool itself on a "hot day" <span class="why-column__circle"></span></li>
                        </ul>
                    </div>
                    <div class="why-column why-circle">
                        <span>Just simply push down</span>
                        <span>And Towelette Comes Out</span>
                        <img data-src="<?= get_template_directory_uri(); ?>/assets/img/why-img.png" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt=""
                             class="js-img">
                    </div>
                    <div class="why-column">
                        <ul>
                            <li>Tissue is completely natural. Does not contains synthetic substances<span class="why-column__circle"></span></li>
                            <li>Ideal for you because PushClean is sterilized and Eco - friendly<span class="why-column__circle"></span></li>
                            <li>Ideal for you because PushClean is sterilized and Eco - friendly<span class="why-column__circle"></span></li>
                            <li>It can be used cold or warm<span class="why-column__circle"></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- WHY EOF   -->

        <!-- BEGIN WHATS -->
        <section class="whats">
            <div class="wrapper">
                <h2>What’s in PushClean?</h2>
                <div class="whats-content">
                    <div class="whats-img">
                        <img data-src="<?= get_template_directory_uri(); ?>/assets/img/whats-img.png" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt=""
                             class="js-img">
                    </div>
                    <div class="whats-item">
                        <div class="whats-item__img">
                            <img data-src="<?= get_template_directory_uri(); ?>/assets/img/icons/whats-icon1.svg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt=""
                                 class="js-img">
                        </div>
                        <div class="whats-item__info">
                            <span>Ingredients:</span>
                            <p>Water, Cocoamidoproply Betain, PEG-7 Glyceryl Cocoate, Propylene Glycol, Methylchloroisothiazone/ Methylisothiazonlinone, DMDM Hydantoin, Polysorbate 20, Essence</p>
                        </div>
                    </div>
                    <div class="whats-item">
                        <div class="whats-item__img">
                            <img data-src="<?= get_template_directory_uri(); ?>/assets/img/icons/whats-icon2.svg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt=""
                                 class="js-img">
                        </div>
                        <div class="whats-item__info">
                            <span>Description:</span>
                            <p>All Natural Towelettes, 100% Biodegradable, No CFC’s, (10” x 10.5”) Double Sided Towelettes</p>
                        </div>
                    </div>
                    <div class="whats-item">
                        <div class="whats-item__img">
                            <img data-src="<?= get_template_directory_uri(); ?>/assets/img/icons/whats-icon3.svg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt=""
                                 class="js-img">
                        </div>
                        <div class="whats-item__info">
                            <span>Contains:</span>
                            <p>Each tube consists of 12 Individually Packed double-sided Towelette</p>
                            <a href="#" class="btn btn-small">buy</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- WHATS EOF   -->

        <!-- BEGIN OFFER -->
        <div class="offer">
            <div class="wrapper">
                <div class="offer-content">
                    <div class="offer-img">
                        <img data-src="<?= get_template_directory_uri(); ?>/assets/img/offer-img.png" src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
                             alt="" class="js-img">
                    </div>
                    <div class="offer-info">
                        <img data-src="<?= get_template_directory_uri(); ?>/assets/img/header-logo.svg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt=""
                             class="js-img">
                        <p><span>X12</span>in box</p>
                    </div>
                    <div class="main-block-form">
                        <form class="js--contact-form2">
                            <img data-src="<?= get_template_directory_uri(); ?>/assets/img/form-plant1.png" src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
                                 alt="" class="js-img form-plant1">
                            <img data-src="<?= get_template_directory_uri(); ?>/assets/img/form-plant2.png" src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
                                 alt="" class="js-img form-plant2">
                            <img data-src="<?= get_template_directory_uri(); ?>/assets/img/super-offer.svg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
                                 alt="" class="js-img super-offer">
                            <div class="box-field">
                                <label class="box-field__label" for="input-name2">First Name</label>
                                <input class="form-control" type="text" id="input-name2" name="name" required>
                            </div>
                            <div class="box-field">
                                <label class="box-field__label" for="input-surname2">Last Name</label>
                                <input class="form-control" type="text" id="input-surname2" name="surname"
                                       required>
                            </div>
                            <div class="box-field">
                                <label class="box-field__label" for="input-tel2">Phone</label>
                                <input class="form-control" type="tel" id="input-tel2" name="tel" required>
                            </div>
                            <div class="box-field">
                                <label class="box-field__label" for="input-email2">Email</label>
                                <input class="form-control" type="email" id="input-email2" name="email" required>
                            </div>
                            <div class="form-info">
                                <img data-src="<?= get_template_directory_uri(); ?>/assets/img/form-img.png"
                                     src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="" class="js-img">
                                <span class="form-info__price">$29.<sup>99</sup></span>
                                <div class="form-info__text">
                                    <span class="per-box">Per box!</span>
                                    <span class="free-shipping">+ free shipping</span>
                                    <p>Continental EU/CIS</p>
                                </div>
                            </div>
                            <button type="submit" class="btn">Rush My Order!</button>
                            <img data-src="<?= get_template_directory_uri(); ?>/assets/img/form-img2.png" data-srcset="<?= get_template_directory_uri(); ?>/assets/img/form-img2.png 1x, <?= get_template_directory_uri(); ?>/assets/img/form-img2-2x.png 2x" srcset="/" src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
                                 alt="" class="js-img">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- OFFER EOF   -->
    </main>

    <!-- CONTENT EOF   -->

    <!-- BEGIN HEADER -->

    <?php get_header(); ?>

    <!-- HEADER EOF   -->

    <!-- BEGIN FOOTER -->

    <?php get_footer(); ?>

    <!-- FOOTER EOF   -->

</div>

<div class="icon-load"></div>

<!-- BODY EOF   -->

<?php wp_footer(); ?>
</body>

</html>
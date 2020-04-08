<?php
/**
 * Template Name: Order
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<?php the_block('head'); ?>

<body <?php body_class('loaded'); ?>>

<?php wp_body_open(); ?>

<!-- BEGIN BODY -->

<div class="main-wrapper order-page">

        <!-- BEGIN CONTENT -->

        <main class="content">
            <div class="wrapper">
                <div class="order-block">
                    <span class="order-block__title"><?php pll_e('Review you order'); ?></span>
                    <?php the_block('sections__order__product-info'); ?>
                    <div class="order-block__form">
                        <form class="js--contact-form3">
                            <span class="form-title"><?php pll_e('payment information'); ?></span>
                            <span class="form-subtitle"><?php pll_e('Shipping Address'); ?></span>
                            <div class="box-field">
                                <label class="box-field__label" for="input-address"><?php pll_e('Address'); ?></label>
                                <input class="form-control" type="text" id="input-address" name="address" required>
                            </div>
                            <div class="box-field">
                                <label class="box-field__label" for="input-address2"><?php pll_e('Address 2'); ?></label>
                                <input class="form-control" type="text" id="input-address2" name="address2" required>
                            </div>
                            <div class="box-field">
                                <label class="box-field__label" for="input-city"><?php pll_e('City'); ?></label>
                                <input class="form-control" type="text" id="input-city" name="city" required>
                            </div>
                            <div class="box-field box-field__select">
                                <span class="select-label"><?php pll_e('Country'); ?></span>
                                <select class="styled" name="country" required>
                                    <option value="" label="0"></option>
                                    <option value="Poland"><?php pll_e('Poland'); ?></option>
                                    <option value="Belgium"><?php pll_e('Belgium'); ?></option>
                                    <option value="Germany"><?php pll_e('Germany'); ?></option>
                                    <option value="Greece"><?php pll_e('Greece'); ?></option>
                                    <option value="Ukraine"><?php pll_e('Ukraine'); ?></option>
                                    <option value="Russia"><?php pll_e('Russia'); ?></option>
                                </select>
                            </div>
                            <div class="box-field box-field__select">
                                <span class="select-label"><?php pll_e('State'); ?></span>
                                <select class="styled" name="state" required>
                                    <option value="" label="0"></option>
                                    <option value="Poland"><?php pll_e('Poland'); ?></option>
                                    <option value="Belgium"><?php pll_e('Belgium'); ?></option>
                                    <option value="Germany"><?php pll_e('Germany'); ?></option>
                                    <option value="Greece"><?php pll_e('Greece'); ?></option>
                                    <option value="Ukraine"><?php pll_e('Ukraine'); ?></option>
                                    <option value="Russia"><?php pll_e('Russia'); ?></option>
                                </select>
                            </div>
                            <div class="box-field">
                                <label class="box-field__label" for="input-zip"><?php pll_e('Zip'); ?></label>
                                <input class="form-control" type="text" id="input-zip" name="zip" required>
                            </div>
                            <span class="form-subtitle form-subtitle-card"><?php pll_e('Credit Card Information'); ?></span>
                            <div class="box-field">
                                <label class="box-field__label" for="input-card-num"><?php pll_e('Card Number'); ?></label>
                                <input class="form-control" type="text" id="input-card-num" name="card_num" required>
                            </div>
                            <div class="box-field box-field__select box-field__select-split">
                                <span class="select-label"><?php pll_e('Expiration Date'); ?></span>
                                <select class="styled" name="expiration" required>
                                    <option value="" label="0"></option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                </select>
                                <select class="styled" name="expiration2" required>
                                    <option value="" label="0"></option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                </select>
                            </div>
                            <div class="box-field">
                                <label class="box-field__label" for="input-card-name"><?php pll_e('Name on Card'); ?></label>
                                <input class="form-control" type="text" id="input-card-name" name="card_name" required>
                            </div>
                            <div class="box-field box-field-cvv">
                                <label class="box-field__label" for="input-card-cvv"><?php pll_e('CVV'); ?></label>
                                <input class="form-control" type="text" id="input-card-cvv" name="card_cvv" maxlength="3" required>
                            </div>
                            <button type="submit" class="btn"><?php pll_e('Rush My Order!'); ?></button>
                            <img data-src="<?= get_field('form')['security_big']['url']; ?>" data-srcset="<?= get_field('form')['security_big']['url']; ?> 1x, <?= get_field('form')['security_small']['url']; ?> 2x" srcset="/" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="<?= get_field('form')['security_small']['alt']; ?>" class="js-img">
                        </form>
                    </div>

                </div>
            </div>
        </main>

        <!-- CONTENT EOF   -->

        <!-- BEGIN HEADER -->

        <?php get_header('order'); ?>

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
<?php get_header(); ?>

<div class="property-single">
    <main class="property-main">
        <div class="property-card">
            <div class="property-primary">
                <header class="property-header">
                    <h2 class="property-title"><a href="#"><?= the_title() ?></a></h2>
                    <div class="property-meta">
                        <span class="meta-location">Ovcha Kupel, Sofia</span>
                        <span class="meta-total-area">Price: <?= get_field('property_price'); ?> €/sq.m</span>
                    </div>

                    <div class="property-details grid">
                        <div class="property-details-card">
                            <div class="property-details-card-title">
                                <h3>Rooms</h3>
                            </div>
                            <div class="property-details-card-body">
                                <ul>
                                    <li><?= get_field('bedrooms_number'); ?> Bedrooms</li>
                                    <li><?= get_field('number_of_bathrooms'); ?> Bathroom</li>
                                    <li><?= get_field('number_of_living_rooms'); ?> Living room</li>
                                    <li>Separated kitchen: <?= (get_field('separated_kitchen') === true) ? 'Yes' : 'No'; ?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="property-details-card">
                            <div class="property-details-card-title">
                                <h3>Additional Details</h3>
                            </div>
                            <div class="property-details-card-body">
                                <ul>
                                    <li>Floor: 6</li>
                                    <li>Elevator/Lift: <?= (get_field('elevator') === true) ? 'Yes' : 'No'; ?></li>
                                    <li>Brick-built: <?= (get_field('brick-built') === true) ? 'Yes' : 'No'; ?></li>
                                    <li>Electricity: <?= (get_field('electricity') === true) ? 'Yes' : 'No'; ?></li>
                                    <li>Water Supply: <?= (get_field('watter_supply') === true) ? 'Yes' : 'No'; ?></li>
                                    <li>Heating: <?= (get_field('heating') === true) ? 'Yes' : 'No'; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </header>

                <div class="property-body">
                    <?= get_the_content() ?>
                </div>
            </div>
        </div>
    </main>
    <aside class="property-secondary">
        <div class="property-image property-image-single">
            <div class="property-image-box property-image-box-single">
                <img src="<?= get_the_post_thumbnail_url() ?>" alt="property image">
            </div>
        </div>
        <a href="#" class="button button-wide">Like the property</a>
    </aside>
</div>

<h2 class="section-heading">Other similar properties:</h2>


<?php get_footer(); ?>
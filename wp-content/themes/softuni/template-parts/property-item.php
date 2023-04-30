
<li class="property-card">
    <div class="property-primary">
        <h2 class="property-title"><a href="<?= the_permalink() ?>"><?= the_title() ?></a></h2>
        <div class="property-meta">
            <span class="meta-location"><?= the_title() ?></span>
            <span class="meta-total-area">Total area: 91.65 sq.m</span>
    </div>
        <div class="property-details">
            <span class="property-price">€ 100,815</span>
            <span class="property-date">Posted 14 days ago</span>
        </div>
    </div> 
    <div class="property-image">
        <div class="property-image-box">
            <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= the_title() ?>">
        </div>
    </div>
</li>
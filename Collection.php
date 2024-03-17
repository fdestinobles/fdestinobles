<?php
    include 'siteHead.php'
?> -->

<body>
    <?php
        include 'navigationBar.php';
    ?>
    <h2> Collection </h2>

    <section class = "section">
     
        <h3> Collection Title and Description </h3>
        <p> The collection title and description are editable from the collection admin page. </p>
        <!-- missing image and caption -->
    </section>

    <section class = "section">
        <p> Different from the collection description, which is editable for each collection page. 
            The collection message displays on all collection pages (e.g. 2023 Restock Message). <br>
            <br>
            The collection message is editable from the theme editor &rarr; Main Collection tab, in the Message for all collections field.
        </p>
    </section>

    <section class = "section">
        <h3> Product Flags </h3>
        <p> The collection page will display the following product flags: 
            <ul>
                <li> <b>Coming Soon</b> displays if the product has the product tag "coming soon" </li>
                <li> <b>Sold Out</b> displays if a product is not available, which requires all of the following: </li>
                <ul class="c">
                    <li> A product is set to track inventory, and </li>
                    <li> Inventory quantity is less than or equal to 0, and </li>
                    <li> Selling when out of stock is disabled </li>
                </ul>
                <li> <b>Psst&#9866;On Sale</b> displays is a product compare&#9866;at&#9866;price is greater than the product price </li>
                <li> <b>Low Stock Alert</b> displays if the available product inventory is below the inventory threshold </li>
                <p class = "section"> The low stock alert threshold is editable from the theme editor &rarr; theme settings &rarr; 
                Low stock threshold tab. The default value is 10.
                </p>
                <p><b>Laurel's Favorite</b> displays if the product has the product tag &quot;favorite&quot;</p>
                <p><b>New Arrival</b> displays if the product has the product tag &quot;new arrival&quot;</p>
                <p><b>Bestseller</b> displays if the product has the product tab &quot;bestseller&quot;</p>
                <p class="caption">Product tags are <b>not</b>case sensitive for product flags. </p>
            </ul>
        </p>
    </section>
</body>
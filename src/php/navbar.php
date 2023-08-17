<?php 

$template = "<div class=\"nav-bar shadow bg-body\">
        <img class=\"brand-name\" src=\"Assets/logo.png\">
        <div class=\"search\">
            <div>
                <select name=\"select\" id=\"dropdown\">

                    <option value=\"\">Categories</option>
                    <option value=\"\" v-for=\"index in 10\" :key=\"index\">Category {{index}}</option>

                </select>
            </div>
            <div class=\"search-bar\">
                <input type=\"search\" id=\"search\" placeholder=\"search\">
                <button class=\"material-icons search-icon\">
                    search

                </button>

            </div>
        </div>
        <div class=\"icon-group\" id=\"icon-group\">
            <div class=\"icon\">
                <span class=\"material-icons icon-size position-relative\" @click.prevent=\"notifications.inbox++\" onclick=\"window.location.href='src/php/login.php'\">
                    person
                </span>
                <div class=\"notification-badge\">
                    {{notifications.inbox}}
                </div>
            </div>
            <div class=\"icon\">
                <span class=\"material-icons icon-size\" style=\"color: red;\" @click.prevent=\"notifications.wishlist++\">
                    favorite
                </span>
                <div class=\"notification-badge\">
                    {{notifications.wishlist}}

                </div>
            </div>
            <div class=\"icon\">
                <span class=\"material-icons icon-size\" @click.prevent=\"notifications.cart++\">
                    shopping_bag
                </span>
                <div class=\"notification-badge\">
                    {{notifications.cart}}

                </div>
            </div>




        </div>
    </div>";

    echo $template;
?>
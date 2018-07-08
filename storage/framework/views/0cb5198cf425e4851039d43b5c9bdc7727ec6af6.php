<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vaimo Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/app.css">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,700" rel="stylesheet">
</head>
    <body ng-app="Vaimo" ng-cloak>

        <header class="header">
            <div class="header-wp main-wrap">

                <div class="header-top">

                    <a href="/" class="header__logo">
                        <img src="img/logo.png" />
                    </a>

                    <div class="header__cart" ng-controller="cartCtrl">

                        <div class="cart-link" ng-cloak
                             data-cart-dropdown
                             data-cart-dropdown-class=".cart-list"
                             data-cart-parent-class=".header-top">
                            <i class="cart-link__icon cart"
                               data-dropdown
                               data-dropdown-class=".cart-list"></i>
                            <span class="cart-link__items">{{ totalItems }}</span>
                            <span class="cart-link__text">items in your cart</span>
                            <span class="cart-link__price" vaimo-currency="€">{{ totalPrice }}</span>
                        </div>

                        <div class="cart-list">

                            <div class="cart-list__item" ng-repeat="item in cartItems">
                                <img ng-src="{{ item.imgSrc }}" class="cart-list__item-img" />
                                <div class="cart-list__item-desc">
                                    <h3 class="name">{{ item.name }}</h3>
                                    <p class="quantity-and-price">
                                        <span class="quantity">{{ item.qty }}</span> x
                                        <span class="price" vaimo-currency="€">{{ item.price }}</span>
                                    </p>
                                </div>
                                <i class="cart-list__icon remove"></i>
                            </div>

                            <button class="btn cart-list__button" type="button">Go to checkout</button>

                        </div>

                    </div>
                </div>

                <div class="header-bottom menu">
                    <i class="menu__icon hamburger" data-dropdown
                       data-dropdown-class=".hamburger-menu"></i>
                    <ul class="menu-list clear">
                        <li class="menu-list__item">
                            <a href="#" class="menu-list__item_link">Women</a>
                        </li>
                        <li class="menu-list__item">
                            <a href="#" class="menu-list__item_link">Man</a>
                        </li>
                        <li class="menu-list__item">
                            <a href="#" class="menu-list__item_link">Junior</a>
                        </li>
                        <li class="menu-list__item">
                            <a href="#" class="menu-list__item_link">Accessories</a>
                        </li>
                        <li class="menu-list__item collections">
                            <a href="#" class="menu-list__item_link">Collections</a>
                            <ul class="menu-sub-list">
                                <li class="menu-sub-list__item">
                                    <a href="#" class="menu-sub-list__item_link">2014</a>
                                    <ul class="menu-sub-sub-list">
                                        <li class="menu-sub-sub-list__item">
                                            <a href="#" class="menu-sub-sub-list__item_link">Summer</a>
                                        </li>
                                        <li class="menu-sub-sub-list__item">
                                            <a href="#" class="menu-sub-sub-list__item_link">Autumn</a>
                                        </li>
                                        <li class="menu-sub-sub-list__item">
                                            <a href="#" class="menu-sub-sub-list__item_link">Winter</a>
                                        </li>
                                        <li class="menu-sub-sub-list__item">
                                            <a href="#" class="menu-sub-sub-list__item_link">Spring</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-sub-list__item">
                                    <a href="#" class="menu-sub-list__item_link">2013</a>
                                    <ul class="menu-sub-sub-list">
                                        <li class="menu-sub-sub-list__item">
                                            <a href="#" class="menu-sub-sub-list__item_link">Summer</a>
                                        </li>
                                        <li class="menu-sub-sub-list__item">
                                            <a href="#" class="menu-sub-sub-list__item_link">Autumn</a>
                                        </li>
                                        <li class="menu-sub-sub-list__item">
                                            <a href="#" class="menu-sub-sub-list__item_link">Winter</a>
                                        </li>
                                        <li class="menu-sub-sub-list__item">
                                            <a href="#" class="menu-sub-sub-list__item_link">Spring</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-sub-list__item">
                                    <a href="#" class="menu-sub-list__item_link">2012</a>
                                    <ul class="menu-sub-sub-list">
                                        <li class="menu-sub-sub-list__item">
                                            <a href="#" class="menu-sub-sub-list__item_link">Summer</a>
                                        </li>
                                        <li class="menu-sub-sub-list__item">
                                            <a href="#" class="menu-sub-sub-list__item_link">Autumn</a>
                                        </li>
                                        <li class="menu-sub-sub-list__item">
                                            <a href="#" class="menu-sub-sub-list__item_link">Winter</a>
                                        </li>
                                        <li class="menu-sub-sub-list__item">
                                            <a href="#" class="menu-sub-sub-list__item_link">Spring</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-sub-list__item">
                                    <a href="#" class="menu-sub-list__item_link">2011</a>
                                    <ul class="menu-sub-sub-list">
                                        <li class="menu-sub-sub-list__item">
                                            <a href="#" class="menu-sub-sub-list__item_link">Summer</a>
                                        </li>
                                        <li class="menu-sub-sub-list__item">
                                            <a href="#" class="menu-sub-sub-list__item_link">Autumn</a>
                                        </li>
                                        <li class="menu-sub-sub-list__item">
                                            <a href="#" class="menu-sub-sub-list__item_link">Winter</a>
                                        </li>
                                        <li class="menu-sub-sub-list__item">
                                            <a href="#" class="menu-sub-sub-list__item_link">Spring</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-list__item sale">
                            <a href="#" class="menu-list__item_link">Sale</a>
                        </li>
                        <li class="menu-list__item my-account">
                            <a href="#" class="menu-list__item_link">My account</a>
                        </li>
                    </ul>
                </div>

            </div>
        </header>

        <section class="hamburger-menu">
            <ul class="menu-list clear">
                <li class="menu-list__item">
                    <a href="#" class="menu-list__item_link">Women</a>
                </li>
                <li class="menu-list__item">
                    <a href="#" class="menu-list__item_link">Man</a>
                </li>
                <li class="menu-list__item">
                    <a href="#" class="menu-list__item_link">Junior</a>
                </li>
                <li class="menu-list__item">
                    <a href="#" class="menu-list__item_link">Accessories</a>
                </li>
                <li class="menu-list__item collections">
                    <a href="#" class="menu-list__item_link">Collections</a>
                    <ul class="menu-sub-list">
                        <li class="menu-sub-list__item">
                            <a href="#" class="menu-sub-list__item_link">2014</a>
                        </li>
                        <li class="menu-sub-list__item">
                            <a href="#" class="menu-sub-list__item_link">2013</a>
                        </li>
                        <li class="menu-sub-list__item">
                            <a href="#" class="menu-sub-list__item_link">2012</a>
                            <ul class="menu-sub-sub-list">
                                <li class="menu-sub-sub-list__item">
                                    <a href="#" class="menu-sub-sub-list__item_link">Summer</a>
                                </li>
                                <li class="menu-sub-sub-list__item">
                                    <a href="#" class="menu-sub-sub-list__item_link">Autumn</a>
                                </li>
                                <li class="menu-sub-sub-list__item">
                                    <a href="#" class="menu-sub-sub-list__item_link">Winter</a>
                                </li>
                                <li class="menu-sub-sub-list__item">
                                    <a href="#" class="menu-sub-sub-list__item_link">Spring</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-sub-list__item">
                            <a href="#" class="menu-sub-list__item_link">2011</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-list__item sale">
                    <a href="#" class="menu-list__item_link">Sale</a>
                </li>
                <li class="menu-list__item my-account">
                    <a href="#" class="menu-list__item_link">My account</a>
                </li>
            </ul>
        </section>

        <section class="about-us main-wrap clear">

            <div class="about-us__banner">
                <p class="banner-text">
                    <span class="banner-text__title">Get ready for the autumn</span>
                    <span class="banner-text__subtitle">We have prepared everything for you!</span>
                </p>
            </div>

            <div class="about-us__desc">
                <h1 class="about-us__title">This is Vaimo Store </h1>
                <h2 class="about-us__subtitle">Your one-stop fashion destination</h2>
                <p class="about-us__text">Shop from over 850 of the best brands, including VAIMO’s own label. Plus, get your daily fix of the freshest style, celebrity and music news.</p>
            </div>

        </section>

        <section class="products main-wrap">
            <h3 class="products__title">
                <span>Our favourites</span>
            </h3>

            <div class="product-item-wp clear">
                <?php sort($products); ?>
                <?php foreach($products as $product): ?> 
                    <div class="product-item">
                        <div class="product-item__img">
                            <img src="<?php echo e($product["image"]); ?>" />
                        </div>
                        <p class="product-item__title"><?php echo e($product["title"]); ?></p>
                        <p class="product-item__price">
                            <span class="price" price-class="<?php echo e($product["specialPrice"]); ?>">
                                <span vaimo-currency="€"><?php echo e($product["price"]); ?></span>
                            </span>
                            <span class="special-price"
                                  ng-if="<?php echo e($product["specialPrice"]); ?>"
                                  vaimo-currency="€">
                                <?php echo e($product["specialPrice"]); ?>

                            </span>
                        </p>
                        <button class="btn product-item__button" type="button">Add to cart</button>
                    </div>
                <?php endforeach; ?>
            </div>

        </section>

        <footer class="footer">
            <div class="main-wrap clear">

                <div class="footer-menu top-categories">
                    <h4 class="footer-menu__title">Top categories</h4>
                    <ul class="footer-menu-list">
                        <li class="footer-menu-list__item">
                            <a href="#" class="footer-menu-list__item_link">Women</a>
                        </li>
                        <li class="footer-menu-list__item">
                            <a href="#" class="footer-menu-list__item_link">Men</a>
                        </li>
                        <li class="footer-menu-list__item">
                            <a href="#" class="footer-menu-list__item_link">Junior</a>
                        </li>
                        <li class="footer-menu-list__item">
                            <a href="#" class="footer-menu-list__item_link">Accessories</a>
                        </li>
                    </ul>
                </div>

                <div class="footer-menu customer-service">
                    <h4 class="footer-menu__title">Customer service</h4>
                    <ul class="footer-menu-list">
                        <li class="footer-menu-list__item">
                            <a href="#" class="footer-menu-list__item_link">Returns</a>
                        </li>
                        <li class="footer-menu-list__item">
                            <a href="#" class="footer-menu-list__item_link">Shipping</a>
                        </li>
                        <li class="footer-menu-list__item">
                            <a href="#" class="footer-menu-list__item_link">About us</a>
                        </li>
                        <li class="footer-menu-list__item">
                            <a href="#" class="footer-menu-list__item_link">Contact us</a>
                        </li>
                    </ul>
                </div>

                <div class="subscribe" ng-controller="newsletterCtrl"> 
                    <h4 class="subscribe__title">Newsletter subscribe</h4> 
                    <form name="subscribeForm" method="post" class="subscribe-form"
                          ng-submit="processForm()"> 
                        <input type="text" class="subscribe-form__input" placeholder="Enter your email address"
                               name="email"
                               ng-model="formData.email" /> 
                        <span class="success" ng-if="subscribeForm.$submitted && newsletterSent">Subscription successful.</span>
                        <span class="error" ng-if="subscribeForm.$submitted && !newsletterSent">Email verification
                            failed...</span>
                        <span class="loading" ng-if="subscribeForm.$submitted && loading">Subscribing to newsletter...</span>
                        <button class="btn subscribe-form__button" type="submit">Subscribe</button> 
                    </form>
                     </div>

            </div>
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.js"></script>
        <script src="js/controllers.js"></script>
        <script src="js/directives.js"></script>

    </body>
</html>
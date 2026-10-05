<?php get_header(); ?>

    <!--СЕКЦІЯ АКЦІЇ -->
    <section>
        <div class="container">
            <div class="swiper hero-swiper">
                <ul class="swiper-wrapper">
                <?php 
                    $posts = get_posts([
                        'numberposts' => -1,
                        'category_name' => 'hero',
                        'post_type' => 'post',
                        'suppress_filters' => true
                        ]);
                    foreach($posts as $post) {
                        setup_postdata($post);
                ?>  
                    <li class="swiper-slide promo-card">
                        <div class="promo-card__tags">
                            <span class="badge badge--orange"><?php echo CFS()->get('red_label'); ?></span>
                            <span class="badge badge--outline"><?php echo CFS()->get('black_label'); ?></span>
                        </div>
                        <div class="promo-card__header">
                            <h2 class="promo-card__title">
                                <span class="accent-code"><?php echo CFS()->get('num'); ?> //</span> <?php the_title(); ?>
                            </h2>
                            <p class="promo-card__description">
                               <?php the_content(); ?>
                            </p>
                        </div>
                        <div class="promo-card__media">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Кобура Тайфун Кайдекс" class="promo-card__img"
                                loading="lazy">
                            <div class="promo-card__discount-tag">
                                <?php echo CFS()->get('img_text'); ?>
                            </div>
                        </div>
                        <div class="promo-card__actions">
                            <a href="#" class="btn btn--primary">
                                <span><?php echo CFS()->get('btn_text'); ?></span>
                                <svg width="12" height="15" viewBox="0 0 12 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.9125 12.15L8.79375 7.5H5.79375L6.3375 3.24375L2.86875 8.25H5.475L4.9125 12.15ZM3 15L3.75 9.75H0L6.75 0H8.25L7.5 6H12L4.5 15H3Z"
                                        fill="white" />
                                </svg>
                            </a>

                            <button type="button" class="btn btn--icon" aria-label="Фільтри або налаштування">
                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.33333 16.5V11H9.16667V12.8333H16.5V14.6667H9.16667V16.5H7.33333V16.5M0 14.6667V12.8333H5.5V14.6667H0V14.6667M3.66667 11V9.16667H0V7.33333H3.66667V5.5H5.5V11H3.66667V11M7.33333 9.16667V7.33333H16.5V9.16667H7.33333V9.16667M11 5.5V0H12.8333V1.83333H16.5V3.66667H12.8333V5.5H11V5.5M0 3.66667V1.83333H9.16667V3.66667H0V3.66667"
                                        fill="#D4C95E" />
                                </svg>
                            </button>
                        </div>
                    </li>
                <?php
                }
                wp_reset_postdata();
                ?>
                </ul>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section class="arsenal">
        <div class="container">

            <div class="arsenal__header">
                <div class="arsenal__titles">
                    <span class="arsenal__label">// ARSENAL SELECTOR</span>
                    <h2 class="arsenal__title">КАТЕГОРІЇ СПОРЯДЖЕННЯ</h2>
                </div>

                <a href="#" class="arsenal__all">
                    <span>ВСІ (38)</span>
                    <span class="arsenal__arrow">
                        <svg viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.06667 4L0 0.933333L0.933333 0L4.93333 4L0.933333 8L0 7.06667L3.06667 4Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                </a>
            </div>

            <div class="categories">
            <?php
                wp_nav_menu( [
                    'theme_location'  => 'top', //ідентифікатор нашого меню
                    'menu'            => '', //меню яке потрібно вивести
                    'container'       => 'div', //чим огортати тег ul
                    'container_class' => 'front-page-menu', //клас контейнера меню
                ] );
            ?>
            </div>
            

        </div>
    </section>

    <section class="hits">
        <div class="container">
            <!-- SECTION HEADER -->
            <div class="hits__header">
                <span class="hits__label">
                    🔥 TOP OPERATIONAL SELLERS
                </span>
                <h2 class="hits__title">
                    ХІТИ СЕЗОНУ //
                    <br>
                    НАЯВНІСТЬ
                </h2>
            </div>
            <!-- SWIPER -->
            <div class="swiper products-slider">
                <div class="swiper-wrapper">
                    <!-- PRODUCT 1 -->
                    <article class="swiper-slide product-card">
                        <div class="product-card__image-wrapper">
                            <img class="product-card__image" src="assets/images/productcard1.png"
                                alt="IWB GLOCK 17/19 CYBER CAMO">
                            <div class="product-card__badges">
                                <span class="badge badge--discount">
                                    -15% ЗСУ
                                </span>
                                <span class="badge badge--stock">
                                    В НАЯВНОСТІ
                                </span>
                            </div>
                            <button class="product-card__favorite" type="button" aria-label="Додати в обране">
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.5 13.7625L6.4125 12.7875C5.15 11.65 4.10625 10.6687 3.28125 9.84375C2.45625 9.01875 1.8 8.27812 1.3125 7.62187C0.825 6.96562 0.484375 6.3625 0.290625 5.8125C0.096875 5.2625 0 4.7 0 4.125C0 2.95 0.39375 1.96875 1.18125 1.18125C1.96875 0.39375 2.95 0 4.125 0C4.775 0 5.39375 0.1375 5.98125 0.4125C6.56875 0.6875 7.075 1.075 7.5 1.575C7.925 1.075 8.43125 0.6875 9.01875 0.4125C9.60625 0.1375 10.225 0 10.875 0C12.05 0 13.0312 0.39375 13.8188 1.18125C14.6063 1.96875 15 2.95 15 4.125C15 4.7 14.9031 5.2625 14.7094 5.8125C14.5156 6.3625 14.175 6.96562 13.6875 7.62187C13.2 8.27812 12.5437 9.01875 11.7188 9.84375C10.8938 10.6687 9.85 11.65 8.5875 12.7875L7.5 13.7625ZM7.5 11.7375C8.7 10.6625 9.6875 9.74063 10.4625 8.97188C11.2375 8.20312 11.85 7.53437 12.3 6.96562C12.75 6.39687 13.0625 5.89062 13.2375 5.44688C13.4125 5.00313 13.5 4.5625 13.5 4.125C13.5 3.375 13.25 2.75 12.75 2.25C12.25 1.75 11.625 1.5 10.875 1.5C10.2875 1.5 9.74375 1.66563 9.24375 1.99688C8.74375 2.32812 8.4 2.75 8.2125 3.2625H6.7875C6.6 2.75 6.25625 2.32812 5.75625 1.99688C5.25625 1.66563 4.7125 1.5 4.125 1.5C3.375 1.5 2.75 1.75 2.25 2.25C1.75 2.75 1.5 3.375 1.5 4.125C1.5 4.5625 1.5875 5.00313 1.7625 5.44688C1.9375 5.89062 2.25 6.39687 2.7 6.96562C3.15 7.53437 3.7625 8.20312 4.5375 8.97188C5.3125 9.74063 6.3 10.6625 7.5 11.7375Z"
                                        fill="currentColor" />
                                </svg>
                            </button>
                        </div>
                        <div class="product-card__content">
                            <!-- RATING -->
                            <div class="product-card__rating">
                                <span class="product-card__star">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.23125 11.0833L3.17917 6.98542L0 4.22917L4.2 3.86458L5.83333 0L7.46667 3.86458L11.6667 4.22917L8.4875 6.98542L9.43542 11.0833L5.83333 8.91042L2.23125 11.0833Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <span>
                                    4.9 (128 ВІДГУКІВ)
                                </span>
                            </div>
                            <!-- TITLE -->
                            <h3 class="product-card__title">
                                IWB GLOCK 17/19 "CYBER CAMO"
                            </h3>
                            <!-- DESCRIPTION -->
                            <p class="product-card__description">
                                Кайдеks 2.0 мм США, металева
                                кліпса 1.5"
                            </p>
                            <!-- PRICE -->
                            <div class="product-card__price">
                                <span class="product-card__price-current">
                                    1 850 ₴
                                </span>
                                <span class="product-card__price-old">
                                    2 200 ₴
                                </span>
                            </div>
                            <!-- CART -->
                            <button class="product-card__cart" type="button">
                                <span class="product-card__cart-icon">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.66667 5.33333V3.33333H4.66667V2H6.66667V0H8V2H10V3.33333H8V5.33333H6.66667ZM4 14C3.63333 14 3.31944 13.8694 3.05833 13.6083C2.79722 13.3472 2.66667 13.0333 2.66667 12.6667C2.66667 12.3 2.79722 11.9861 3.05833 11.725C3.31944 11.4639 3.63333 11.3333 4 11.3333C4.36667 11.3333 4.68056 11.4639 4.94167 11.725C5.20278 11.9861 5.33333 12.3 5.33333 12.6667C5.33333 13.0333 5.20278 13.3472 4.94167 13.6083C4.68056 13.8694 4.36667 14 4 14ZM10.6667 14C10.3 14 9.98611 13.8694 9.725 13.6083C9.46389 13.3472 9.33333 13.0333 9.33333 12.6667C9.33333 12.3 9.46389 11.9861 9.725 11.725C9.98611 11.4639 10.3 11.3333 10.6667 11.3333C11.0333 11.3333 11.3472 11.4639 11.6083 11.725C11.8694 11.9861 12 12.3 12 12.6667C12 13.0333 11.8694 13.3472 11.6083 13.6083C11.3472 13.8694 11.0333 14 10.6667 14ZM0 2V0.666667H2.18333L5.01667 6.66667H9.68333L12.2833 2H13.8L10.8667 7.3C10.7444 7.52222 10.5806 7.69444 10.375 7.81667C10.1694 7.93889 9.94444 8 9.7 8H4.73333L4 9.33333H12V10.6667H4C3.5 10.6667 3.11944 10.45 2.85833 10.0167C2.59722 9.58333 2.58889 9.14444 2.83333 8.7L3.73333 7.06667L1.33333 2H0Z"
                                            fill="#D4C95E" />
                                    </svg>
                                </span>
                                <span>
                                    ШВИДКИЙ КОШИК
                                </span>
                            </button>
                        </div>
                    </article>



                    <!-- PRODUCT 2 -->
                    <article class="swiper-slide product-card">

                        <div class="product-card__image-wrapper">

                            <img class="product-card__image" src="./img/product-2.jpg" alt="ПАУЧЕР АК-74">

                            <div class="product-card__badges">

                                <span class="badge badge--hit">
                                    ХІТ ПРОДАЖУ
                                </span>

                            </div>

                            <button class="product-card__favorite" type="button" aria-label="Додати в обране">
                                ♡
                            </button>

                        </div>


                        <div class="product-card__content">

                            <div class="product-card__rating">
                                <span class="product-card__star">★</span>

                                <span>
                                    5.0 (84 ВІДГУКИ)
                                </span>
                            </div>


                            <h3 class="product-card__title">
                                ПАУЧЕР АК-74
                            </h3>


                            <p class="product-card__description">
                                Швидкий скид, паракорд
                            </p>


                            <div class="product-card__price">

                                <span class="product-card__price-current">
                                    1 250 ₴
                                </span>

                                <span class="product-card__price-old">
                                    1 500 ₴
                                </span>

                            </div>


                            <button class="product-card__cart" type="button">
                                <span class="product-card__cart-icon">
                                    🛒
                                </span>

                                <span>
                                    ШВИДКИЙ КОШИК
                                </span>
                            </button>

                        </div>

                    </article>



                </div>

            </div>

        </div>
    </section>

    <section class="workshop">
        <div class="container">

            <div class="workshop__header">
                <span class="workshop__label">
                    // WORKSHOP ARCHIVE
                </span>

                <h2 class="workshop__title">
                    МАЙСТЕРНЯ СНЕHLUНА
                </h2>
            </div>


            <a class="workshop__video-link" href="https://www.youtube.com/@YOUR_CHANNEL" target="_blank"
                rel="noopener noreferrer" aria-label="Перейти на YouTube-канал майстерні">
                <div class="workshop__video-wrapper">

                    <video class="workshop__video" autoplay muted loop playsinline preload="metadata"
                        poster="./img/workshop-poster.jpg">
                        <source src="assets/images/test.mp4" type="video/mp4">

                        Ваш браузер не підтримує відтворення відео.
                    </video>
                </div>
            </a>
        </div>
    </section>

 <section class="reviews">
    <div class="container">

        <!-- Section header -->
        <div class="reviews__header">

            <span class="reviews__label">
                ★ COMBAT TESTED
            </span>

            <h2 class="reviews__title">
                БОЙОВИЙ ТЕСТ-ДРАЙВ
            </h2>

        </div>


        <!-- Reviews slider -->
        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">


                <!-- Review 1 -->
                <article class="swiper-slide review-card">

                    <div class="review-card__top">

                        <div class="review-card__avatar">
                            C
                        </div>

                        <div class="review-card__user">

                            <h3 class="review-card__name">
                                СЕРГІЙ "ТОР"
                            </h3>

                            <p class="review-card__location">
                                ЗСУ // Харківський напрямок
                            </p>

                        </div>

                    </div>


                    <div class="review-card__rating">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.23125 11.0833L3.17917 6.98542L0 4.22917L4.2 3.86458L5.83333 0L7.46667 3.86458L11.6667 4.22917L8.4875 6.98542L9.43542 11.0833L5.83333 8.91042L2.23125 11.0833Z" fill="currentColor"/>
                        </svg>
                    </div>


                    <p class="review-card__text">
                        "Взяв кобуру під Glock 19 та
                        два паучери під магазини.
                        Кайфовий міцний як броня,
                        тримає мертво навіть коли
                        повзеш посадкою, кліпса
                        сталева не згинається.
                        Рекомендую побратимам!"
                    </p>


                    <p class="review-card__products">
                        ВИРОБИ: IWB GLOCK 19 + DOUBLE MAG POUCH
                    </p>

                </article>



                <!-- Review 2 -->
                <article class="swiper-slide review-card">

                    <div class="review-card__top">

                        <div class="review-card__avatar">
                            O
                        </div>

                        <div class="review-card__user">

                            <h3 class="review-card__name">
                                ОЛЕНА
                            </h3>

                            <p class="review-card__location">
                                Патрульна поліція
                            </p>

                        </div>

                    </div>


                    <div class="review-card__rating">
                        ★★★★★
                    </div>


                    <p class="review-card__text">
                        "Підсумок для балончика
                        тримає силу на службі.
                        Яскравий помаранчевий
                        виглядає стильно,
                        а доступ до балончика
                        дуже швидкий навіть
                        у складній ситуації."
                    </p>


                    <p class="review-card__products">
                        ВИРОБИ: DUTY GAS HOLDER + FAST-DRAW
                    </p>

                </article>



                <!-- Review 3 -->
                <article class="swiper-slide review-card">

                    <div class="review-card__top">

                        <div class="review-card__avatar">
                            M
                        </div>

                        <div class="review-card__user">

                            <h3 class="review-card__name">
                                МАКС
                            </h3>

                            <p class="review-card__location">
                                Військовий // Дніпро
                            </p>

                        </div>

                    </div>


                    <div class="review-card__rating">
                        ★★★★★
                    </div>


                    <p class="review-card__text">
                        "Замовляв комплект для
                        щоденного використання.
                        Все добре прошито,
                        нічого не люфтить,
                        матеріал витримує
                        постійне навантаження."
                    </p>


                    <p class="review-card__products">
                        ВИРОБИ: EDC HOLSTER + MAG POUCH
                    </p>

                </article>

            </div>


            <!-- Pagination -->
            <div class="reviews-pagination"></div>

        </div>

    </div>
</section>
<?php get_footer(); ?> 
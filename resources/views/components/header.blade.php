{{-- {{dd($product_attributes[1][0])}} --}}

<header class="header">
    <div class="header__container container">
        <div class="header__container__logo">
            <img src="//theme.hstatic.net/1000026716/1000440777/14/logo.svg?v=28492" alt=""
                class="header__container__logo__image">
        </div>
        <div class="header__container__search">
            <form action="{{ route('home') }}" method="GET" class="header__container__search__form">
                <input placeholder="Nhập mã hoặc tên sản phẩm..." type="text" id="keyword "name="keyword"
                    class="header__container__search__form__input">
                <button class="header__container__search__form__button">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>

        <div class="header__container__feature">
            <div class="header__container__feature__list">
                <a href="/" class="header__container__feature__list__item">
                    <i class="fa-solid fa-registered"></i>
                    Đăng kí
                </a>
                <a href="/" class="header__container__feature__list__item">
                    <i class="fa-solid fa-circle-user"></i>
                    Đăng nhập
                </a>
                <a href="/" class="header__container__feature__list__item">
                    <i class="fa-solid fa-tag fa-flip-horizontal"></i>
                    Khuyến mãi
                </a>
                <a href="/" class="header__container__feature__list__item">
                    <i class="fa-solid fa-cart-shopping fa-flip-horizontal"></i>
                    Giỏ hàng
                </a>

            </div>
        </div>
    </div>

    <hr>
    <div class="header__function container">
        <div class="header__function__categories">
            <div class="header__function__categories__content">
                <i class="fa-solid fa-bars"></i>
                <h6 class="header__function__categories__content__text">
                    Danh mục sản phẩm
                </h6>
            </div>

            <div class="header__function__categories__menu show">
                <div class="header__function__categories__menu__list">
                    @foreach ($categories as $category)
                        <div class="header__function__categories__menu__list__item">
                            <div class="header__function__categories__menu__list__item__content">
                                <i class="fa-solid fa-laptop"></i>
                                <p class="header__function__categories__menu__list__item__content__text">
                                    {{ $category->name }}
                                </p>
                            </div>
                            <div class="header__function__categories__menu__list__item__submenu">
                                @foreach ($category->attribute_details->groupBy("property_id")->all() as $property)
                                    <div class="header__function__categories__menu__list__item__submenu__subcontent">
                              
                                        <h6
                                            class="header__function__categories__menu__list__item__submenu__subcontent__title">
                                            {{ $property[0]->properties->name }}
                                        </h6>

                                        <div
                                            class="header__function__categories__menu__list__item__submenu__subcontent__list">
                                            @foreach ($category->attribute_details->groupBy("attribute_id")->all() as $attribute)
                                                <a href=""
                                                    class="header__function__categories__menu__list__item__submenu__subcontent__list__item">
                                                    {{$attribute[0]->attributes->name}}
                                                </a>
                                            @endforeach

                                        </div>

                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="header__function__guide">
            <a href="" class="header__function__guide__item">
                <i class="fa-solid fa-hand-holding-dollar"></i>
                Hướng dẫn thanh toán
            </a>

            <a href="" class="header__function__guide__item">
                <i class="fa-solid fa-hand-holding-dollar"></i>
                Hướng dẫn trả góp
            </a>

            <a href="" class="header__function__guide__item">
                <i class="fa-solid fa-toolbox"></i>
                Chính sách bảo hành
            </a>

            <a href="" class="header__function__guide__item">
                <i class="fa-solid fa-truck-fast"></i>
                Chính sách vận chuyển
            </a>
        </div>
    </div>
</header>

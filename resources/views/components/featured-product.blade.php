<div class="featured">
    <div class="featured__container container ">
        <div class="featured__container__header">
            <h2 class="featured__container__header__title">
                {{$title}} bán chạy
            </h2>

            <a href="{{route("categories.home", ["name" => $title])}}" class="featured__container__header__more">
                xem thêm
            </a>
        </div>

        <div class="featured__container__wrapper ">
            <div class="featured__container__wrapper__list">
                {{-- Item --}}
                @foreach ($products as $product)
               
                    <a href="{{route("products.detail", ["name" => $product->title])}}" class="featured__container__wrapper__list__item">
                        <img src="{{ $product->thumbnail }}" alt="">
                        <div class="featured__container__wrapper__list__item__content">
                            <div class="featured__container__wrapper__list__item__title">{{ $product->title }}</div>
                            <div class="featured__container__wrapper__list__item__price">{{ $product->price }} đ</div>

                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>

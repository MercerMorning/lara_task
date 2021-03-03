Корзина
@if($orders)
    @foreach($orders as $order)
        {{--    {{ $cheapestProduct->id }}--}}
        <div>
            <img src="{{ $order->getFirstMediaUrl('img') ?? '' }}" width="150" height="150" alt=""/>
            название: {{ $order->name }} |
            цена: {{ $order->price }}
            <a href="{{ route('product.show', [ 'product' => $order ]) }}">подробнее</a>
        </div>
    @endforeach
@endif

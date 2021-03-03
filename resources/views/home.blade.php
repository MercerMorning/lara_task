@isset($categories)
    <ul>
    @foreach($categories as $category)
        <li>
            <a href="{{ route('category.show', ['category' => $category]) }}">{{ $category->name }}</a>
        </li>
    @endforeach
    </ul>
@endisset
@foreach($cheapestProducts as $cheapestProduct)
{{--    {{ $cheapestProduct->id }}--}}
    <div>
        <img src="{{ $cheapestProduct->getFirstMediaUrl('img') ?? '' }}" width="150" height="150" alt=""/>
        название: {{ $cheapestProduct->name }} |
        цена: {{ $cheapestProduct->price }}
        <a href="{{ route('product.show', [ 'product' => $cheapestProduct ]) }}">подробнее</a>
    </div>
@endforeach

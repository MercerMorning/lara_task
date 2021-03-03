
<img src="{{ $product->getFirstMediaUrl('img') ?? '' }}" width="150" height="150" alt=""/>
@foreach($product->getMedia('other_images') as $image)
    <img src="{{ $image->getUrl() }}" width="100" height="100">
@endforeach
название: {{ $product->name }} |
цена: {{ $product->price }}
<br>
остаток: {{ $product->amount }}
<br>
@if($product->amount > 0)
    <form
          action="{{ route('order.create', $product) }}"
          method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <input type="hidden" name="productId" value="{{ $product->id }}">
        <input type="submit" value="заказать!">
    </form>
@endif
<ul>
    @foreach($product->categories as $category)
        <li>{{ $category->name }}</li>
    @endforeach
</ul>


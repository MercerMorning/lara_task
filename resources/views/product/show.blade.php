
<img src="{{ $product->getFirstMediaUrl('img') ?? '' }}" width="150" height="150" alt=""/>
@foreach($product->getMedia('other_images') as $image)
    <img src="{{ $image->getUrl() }}" width="100" height="100">
@endforeach
название: {{ $product->name }} |
цена: {{ $product->price }}
<br>
остаток: {{ $product->amount }}
<br>
<ul>
    @foreach($product->categories as $category)
        <li>{{ $category->name }}</li>
    @endforeach
</ul>


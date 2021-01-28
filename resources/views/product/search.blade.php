@include('header')

<div class="divider"><span></span><span>ALL PRODUCTS</span><span></span></div>
<div class="ui grid container">

    @foreach($produits as $produit)
    <div class="four wide column">
        <a href="{{route('showProduit', ['id' => $produit->id]) }}">
        <img src="https://www.rpnation.com/gallery/250-x-250-placeholder.30091/full">
        <div class="text">
            <a href="{{route('showProduit', ['id' => $produit->id]) }}"> <h2> {{ $produit->name }} </h2></a>
        </div>
    </div>
    @endforeach
</div>



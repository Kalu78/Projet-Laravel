@include('header')

<div class="divider"><span></span><span>ALL PRODUCTS</span><span></span></div>
<div class="ui grid container">

    @foreach($produits as $produit)
    <div class="four wide column">
        <a class="test" href="{{route('showProduit', ['id' => $produit->id]) }}">
        <img src="https://www.rpnation.com/gallery/250-x-250-placeholder.30091/full">
        <div class="text">
            <a href="{{route('showProduit', ['id' => $produit->id]) }}"> <h3> {{ $produit->name }} </h3></a>
        </div>
    </div>
    @endforeach
</div>

<div class="pagination">
    <a href="{{$produits->previousPageUrl()}}" class="ab">
        <i class="angle left icon"></i>
    </a>
    @for($i=1;$i<=$produits->lastPage();$i++)
        <a href="{{$produits->url($i)}}">{{$i}}</a>
    @endfor
    <a href="{{$produits->nextPageUrl()}}" class="ab"> 
        <i class="angle right icon"></i>
    </a>
</div>

@include('header')

<body>
    <div class="product">

        <div class="images">
            <div class="ui large rounded image">
                <img src="/img/logo.png" height="450px" width="500px">
            </div>
            <div class="ui three column grid">
                <div class="column">
                    <div class="ui segment">
                        <img src="/img/logo.png" height="150px" width="150px">
                    </div>
                </div>
                <div class="column">
                    <div class="ui segment">
                        <img src="/img/logo.png" height="150px" width="150px">
                    </div>
                </div>
                <div class="column">
                    <div class="ui segment">
                    <img src="/img/logo.png" height="150px" width="150px">
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <h1> {{$name}} </h1>
            <div class="description">
                <p>{{$description}}</p>
            </div>
            <div class="price">
                Prix : {{$price}}€
            </div>
            <div class="quantité">
                Quantité : 
                <select name="" id="">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </select>
            </div>
            <div class="buy">
                <form action="{{ route('emails.order') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $id }}">
                <input type="hidden" name="name" value="{{ $name }}">
                <input type="hidden" name="description" value="{{ $description }}">
                <input type="hidden" name="price" value="{{ $price }}">
                    <button type='submit'> Ajouter au panier </button>
                </form>
            </div>
        </div>

    </div>

<div class="some-wrapping-div">
  <div class="ui custom button">Show custom popup</div>
</div>
<div class="ui custom popup top left transition hidden">
 I'm not on the same level as the button, but i can still be found.
</div>

<script>
    $('.ui.modal')
  .modal('attach events', '.test', 'show')
  ;
</script> 

</body>


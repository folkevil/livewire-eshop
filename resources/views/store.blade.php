@extends('layouts.app')

@section('content')
<div>
    <div class="wrapper">
        <nav>
            @include('layouts.partials.nav')
        </nav>
        <main class="capsule">
            @include('inc.masthead')
            <div class="contain">
                @livewire('sidebar')
                <section class="content">
                    @livewire('item')
                </section>
            </div>
        </main>

        <div class="clear"></div>
        <div class="push"></div>
    </div>
    @include('layouts.partials.footer')
</div>
<script type="text/javascript">
    window.__NUXT__ = {
        "layout": "default",
        "data": [{}],
        "error": null,
        "state": {
            "cartTotal": 0,
            "cart": [],
            "sale": false,
            "products": [{
                "name": "Khaki Suede Polish Work Boots",
                "price": 149.99,
                "category": "women",
                "sale": true,
                "article": "shoe",
                "img": "shoe1.png"
            }, {
                "name": "Camo Fang Backpack Jungle",
                "price": 39.99,
                "category": "women",
                "sale": false,
                "article": "jacket",
                "img": "jacket1.png"
            }, {
                "name": "Parka and Quilted Liner Jacket",
                "price": 49.99,
                "category": "men",
                "sale": true,
                "article": "jacket",
                "img": "jacket2.png"
            }, {
                "name": "Cotton Black Cap",
                "price": 12.99,
                "category": "men",
                "sale": true,
                "article": "hats",
                "img": "hat1.png"
            }, {
                "name": "Knit Sweater with Zips",
                "price": 29.99,
                "category": "women",
                "sale": false,
                "article": "sweater",
                "img": "sweater1.png"
            }, {
                "name": "Long Linen-blend Shirt",
                "price": 18.99,
                "category": "men",
                "sale": false,
                "article": "shirt",
                "img": "shirt1.png"
            }, {
                "name": "Knit Orange Sweater",
                "price": 28.99,
                "category": "men",
                "sale": false,
                "article": "sweater",
                "img": "sweater2.png"
            }, {
                "name": "Cotton Band-collar Blouse",
                "price": 49.99,
                "category": "men",
                "sale": false,
                "article": "shirt",
                "img": "shirt2.png"
            }, {
                "name": "Camo Fang Backpack Jungle",
                "price": 59.99,
                "category": "women",
                "sale": true,
                "article": "jacket",
                "img": "jacket3.png"
            }, {
                "name": "Golden Pilot Jacket",
                "price": 129.99,
                "category": "women",
                "sale": false,
                "article": "jacket",
                "img": "jacket4.png"
            }, {
                "name": "Spotted Patterned Sweater",
                "price": 80.99,
                "category": "women",
                "sale": false,
                "article": "jacket",
                "img": "sweater4.png"
            }, {
                "name": "Double Knit Sweater",
                "price": 59.99,
                "category": "men",
                "sale": true,
                "article": "jacket",
                "img": "sweater5.png"
            }]
        },
        "serverRendered": true
    };

</script>
@endsection
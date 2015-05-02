@extends( 'layouts.main' )

@section('promo')
   <section id="promo-alt">
        <div id="promo1">
            <h1>The brand new MacBook Pro</h1>
            <p>With a special price, <span class="bold">today only!</span></p>
            <a href="#" class="secondary-btn">READ MORE</a>
            {{ HTML::image('img/macbook.png', 'MacBook Pro') }}
        </div><!-- end promo1 -->
        <div id="promo2">
            <h2>The iPhone 5 is now<br>available in our store!</h2>
            <a href="">Read more {{ HTML::image('img/right-arrow.gif', 'Read more') }}</a>
            {{ HTML::image('img/iphone.png', 'iPhone') }}
        </div><!-- end promo2 -->
        <div id="promo3">
            {{ HTML::image('img/thunderbolt.png', 'Thunderbolt') }}
            <h2>The 27"<br>Thunderbolt Display.<br>Simply Stunning.</h2>
            <a href="#">Read more {{ HTML::image('img/right-arrow.gif', 'Read more') }}</a>
        </div><!-- end promo3 -->
   </section><!-- promo-alt -->
@stop

@section('content')
 <section>
   <div class="container">
     <div class="row">
         <div class="col-sm-3">
             @include('partials/sidebar')
         </div><!-- /col-sm-3 -->
         <div class="col-sm-9 padding-right">
           <div class="features_items"><!--features_items-->
             <h2 class="title text-center">{{ $category->name }}</h2>
             @foreach($products as $product)
               <div class="col-sm-4">
                   <div class="product-image-wrapper">
                     <a href="/store/view/{{ $product->id }}">
                         <div class="single-products">
                             <div class="productinfo text-center">
                               {{ HTML::image($product->image, $product->title,
                                   array('class' => 'feature', 'width' => '240', 'height' => '260')) }}
                               <h2>${{ $product->price }}</h2>
                               <p>{{ $product->title }}</p>
                               @include('partials.addtocart')
                             </div>
                             <div class="product-overlay">
                               <div class="overlay-content">
                                 <h2>${{ $product->price }}</h2>
                                 <p>{{ $product->title }}</p>
                                 @include('partials.addtocart')
                               </div>
                             </div>
                         </div>
                     </a>
                     <div class="choose">
                       <ul class="nav nav-pills nav-justified">
                         <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                         <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                       </ul>
                     </div>
                   </div>
               </div>
             @endforeach
           </div><!-- /features_items-->
         </div><!-- /col-sm-9 padding-right -->
       </div><!-- /row -->
     </div><!-- /container -->
 </section>
@stop

@section('pagination')
  <section id="pagination">
    {{ $products->links() }}
  </section><!-- end #pagination -->
@stop
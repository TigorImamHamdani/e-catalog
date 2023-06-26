<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="{{ route('all-product') }}">view all products <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          
            @foreach($data as $product)

            <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img height="300" width="150" src="{{ asset('storage/' . $product->image) }}" alt=""></a>
              <div class="down-content">
              <a href="#"><h4>{{ $product->title }}</h4></a>
                <p>{!! $product->desc !!}</p>
                <ul class="stars">
                  <li><i>Rp.{{ $product->price }}</i></li>
                </ul>
                <span>{{ implode(', ', $product->size) }}</span>
              </div>
            </div>
          </div>

            @endforeach

            <div class="d-flex justify-content-center">

            {!! $data->links() !!}

            </div>

        </div>
      </div>
    </div>
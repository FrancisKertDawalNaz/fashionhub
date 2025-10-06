@extends('user.layouts.shopmain')

@section('content')
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-10">
      <div class="row g-0 shadow-lg border-0 rounded-4 overflow-hidden"
        style="background:rgba(255,255,255,0.96);backdrop-filter:blur(10px);">

        <!-- LEFT -->
        <div class="col-md-5 d-flex align-items-center justify-content-center bg-light">
          <img id="productImg" src="{{ $product['img'] ?? '' }}" alt="Product"
            style="width:100%;max-height:320px;object-fit:cover;border-radius:16px;">
        </div>

        <!-- RIGHT -->
        <div class="col-md-7 p-4">
          <h4 id="productName">{{ $product['name'] ?? 'Product Name' }}</h4>
          <p id="productDesc">{{ $product['desc'] ?? '' }}</p>
          <div>₱<span id="productPrice">{{ $product['price'] ?? '1500' }}</span></div>
          <div>Shop: <span id="productShop">{{ $product['shop'] ?? 'Shop 1' }}</span></div>

          <div class="mt-3">
            <form id="cartForm" action="{{ route('cart.store') }}" method="POST" class="w-100">
              @csrf
              <input type="hidden" name="product_id" value="{{ $product['id'] ?? 1 }}">
              <input type="hidden" name="name" value="{{ $product['name'] ?? '' }}">
              <input type="hidden" name="price" value="{{ $product['price'] ?? 0 }}">
              <input type="hidden" name="image" value="{{ $product['img'] ?? '' }}">
              <input type="hidden" name="shop" value="{{ $product['shop'] ?? '' }}">
              <input type="hidden" name="qty" id="qtyInput" value="1">
              <input type="hidden" name="duration" id="durationInput" value="Not selected">

              <button type="submit" class="btn flex-fill fw-semibold d-flex align-items-center justify-content-center gap-2"
                style="
    background: linear-gradient(135deg, #111, #333);
    border: none;
    border-radius: 12px;
    padding: 12px 0;
    color: #fff;
    font-size: 1rem;
    letter-spacing: 0.5px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.25);
    transition: all 0.3s ease;
  "
                onmouseover="this.style.background='linear-gradient(135deg,#222,#555)'; this.style.transform='translateY(-2px)';"
                onmouseout="this.style.background='linear-gradient(135deg,#111,#333)'; this.style.transform='translateY(0)';">
                <i class="bi bi-cart-plus" style="font-size:1.2rem;"></i>
                Add to Cart
              </button>

            </form>


          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@push('scripts')
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  document.getElementById('cartForm').addEventListener('submit', function(e) {
    e.preventDefault();

    let form = this;
    let formData = new FormData(form);

    fetch(form.action, {
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value
        },
        body: formData
      })
      .then(res => res.json())
      .then(data => {
        if (data.success) {
          Swal.fire({
            icon: 'success',
            title: 'Added to Cart!',
            text: data.message ?? `${data.item.name} was added successfully.`,
            showConfirmButton: false,
            timer: 1500
          });
        } else {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: data.message ?? 'Something went wrong!'
          });
        }
      })
      .catch(err => {
        Swal.fire({
          icon: 'error',
          title: 'Request Failed',
          text: 'Please try again.'
        });
        console.error(err);
      });
  });
</script>
@endpush


@endsection
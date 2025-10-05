@extends('user.layouts.shopmain')

@section('content')
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-10">
      <div class="row g-0 shadow-lg border-0 rounded-4 overflow-hidden" style="background:rgba(255,255,255,0.96);backdrop-filter:blur(10px);">
        <!-- LEFT: Product Image -->
        <div class="col-md-5 d-flex align-items-center justify-content-center bg-light" style="min-height:360px;padding:16px;">
          <img id="productImg" src="{{ $product['img'] ?? '' }}" alt="Product" style="width:100%;height:auto;max-height:320px;object-fit:cover;border-radius:16px;box-shadow:0 4px 20px rgba(0,0,0,0.08);transition:transform 0.3s ease;">
        </div>
        <!-- RIGHT: Product Details -->
        <div class="col-md-7 p-4 d-flex flex-column justify-content-between">
          <div>
            <div class="d-flex justify-content-between align-items-start mb-3">
              <h4 id="productName" class="fw-bold text-dark mb-0" style="font-size:1.4rem;">{{ $product['name'] ?? 'Product Name' }}</h4>
              <span class="text-end small" style="color:#666;">
                {{ $product['shop'] ?? 'Shop 1' }}<br><span style="color:#FFB400;font-size:1rem;">★★★★★</span>
              </span>
            </div>
            <div class="mb-3">
              <strong class="text-dark">Inclusions:</strong>
              <ul id="productInclusions" class="mb-1" style="font-size:0.95rem;color:#555;padding-left:18px;line-height:1.5;">
                @if(isset($product['inclusions']) && is_array($product['inclusions']))
                  @foreach($product['inclusions'] as $inc)
                    <li>{{ $inc }}</li>
                  @endforeach
                @endif
              </ul>
            </div>
            <div id="productDesc" style="font-size:0.95rem;color:#555;margin-bottom:14px;min-height:40px;">
              {{ $product['desc'] ?? '' }}
            </div>
            <div class="row gy-2 mb-3">
              <div class="col-6">
                <div class="fw-semibold text-dark">Size</div>
                <div class="text-secondary">{{ $product['size'] ?? 'Medium Size' }}</div>
              </div>
              <div class="col-6">
                <div class="fw-semibold text-dark">Quantity</div>
                <div class="d-flex align-items-center gap-2">
                  <button class="btn btn-sm btn-outline-dark rounded-circle" id="qtyMinus" style="width:32px;height:32px;">−</button>
                  <span id="qty" class="fw-semibold" style="min-width:24px;text-align:center;">1</span>
                  <button class="btn btn-sm btn-outline-dark rounded-circle" id="qtyPlus" style="width:32px;height:32px;">+</button>
                </div>
              </div>
            </div>
            <div class="row gy-2 align-items-end">
              <div class="col-6">
                <div class="fw-semibold text-dark">Duration</div>
                <div class="d-flex flex-wrap gap-2 mt-1">
                  <button class="btn btn-outline-secondary btn-sm rounded-pill px-3">1–2 days</button>
                  <button class="btn btn-outline-secondary btn-sm rounded-pill px-3">3–4 days</button>
                </div>
              </div>
              <div class="col-6 text-end">
                <div class="fw-bold text-dark" style="font-size:1.25rem;">
                  ₱<span id="productPrice">{{ $product['price'] ?? '1,500.00' }}</span>
                </div>
              </div>
            </div>
          </div>
          <!-- Buttons -->
          <div class="d-flex gap-2 mt-4">
            <button class="btn flex-fill text-white fw-semibold" style="background:linear-gradient(135deg,#111,#333);border:none;border-radius:12px;padding:10px 0;box-shadow:0 4px 12px rgba(0,0,0,0.15);transition:all 0.25s;">
              Add to Cart
            </button>
            <button class="btn flex-fill fw-semibold" style="border:1.8px solid #111;color:#111;border-radius:12px;padding:10px 0;transition:all 0.25s;">
              Book Now
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('qtyPlus').addEventListener('click', function() {
        let qty = parseInt(document.getElementById('qty').textContent);
        document.getElementById('qty').textContent = qty + 1;
    });
    document.getElementById('qtyMinus').addEventListener('click', function() {
        let qty = parseInt(document.getElementById('qty').textContent);
        if (qty > 1) document.getElementById('qty').textContent = qty - 1;
    });
});
</script>
@endsection

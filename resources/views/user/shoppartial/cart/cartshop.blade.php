<!-- Cart Offcanvas -->
<div class="offcanvas offcanvas-end border-0 shadow-lg" tabindex="-1" id="offcanvasCart" style="backdrop-filter: blur(8px);">
  <div class="offcanvas-header text-white" style="background: linear-gradient(135deg, #1e1e2f, #343a40);">
    <h5 class="offcanvas-title fw-bold">Your Cart 🛒</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body p-4" style="background: #f8f9fa;">

    <!-- Sample Cart Items -->
<div class="d-flex align-items-center mb-3 p-3 bg-white rounded-4 shadow-sm">
  <img src="{{ asset('img/acces.jpg') }}" class="rounded-3 me-3" alt="Product" style="width:50px; height:50px; object-fit:cover;">
  <div class="flex-grow-1">
    <h6 class="mb-1 fw-semibold">Black Dress</h6>
    <small class="text-muted">$120.00</small>
  </div>
  <button class="btn btn-sm btn-outline-danger rounded-pill"><i class="fa fa-trash"></i></button>
</div>

<div class="d-flex align-items-center mb-3 p-3 bg-white rounded-4 shadow-sm">
  <img src="{{ asset('img/acces.jpg') }}" class="rounded-3 me-3" alt="Product" style="width:50px; height:50px; object-fit:cover;">
  <div class="flex-grow-1">
    <h6 class="mb-1 fw-semibold">Leather Bag</h6>
    <small class="text-muted">$85.00</small>
  </div>
  <button class="btn btn-sm btn-outline-danger rounded-pill"><i class="fa fa-trash"></i></button>
</div>


    <!-- Cart Summary -->
    <div class="border-top pt-3 mt-4">
      <div class="d-flex justify-content-between mb-2 fw-semibold">
        <span>Subtotal</span>
        <span>$205.00</span>
      </div>
      <div class="d-grid">
        <button class="btn py-3 rounded-4 fw-semibold shadow-sm" style="background: linear-gradient(135deg, #343a40, #1e1e2f); color: white;">
          Checkout
        </button>
      </div>
    </div>

  </div>
</div>

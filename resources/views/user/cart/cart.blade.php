<!-- Cart Offcanvas -->
<div class="offcanvas offcanvas-end border-0 shadow-lg" tabindex="-1" id="offcanvasCart" style="backdrop-filter: blur(8px);">
  <div class="offcanvas-header text-white" style="background: linear-gradient(135deg, #1e1e2f, #343a40);">
    <h5 class="offcanvas-title fw-bold">Your Cart 🛒</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body d-flex flex-column justify-content-center align-items-center text-center" style="background: #f8f9fa;">

    <p class="fw-semibold text-muted mb-4" style="font-size: 1.1rem;">
      Your shopping bag is empty... but it doesn't have to be!
    </p>

    <a href="{{ route('user.home') }}" class="btn px-4 py-3 rounded-4 fw-semibold shadow-sm"
       style="background: linear-gradient(135deg, #343a40, #1e1e2f); color: white;">
      Shop New Arrivals
    </a>

  </div>
</div>

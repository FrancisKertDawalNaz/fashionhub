<div class="offcanvas offcanvas-end border-0 shadow-lg" tabindex="-1" id="offcanvasLogin" style="backdrop-filter: blur(8px);">
  <div class="offcanvas-header text-white" style="background: linear-gradient(135deg, #1e1e2f, #343a40);">
    <h5 class="offcanvas-title fw-bold">Welcome Back 👋</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body p-5" style="background: #f8f9fa;">
    
    <!-- Login Form -->
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="mb-3">
        <label for="email" class="form-label fw-semibold text-secondary">Email</label>
        <input type="email" class="form-control rounded-4 border-0 shadow-sm p-3" id="email" name="email" placeholder="Enter email" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label fw-semibold text-secondary">Password</label>
        <input type="password" class="form-control rounded-4 border-0 shadow-sm p-3" id="password" name="password" placeholder="Enter password" required>
      </div>
      <button type="submit" class="btn w-100 py-3 rounded-4 shadow-sm fw-semibold" style="background: linear-gradient(135deg, #343a40, #1e1e2f); color: white;">
        Login
      </button>
    </form>

    <!-- Divider -->
    <div class="d-flex align-items-center my-4">
      <hr class="flex-grow-1">
      <span class="mx-2 text-muted fw-semibold">OR</span>
      <hr class="flex-grow-1">
    </div>

    <!-- Google Login -->
    <button class="btn w-100 py-3 rounded-4 shadow-sm fw-semibold d-flex align-items-center justify-content-center" style="background: #fff; border: 1px solid #dee2e6;">
      <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" width="22" class="me-2">
      Continue with Google
    </button>

    <!-- Footer Links -->
    <div class="d-flex justify-content-between align-items-center mt-4">
      <small class="text-muted">New here? 
        <a href="#" class="fw-semibold text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSignup">Sign Up</a>
      </small>
      <a href="#" class="text-muted small text-decoration-none">Forgot Password?</a>
    </div>
  </div>
</div>

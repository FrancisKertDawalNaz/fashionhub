<!-- Offcanvas Sign Up Panel -->
<div class="offcanvas offcanvas-end border-0 shadow-lg" tabindex="-1" id="offcanvasSignup" style="backdrop-filter: blur(8px);">
  <div class="offcanvas-header text-white" style="background: linear-gradient(135deg, #1e1e2f, #343a40);">
    <h5 class="offcanvas-title fw-bold">Create Account ✨</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body p-5" style="background: #f8f9fa;">
    @if(session('success'))
  <div class="alert alert-success rounded-4">{{ session('success') }}</div>
   @endif
    <!-- Sign Up Form -->
    <form method="POST" action="{{ route('register') }}">
      @csrf
      <div class="mb-3">
        <label for="fullname" class="form-label fw-semibold text-secondary">Full Name</label>
        <input type="text" class="form-control rounded-4 border-0 shadow-sm p-3" id="fullname" name="fullname" placeholder="Enter full name" required>
      </div>
      <div class="mb-3">
        <label for="signupEmail" class="form-label fw-semibold text-secondary">Email</label>
        <input type="email" class="form-control rounded-4 border-0 shadow-sm p-3" id="signupEmail" name="email" placeholder="Enter email" required>
      </div>
      <div class="mb-3">
        <span class="text-muted small">Password must be at least 8 characters</span>
        <label for="signupPassword" class="form-label fw-semibold text-secondary">Password</label>
        <input type="password" class="form-control rounded-4 border-0 shadow-sm p-3" id="signupPassword" name="password" placeholder="Create password" required>
      </div>
      <div class="mb-3">
        <label for="confirmPassword" class="form-label fw-semibold text-secondary">Confirm Password</label>
        <input type="password" class="form-control rounded-4 border-0 shadow-sm p-3" id="confirmPassword" name="password_confirmation" placeholder="Confirm password" required>
      </div>
      <button type="submit" class="btn w-100 py-3 rounded-4 shadow-sm fw-semibold" style="background: linear-gradient(135deg, #343a40, #1e1e2f); color: white;">
        Sign Up
      </button>
    </form>

    <!-- Divider -->
    <div class="d-flex align-items-center my-4">
      <hr class="flex-grow-1">
      <span class="mx-2 text-muted fw-semibold">OR</span>
      <hr class="flex-grow-1">
    </div>

    <!-- Google Sign Up -->
    <button class="btn w-100 py-3 rounded-4 shadow-sm fw-semibold d-flex align-items-center justify-content-center" style="background: #fff; border: 1px solid #dee2e6;">
      <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" width="22" class="me-2">
      Sign Up with Google
    </button>

    <!-- Footer Links -->
    <div class="d-flex justify-content-between align-items-center mt-4">
      <small class="text-muted">Already have an account? 
        <a href="#" class="fw-semibold text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLogin">Login</a>
      </small>
    </div>
  </div>
</div>

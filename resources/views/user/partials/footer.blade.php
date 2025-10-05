<footer class="bg-warning  py-5 border-top footer">
    <div class="container">
        <div class="row">
            <!-- Left Column -->
            <div class="col-md-4 mb-4">
                <p class="small">Let’s stay in touch! Sign up to our newsletter and get the best deals</p>
                <img src="{{ asset('img/onee.png') }}" alt="Logo" width="100" class="mb-3">
                <div>
                    <a href="#" class="text-dark me-3"><i class="bi bi-facebook fs-4"></i></a>
                    <a href="#" class="text-dark me-3"><i class="bi bi-instagram fs-4"></i></a>
                </div>
            </div>

            <!-- Middle Column -->
            <div class="col-md-4 mb-4">
                <label for="newsletter" class="form-label">Insert your email address here</label>
                <input type="email" id="newsletter" class="form-control" placeholder="Your email">
                <button class="btn btn-dark mt-2 w-100">Subscribe</button>
            </div>

            <!-- Right Column -->
            <div class="col-md-4">
                <div class="row">
                    <div class="col-6">
                        <h6 class="fw-bold">Help</h6>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-dark text-decoration-none">FAQ</a></li>
                            <li><a href="#" class="text-dark text-decoration-none">Customer Service</a></li>
                            <li><a href="#" class="text-dark text-decoration-none">How to Guide</a></li>
                            <li><a href="#" class="text-dark text-decoration-none">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <h6 class="fw-bold">Other</h6>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-dark text-decoration-none">Privacy Policy</a></li>
                            <li><a href="#" class="text-dark text-decoration-none">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Text -->
        <div class="text-center mt-4 border-top pt-3">
            <p class="small mb-0">&copy; {{ date('Y') }} Digital Fashion Hub. All rights reserved.</p>
        </div>
    </div>
</footer>

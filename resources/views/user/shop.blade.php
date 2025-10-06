</body>

@extends('user.layouts.shopmain')

@section('content')
<div class="row mb-5">
    <div class="col-md-4 mb-3">
        <img src="{{ asset('img/damit.jpg') }}" class="img-fluid rounded" alt="Ladies">
    </div>
    <div class="col-md-4 mb-3">
        <img src="{{ asset('img/jacket.jpg') }}" class="img-fluid rounded" alt="Gents">
    </div>
    <div class="col-md-4 mb-3">
        <img src="{{ asset('img/sapatos.jpg') }}" class="img-fluid rounded" alt="Shoes">
    </div>
</div>


<!-- Just In Section -->
<div class="text-center mb-5 justin-section">
    <h2 class="fw-bold">Rent clothes with you favorite brands and shop</h2>
</div>

<div class="row g-4 mb-5">
    <!-- Shop Card Template -->
    <div class="col-md-4 mb-4">
        <div class="card h-100 border-0 shadow-lg shop-card">
            <div class="position-relative overflow-hidden">
                <img src="{{ asset('img/shop1.jpg') }}" class="card-img-top" alt="Shop 1">
                <span class="badge bg-dark position-absolute top-0 end-0 m-2">New</span>
            </div>
            <div class="card-body text-center">
                <h5 class="card-title fw-bold">Shop 1</h5>
                <p class="mb-2 text-warning">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span class="text-dark">(4.5/5)</span>
                </p>
                <a href="#" class="btn btn-dark btn-gradient">Visit Shop</a>
            </div>
        </div>
    </div>

    <!-- Repeat for other shops with updated images and names -->
    <div class="col-md-4 mb-4">
        <div class="card h-100 border-0 shadow-lg shop-card">
            <div class="position-relative overflow-hidden">
                <img src="{{ asset('img/shop2.jpg') }}" class="card-img-top" alt="Shop 2">
            </div>
            <div class="card-body text-center">
                <h5 class="card-title fw-bold">Shop 2</h5>
                <p class="mb-2 text-warning">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span class="text-dark">(5/5)</span>
                </p>
                <a href="#" class="btn btn-dark btn-gradient">Visit Shop</a>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card h-100 border-0 shadow-lg shop-card">
            <div class="position-relative overflow-hidden">
                <img src="{{ asset('img/shop3.jpg') }}" class="card-img-top" alt="Shop 3">
            </div>
            <div class="card-body text-center">
                <h5 class="card-title fw-bold">Shop 3</h5>
                <p class="mb-2 text-warning">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <span class="text-dark">(4/5)</span>
                </p>
                <a href="#" class="btn btn-dark btn-gradient">Visit Shop</a>
            </div>
        </div>
    </div>
</div>

<!-- AI Chatbot Floating Button -->
<a href="#" id="aiChatBtn" class="btn btn-primary rounded-circle shadow-lg">
    <i class="fas fa-robot fa-lg"></i>
</a>

<!-- Chatbot Container -->
<div class="fashionbot" id="fashionBot">
    <div class="bot-header">
        <span><i class="fas fa-robot"></i> Fashionbot</span>
        <button id="closeBot" class="btn-close"></button>
    </div>
    <div class="bot-body" id="botBody">
        <!-- Bot messages and buttons will go here -->
        <div class="bot-message">
            Welcome to Fashionbot! Ready to discover your next stylish look? 😊
        </div>
        <div class="bot-message">
            I'm here to assist you with everything you need today.
        </div>
        <div class="bot-buttons">
            <button class="bot-btn">Rent Now!</button>
            <button class="bot-btn">About Us</button>
            <button class="bot-btn">Contact Us</button>
        </div>
    </div>
    <div class="bot-footer">
        <input type="text" id="botInput" placeholder="Type your answer...">
        <button id="sendBotBtn"><i class="fas fa-paper-plane"></i></button>
    </div>
</div>

<!-- Product Detail Modal -->
<div class="modal fade" id="productDetailModal" tabindex="-1" aria-labelledby="productDetailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius:20px;overflow:hidden;background:rgba(255,255,255,0.95);backdrop-filter:blur(12px);">
            <div class="modal-body p-0">
                <div class="row g-0">

                    <!-- Product Image -->
                    <div class="col-md-5 position-relative">
                        <img id="modalProductImg" src="https://via.placeholder.com/600x800" alt="Product" class="w-100 h-100" style="object-fit:cover;">
                        <span class="position-absolute top-0 start-0 m-3 badge bg-dark px-3 py-2" style="font-size:0.85rem;">Best Seller</span>
                    </div>

                    <!-- Product Details -->
                    <div class="col-md-7 p-4 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <h4 id="modalProductName" class="fw-bold mb-0 text-dark">Elegant Linen Dress</h4>
                            <span class="text-end small text-muted">
                                Shop 1<br><span style="color:#FFD700;">★★★★★</span>
                            </span>
                        </div>

                        <div class="mb-3">
                            <p id="modalProductDesc" class="text-secondary" style="font-size:0.95rem;">
                                Soft-touch linen fabric with minimal stitching detail. Perfect for everyday wear and weekend getaways.
                            </p>
                        </div>

                        <div class="mb-3">
                            <strong class="d-block mb-1 text-dark">Inclusions</strong>
                            <ul id="modalProductInclusions" class="ps-3 mb-0 text-secondary" style="font-size:0.9rem;line-height:1.6;">
                                <li>Eco-friendly packaging</li>
                                <li>Free shipping</li>
                            </ul>
                        </div>

                        <div class="row mb-3">
                            <div class="col-6">
                                <div class="text-dark fw-semibold mb-1">Size</div>
                                <select class="form-select form-select-sm shadow-sm border-light rounded-pill">
                                    <option>Small</option>
                                    <option selected>Medium</option>
                                    <option>Large</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <div class="text-dark fw-semibold mb-1">Quantity</div>
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-light border rounded-circle px-2 py-1" id="modalQtyMinus">−</button>
                                    <span id="modalQty" class="mx-3 fw-semibold">1</span>
                                    <button class="btn btn-light border rounded-circle px-2 py-1" id="modalQtyPlus">+</button>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-6">
                                <div class="text-dark fw-semibold mb-1">Duration</div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-outline-dark btn-sm rounded-pill px-3">1–2 days</button>
                                    <button class="btn btn-outline-dark btn-sm rounded-pill px-3">3–4 days</button>
                                </div>
                            </div>
                            <div class="col-6 text-end align-self-end">
                                <h4 class="fw-bold text-dark mb-0">₱<span id="modalProductPrice">1,500.00</span></h4>
                            </div>
                        </div>

                        <div class="mt-auto d-flex gap-2">
                            <button class="btn btn-dark rounded-pill flex-fill py-2 fw-semibold">Add to Cart</button>
                            <button class="btn btn-outline-dark rounded-pill flex-fill py-2 fw-semibold">Book Now</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    // Modal logic for chatbot product cards
    document.addEventListener('DOMContentLoaded', function() {
        // Attach event delegation for all future 'View' buttons in product cards
        document.body.addEventListener('click', function(e) {
            if (e.target && e.target.matches('.bot-message .btn-outline-dark')) {
                const card = e.target.closest('div');
                const img = card.querySelector('img');
                const name = card.querySelector('div[style*="font-size:14px"]');
                // Example static data for modal (customize as needed)
                document.getElementById('modalProductImg').src = img ? img.src : '';
                document.getElementById('modalProductName').textContent = name ? name.textContent : '';
                document.getElementById('modalProductInclusions').innerHTML = '<li>Classic Bow Tie</li><li>Black Coat</li><li>White Long Sleeve</li><li>Black Slack</li>';
                document.getElementById('modalProductDesc').textContent = 'You certainly want to give a smart and professional impression on your appearance. To support them, clothes that are suitable for the work environment can be a solution. The formal appearance or formal style can be the chosen choice. This one style gives the impression of being stiff and authoritative through the characteristics of fashion';
                document.getElementById('modalProductPrice').textContent = '1,500.00';
                document.getElementById('modalQty').textContent = '1';
                // Show modal (Bootstrap 5)
                var modal = new bootstrap.Modal(document.getElementById('productDetailModal'));
                modal.show();
            }
            // Quantity plus/minus
            if (e.target && e.target.id === 'modalQtyPlus') {
                let qty = parseInt(document.getElementById('modalQty').textContent);
                document.getElementById('modalQty').textContent = qty + 1;
            }
            if (e.target && e.target.id === 'modalQtyMinus') {
                let qty = parseInt(document.getElementById('modalQty').textContent);
                if (qty > 1) document.getElementById('modalQty').textContent = qty - 1;
            }
        });
    });
</script>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const rentNowBtn = document.querySelector('.bot-btn');
        const botBody = document.getElementById('botBody');
        if (rentNowBtn && botBody) {
            rentNowBtn.addEventListener('click', function() {
                // Step 1: Show category options
                const msg = document.createElement('div');
                msg.className = 'bot-message';
                msg.textContent = 'Please choose the category that you are looking for.';
                botBody.appendChild(msg);

                const categories = ['Women', 'Men', 'Kids', 'Accesories', 'Shoes'];
                const catDiv = document.createElement('div');
                catDiv.className = 'bot-buttons';
                categories.forEach(cat => {
                    const btn = document.createElement('button');
                    btn.className = 'bot-btn';
                    btn.textContent = cat;
                    btn.onclick = function() {
                        // Show user selection
                        const userMsg = document.createElement('div');
                        userMsg.className = 'bot-message';
                        userMsg.style.textAlign = 'right';
                        userMsg.innerHTML = `<span style="background:#eee;padding:4px 10px;border-radius:12px;">${cat}</span>`;
                        botBody.appendChild(userMsg);

                        // Step 2: Show style options
                        const styleMsg = document.createElement('div');
                        styleMsg.className = 'bot-message';
                        styleMsg.textContent = 'What is your fashion style do you prefer? Please choose one.';
                        botBody.appendChild(styleMsg);

                        const styles = ['Casual', 'Semi-Formal', 'StreetWear', 'Workwear', 'Formal', 'Minimalist', 'Vintage', 'Minimalism'];
                        const styleDiv = document.createElement('div');
                        styleDiv.className = 'bot-buttons';
                        styles.forEach(style => {
                            const sbtn = document.createElement('button');
                            sbtn.className = 'bot-btn';
                            sbtn.textContent = style;
                            sbtn.onclick = function() {
                                // Show user style selection
                                const userStyleMsg = document.createElement('div');
                                userStyleMsg.className = 'bot-message';
                                userStyleMsg.style.textAlign = 'right';
                                userStyleMsg.innerHTML = `<span style="background:#eee;padding:4px 10px;border-radius:12px;">${style}</span>`;
                                botBody.appendChild(userStyleMsg);

                                // Step 3: Show size options
                                const sizeMsg = document.createElement('div');
                                sizeMsg.className = 'bot-message';
                                sizeMsg.textContent = 'What is your size preferences? Please choose one';
                                botBody.appendChild(sizeMsg);

                                const sizes = ['XS', 'S', 'M', 'L', 'XL', 'XXL'];
                                const sizeDiv = document.createElement('div');
                                sizeDiv.className = 'bot-buttons';
                                sizes.forEach(size => {
                                    const sizeBtn = document.createElement('button');
                                    sizeBtn.className = 'bot-btn';
                                    sizeBtn.textContent = size;
                                    sizeBtn.onclick = function() {
                                        // Show user size selection
                                        const userSizeMsg = document.createElement('div');
                                        userSizeMsg.className = 'bot-message';
                                        userSizeMsg.style.textAlign = 'right';
                                        userSizeMsg.innerHTML = `<span style="background:#eee;padding:4px 10px;border-radius:12px;">${size}</span>`;
                                        botBody.appendChild(userSizeMsg);

                                        // Step 4: Show skin tone options
                                        const skinMsg = document.createElement('div');
                                        skinMsg.className = 'bot-message';
                                        skinMsg.textContent = 'What is your skin tone or skin color? Let me know and I\'ll guide you! Kindly choose one.';
                                        botBody.appendChild(skinMsg);

                                        const skins = ['Fair Skin', 'Tan/ Olive Skin', 'Light-Medium Skin', 'Deep/ Dark Skin'];
                                        const skinDiv = document.createElement('div');
                                        skinDiv.className = 'bot-buttons';
                                        skins.forEach(skin => {
                                            const skinBtn = document.createElement('button');
                                            skinBtn.className = 'bot-btn';
                                            skinBtn.textContent = skin;
                                            skinBtn.onclick = function() {
                                                // Show user skin selection
                                                const userSkinMsg = document.createElement('div');
                                                userSkinMsg.className = 'bot-message';
                                                userSkinMsg.style.textAlign = 'right';
                                                userSkinMsg.innerHTML = `<span style="background:#eee;padding:4px 10px;border-radius:12px;">${skin}</span>`;
                                                botBody.appendChild(userSkinMsg);

                                                // Step 5: Show summary and product cards
                                                const summaryMsg = document.createElement('div');
                                                summaryMsg.className = 'bot-message';
                                                summaryMsg.innerHTML = 'Okay, the formal attire should enhance your natural coloring and provide a flattering silhouette. Here\'s a solid breakdown of what works well and 5 products suggestions to get you styled up.';
                                                botBody.appendChild(summaryMsg);

                                                // Product cards by category
                                                const cardWrap = document.createElement('div');
                                                cardWrap.style.display = 'flex';
                                                cardWrap.style.overflowX = 'auto';
                                                cardWrap.style.gap = '12px';
                                                cardWrap.style.margin = '12px 0';

                                                // Product data for each category
                                                const productMap = {
                                                    'Men': [{
                                                            img: 'img/men1.jpg',
                                                            name: "Men's Formal Outfit Pro",
                                                            price: '₱1,200',
                                                            btn: 'Book Now'
                                                        },
                                                        {
                                                            img: 'img/men2.jpg',
                                                            name: 'Luxury Black Suit',
                                                            price: '₱1,500',
                                                            btn: 'View'
                                                        },
                                                        {
                                                            img: 'img/men3.jpg',
                                                            name: 'Elegant Green Gown',
                                                            price: '₱1,200',
                                                            btn: 'View'
                                                        },
                                                        {
                                                            img: 'img/men4.jpg',
                                                            name: "Men's Black Tie Attire",
                                                            price: '₱900',
                                                            btn: 'Book Now'
                                                        },
                                                        {
                                                            img: 'img/men5.jpg',
                                                            name: 'Classic Tuxedo',
                                                            price: '₱2,500',
                                                            btn: 'View'
                                                        }
                                                    ],
                                                    'Women': [{
                                                            img: 'img/women1.jpg',
                                                            name: 'Red Evening Gown',
                                                            price: '₱1,900',
                                                            btn: 'Book Now'
                                                        },
                                                        {
                                                            img: 'img/women2.jpg',
                                                            name: 'Floral Summer Dress',
                                                            price: '₱600',
                                                            btn: 'View'
                                                        },
                                                        {
                                                            img: 'img/women3.jpg',
                                                            name: 'Elegant Black Dress',
                                                            price: '₱1,100',
                                                            btn: 'View'
                                                        },
                                                        {
                                                            img: 'img/women4.jpg',
                                                            name: 'Blue Cocktail Dress',
                                                            price: '₱1,400',
                                                            btn: 'Book Now'
                                                        },
                                                        {
                                                            img: 'img/women5.jpg',
                                                            name: 'Classic White Gown',
                                                            price: '₱3,500',
                                                            btn: 'View'
                                                        }
                                                    ],
                                                    'Kids': [{
                                                            img: 'img/kids1.jpg',
                                                            name: 'Boys Suit Set',
                                                            price: '₱2,500',
                                                            btn: 'Book Now'
                                                        },
                                                        {
                                                            img: 'img/kids2.jpg',
                                                            name: 'Girls Party Dress',
                                                            price: '₱1,500',
                                                            btn: 'View'
                                                        },
                                                        {
                                                            img: 'img/kids3.jpg',
                                                            name: 'Kids Tuxedo',
                                                            price: '₱1,800',
                                                            btn: 'View'
                                                        },
                                                        {
                                                            img: 'img/kids4.jpg',
                                                            name: 'Flower Girl Dress',
                                                            price: '₱1,100',
                                                            btn: 'Book Now'
                                                        },
                                                        {
                                                            img: 'img/kids5.jpg',
                                                            name: 'Boys Blazer',
                                                            price: '₱1,700',
                                                            btn: 'View'
                                                        }
                                                    ],
                                                    'Accesories': [{
                                                            img: 'img/ace1.jpg',
                                                            name: 'Gold Necklace',
                                                            price: '₱700',
                                                            btn: 'Book Now'
                                                        },
                                                        {
                                                            img: 'img/ace2.jpg',
                                                            name: 'Pearl Earrings',
                                                            price: '₱200',
                                                            btn: 'View'
                                                        },
                                                        {
                                                            img: 'img/ace3.jpg',
                                                            name: 'Leather Belt',
                                                            price: '₱500',
                                                            btn: 'View'
                                                        },
                                                        {
                                                            img: 'img/ace4.jpg',
                                                            name: 'Silk Scarf',
                                                            price: '₱350',
                                                            btn: 'Book Now'
                                                        },
                                                        {
                                                            img: 'img/ace5.jpg',
                                                            name: 'Classic Watch',
                                                            price: '₱1,000',
                                                            btn: 'View'
                                                        }
                                                    ],
                                                    'Shoes': [{
                                                            img: 'img/shoe1.jpg',
                                                            name: 'Black Oxford Shoes',
                                                            price: '₱2,500',
                                                            btn: 'Book Now'
                                                        },
                                                        {
                                                            img: 'img/shoe2.jpg',
                                                            name: 'Red Heels',
                                                            price: '₱1,800',
                                                            btn: 'View'
                                                        },
                                                        {
                                                            img: 'img/shoe3.jpg',
                                                            name: 'White Sneakers',
                                                            price: '₱1,200',
                                                            btn: 'View'
                                                        },
                                                        {
                                                            img: 'img/shoe4.jpg',
                                                            name: 'Brown Loafers',
                                                            price: '₱1,100',
                                                            btn: 'Book Now'
                                                        },
                                                        {
                                                            img: 'img/shoe5.jpg',
                                                            name: 'Blue Sandals',
                                                            price: '₱900',
                                                            btn: 'View'
                                                        }
                                                    ]
                                                };
                                                const products = productMap[cat] || [];
                                                products.forEach(prod => {
                                                    const card = document.createElement('div');
                                                    card.style.background = '#fff';
                                                    card.style.border = '1px solid #eee';
                                                    card.style.borderRadius = '12px';
                                                    card.style.width = '140px';
                                                    card.style.flex = '0 0 auto';
                                                    card.style.textAlign = 'center';
                                                    card.style.padding = '10px 8px 12px 8px';
                                                    card.style.boxSizing = 'border-box';
                                                    card.style.overflow = 'hidden';
                                                    // Build query string for product details
                                                    const params = new URLSearchParams({
                                                        img: prod.img || '',
                                                        name: prod.name || '',
                                                        desc: prod.desc || '',
                                                        price: prod.price || '',
                                                        inclusions: JSON.stringify(prod.inclusions || []),
                                                        shop: prod.shop || 'Shop 1',
                                                        size: prod.size || 'Medium Size'
                                                    }).toString();
                                                    card.innerHTML = `
  <div style="
      width:100%;
      background:rgba(255,255,255,0.9);
      backdrop-filter:blur(10px);
      border-radius:16px;
      padding:14px;
      box-shadow:0 6px 20px rgba(0,0,0,0.08);
      transition:transform 0.25s ease, box-shadow 0.25s ease;
      cursor:pointer;
  " 
  class="fxg-card">

      <div style="width:100%;height:110px;overflow:hidden;display:flex;align-items:center;justify-content:center;border-radius:12px;background:#fafafa;">
          <img src="${prod.img}" alt="${prod.name}" 
               style="max-width:100%;max-height:110px;object-fit:cover;border-radius:12px;transition:transform 0.3s ease;">
      </div>

      <div style="font-size:15px;font-weight:600;margin:10px 0 8px 0;color:#222;white-space:normal;text-align:center;line-height:1.3;">
          ${prod.name}
      </div>
      
      <div style="display:flex;gap:8px;justify-content:center;flex-wrap:wrap;">
          <button class="btn btn-sm" 
              style="background:linear-gradient(135deg,#ff7e5f,#feb47b);
                     color:#fff;
                     font-weight:600;
                     border:none;
                     border-radius:12px;
                     padding:7px 20px;
                     box-shadow:0 3px 10px #feb47b66;
                     transition:all 0.25s ease;">
              Book Now
          </button>

          <a class="btn btn-sm btn-outline-dark view-product-btn" 
              href="/product?${params}"
              style="border-radius:12px;padding:7px 20px;font-weight:600;border-width:1.5px;"
              >
              View
          </a>
      </div>
  </div>
`;

                                                    cardWrap.appendChild(card);
                                                });
                                                botBody.appendChild(cardWrap);

                                                skinDiv.remove();
                                            };
                                            skinDiv.appendChild(skinBtn);
                                        });
                                        botBody.appendChild(skinDiv);

                                        sizeDiv.remove();
                                    };
                                    sizeDiv.appendChild(sizeBtn);
                                });
                                botBody.appendChild(sizeDiv);
                                styleDiv.remove();
                            };
                            styleDiv.appendChild(sbtn);
                        });
                        botBody.appendChild(styleDiv);

                        catDiv.remove();
                    };
                    catDiv.appendChild(btn);
                });
                botBody.appendChild(catDiv);
                botBody.scrollTop = botBody.scrollHeight;
            });
        }
    });
</script>



<!-- Try Our Best Fashion Style Section -->
<div class="row mb-5">
    <div class="col-md-6">
        <h2 class="fw-bold">Try our best fashion style</h2>
        <p>
            At our digital fashion hub, we believe in the power of fashion to empower, foster community,
            and inspire social change. Explore a curated collection of the finest fashion styles from
            around the globe, perfect for every mood and occasion.
        </p>
    </div>
    <div class="col-md-6">
        <div id="fashionCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active text-center">
                    <img src="{{ asset('img/flower.jpg') }}" class="d-block w-100 rounded" alt="Dress1">
                    <p class="mt-2 fw-bold">Php 200.00 - Floral Print White Dress</p>
                </div>
                <div class="carousel-item text-center">
                    <img src="{{ asset('img/blackdress.png') }}" class="d-block w-100 rounded" alt="Dress2">
                    <p class="mt-2 fw-bold">Php 300.00 - Black Dress</p>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#fashionCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#fashionCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</div>



@endsection
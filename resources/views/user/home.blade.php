@extends('user.layouts.main')

@section('content')
<div class="row align-items-center mb-5">
    <!-- Image First -->
    <div class="col-md-6 text-center">
        <img src="{{ asset('img/mainpic.jpg') }}" class="img-fluid rounded" alt="Fashion Hero">
    </div>

    <!-- Text Second -->
    <div class="col-md-6">
        <h1 class="fw-bold">Welcome to our Digital Fashion Hub!</h1>
        <p class="lead">
            Renting clothes is presented as a stylish, sustainable, and budget-friendly alternative 
            to buying new items, allowing for access to a variety of looks and trends without 
            the commitment of ownership.
        </p>
        <a href="#" class="btn btn-dark">Rent Now</a>
    </div>
</div>

<div class="row text-center img-category mb-5">
    <div class="col">
        <img src="{{ asset('img/ladies.jpg') }}" class="img-fluid rounded mb-2" alt="Ladies">
        <p>Ladies</p>
    </div>
    <div class="col">
        <img src="{{ asset('img/gens.jpg') }}" class="img-fluid rounded mb-2" alt="Gents">
        <p>Gents</p>
    </div>
    <div class="col">
        <img src="{{ asset('img/shoes.jpg') }}" class="img-fluid rounded mb-2" alt="Shoes">
        <p>Shoes</p>
    </div>
    <div class="col">
        <img src="{{ asset('img/acces.jpg') }}" class="img-fluid rounded mb-2" alt="Accessories">
        <p>Accessories</p>
    </div>
    <div class="col">
        <img src="{{ asset('img/kids.jpg') }}" class="img-fluid rounded mb-2" alt="Kids">
        <p>Kids</p>
    </div>
</div>

<!-- Just In Section -->
<div class="text-center mb-5 justin-section" >
    <h2 class="fw-bold">Just in!</h2>
    <p>Browse our newest products</p>
</div>

<div class="row mb-5">
    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <img src="{{ asset('img/jacket.jpg') }}" class="card-img-top" alt="Jackets">
            <div class="card-body">
                <h5 class="card-title">Jackets, Coats and Blazers</h5>
                <p class="card-text">Stylish outerwear options for every season and occasion.</p>
                <a href="#" class="btn btn-dark">Rent Now</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <img src="{{ asset('img/activewear.jpg') }}" class="card-img-top" alt="Activewear">
            <div class="card-body">
                <h5 class="card-title">Activewear & Loungewear</h5>
                <p class="card-text">Stay comfy and trendy with our sports and casual collections.</p>
                <a href="#" class="btn btn-dark">Rent Now</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <img src="{{ asset('img/sweater.jpg') }}" class="card-img-top" alt="Sweaters">
            <div class="card-body">
                <h5 class="card-title">Sweaters & Knits</h5>
                <p class="card-text">Perfect warm layers for a cozy, fashionable look.</p>
                <a href="#" class="btn btn-dark">Rent Now</a>
            </div>
        </div>
    </div>
</div>

<!-- 3 Icons Row -->
<div class="row text-center py-5" >
    <div class="col-md-4">
        <i class="bi bi-hdd-stack fs-1 mb-3"></i>
        <p>If items do not fit or feel right in your first 10 days, you will get free items in your next shipment.</p>
    </div>
    <div class="col-md-4">
        <i class="bi bi-truck fs-1 mb-3"></i>
        <p>Delivered to you in 1–3 business days. Schedule a pickup at home or return to UPS.</p>
    </div>
    <div class="col-md-4">
        <i class="bi bi-cash-coin fs-1 mb-3"></i>
        <p>Plans are flexible! Rent more items when you like. Keep items as long as you want.</p>
    </div>
</div>


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

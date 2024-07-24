@section('title', 'halaman pembayaran')

<x-app>
    <div class="container my-5">
        <h2 class="fw-bold">Checkout Tiket Seminar</h2>

        <!-- Form Checkout -->
        <form action="{{ route('checkout.process') }}" method="POST" class="mt-5">
            @csrf

            <input type="hidden" name="quantity" value="{{ $quantity }}">

            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <button type="submit" class="btn btn-primary checkout-mitrans mt-3">Checkout</button>
        </form>
    </div>
</x-app>
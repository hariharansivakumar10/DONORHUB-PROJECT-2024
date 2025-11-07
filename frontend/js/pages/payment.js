export function PaymentPage() {
    return `
        <div class="payment-container">
            <h2>Select Payment Method</h2>
            <div class="payment-methods">
                <div class="payment-method" data-method="card">
                    <img src="/frontend/images/payment/card.png" alt="Credit Card">
                    <h3>Credit/Debit Card</h3>
                    <button class="btn payment-btn" onclick="handlePayment('card')">Pay with Card</button>
                </div>
                <div class="payment-method" data-method="upi">
                    <img src="/frontend/images/payment/upi.png" alt="UPI">
                    <h3>UPI Payment</h3>
                    <button class="btn payment-btn" onclick="handlePayment('upi')">Pay with UPI</button>
                </div>
                <div class="payment-method" data-method="netbanking">
                    <img src="/frontend/images/payment/netbanking.png" alt="Net Banking">
                    <h3>Net Banking</h3>
                    <button class="btn payment-btn" onclick="handlePayment('netbanking')">Pay with Net Banking</button>
                </div>
            </div>
        </div>
    `;
}

// Add this to window object to make it accessible from HTML
window.handlePayment = function(method) {
    switch(method) {
        case 'card':
            window.location.hash = '#payment/card';
            break;
        case 'upi':
            window.location.hash = '#payment/upi';
            break;
        case 'netbanking':
            window.location.hash = '#payment/netbanking';
            break;
    }
}
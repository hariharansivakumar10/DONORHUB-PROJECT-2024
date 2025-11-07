export function PaymentPage(method) {
    // If a method is specified, render a simple payment form for that method
    if(method === 'card'){
        return `
            <div class="payment-form">
                <h2>Pay with Card</h2>
                <div class="form-group">
                    <label>Card Number</label>
                    <input placeholder="1234 5678 9012 3456" />
                </div>
                <div class="form-group">
                    <label>Expiry</label>
                    <input placeholder="MM/YY" />
                </div>
                <div class="form-group">
                    <label>CVV</label>
                    <input placeholder="123" />
                </div>
                <button class="btn">Pay</button>
            </div>
        `;
    }

    if(method === 'upi'){
        return `
            <div class="payment-form">
                <h2>Pay with UPI</h2>
                <div class="upi-id-section">
                    <p>Scan QR or copy UPI ID to pay</p>
                    <div class="upi-qr"><img src="/frontend/images/payment/upi-qr.png" alt="UPI QR" style="width:100%"/></div>
                    <div style="margin-top:1rem"><strong>upi-id@bank</strong></div>
                </div>
                <button class="btn">I have paid</button>
            </div>
        `;
    }

    if(method === 'netbanking'){
        return `
            <div class="payment-form">
                <h2>Net Banking</h2>
                <div class="form-group">
                    <label>Choose Bank</label>
                    <select><option>Bank A</option><option>Bank B</option></select>
                </div>
                <button class="btn">Proceed to Bank</button>
            </div>
        `;
    }

    // Default: show payment method selection
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
    // Hide login overlay if present so payment flows are visible even for guests
    try{ const lo = document.getElementById('login-overlay'); if(lo) lo.style.display = 'none'; }catch(e){}
    // Close payment modal if present
    try{ const pm = document.getElementById('payment-modal'); if(pm) pm.style.display = 'none'; }catch(e){}
    switch(method) {
        case 'card':
            window.location.hash = 'payment/card';
            break;
        case 'upi':
            window.location.hash = 'payment/upi';
            break;
        case 'netbanking':
            window.location.hash = 'payment/netbanking';
            break;
        default:
            window.location.hash = 'payment';
    }
}
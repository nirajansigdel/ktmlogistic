
<style>
    .modal-content {
        position: relative;
        background-color: white;
        z-index: 1;
    }

    .modal-content::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url("image/logo.png") no-repeat center center;
        /* Add the logo URL here */
        background-size: 100%;
        /* Adjust the size of the watermark */
        opacity: 0.3;
        /* Set the transparency for the watermark */
        z-index: -1;
        /* Ensure it stays behind the modal content */
        pointer-events: none;
        /* Ensure it doesn't interfere with interaction */
    }

    .modal-header .company-info {
        position: absolute;
        top: 0;
        left: 0;
        margin: 10px;
    }

    .barcode {
        position: absolute;
        top: 10px;
        right: 10px;
    }

    @media print {
        .print-company-info {
            display: block;
            text-align: center;
            margin-bottom: 20px;
        }

        .print-hide {
            display: none;
        }
    }

    .banner .box1 {}

    /* General Container for Tracking */
    .tracking-container {
        width: 100%;
        max-width: 900px;
        margin: 40px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .tracking-header {
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 15px;
        text-align: center;
        color: #333;
        position: relative;
    }

    .tracking-header:after {
        content: '\f72e';
        /* Airplane icon */
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        font-size: 30px;
        color: #007BFF;
        position: absolute;
        right: -35px;
        top: -5px;
    }

    .tracking-updates {
        padding: 15px;
    }

    .tracking-item {
        display: flex;
        justify-content: space-between;
        padding: 15px 0;
        border-bottom: 1px solid #ddd;
    }

    .tracking-item:last-child {
        border-bottom: none;
    }

    .tracking-date {
        color: #666;
        font-size: 15px;
        font-weight: 500;
    }

    .tracking-status {
        display: flex;
        align-items: center;
        font-size: 16px;
        font-weight: 600;
        color: #007BFF;
    }

    /* Add different icons based on status */
    .tracking-status i {
        margin-right: 10px;
        font-size: 18px;
    }

    .status-delivered i {
        color: green;
    }

    .status-in-transit i {
        color: orange;
    }

    .status-pending i {
        color: gray;
    }

    .status-cancelled i {
        color: red;
    }

    /* Order Tracking Section */
    .hh-grayBox {
        background-color: #F8F8F8;
        margin-bottom: 20px;
        padding: 35px;
        margin-top: 20px;
        border-radius: 15px;
    }

    .order-tracking {
        text-align: center;
        width: 33.33%;
        position: relative;
    }

    .order-tracking .is-complete {
        display: block;
        position: relative;
        border-radius: 50%;
        height: 30px;
        width: 30px;
        background-color: #f7be16;
        margin: 0 auto;
        transition: background 0.25s linear;
        z-index: 2;
    }

    .order-tracking.completed .is-complete {
        background-color: #27aa80;
    }

    .order-tracking.completed p {
        color: #000;
    }

    .order-tracking p {
        color: #A4A4A4;
        font-size: 16px;
        margin-top: 8px;
        margin-bottom: 0;
        line-height: 20px;
    }

    .order-tracking p span {
        font-size: 14px;
    }

    .order-tracking::before {
        content: '';
        display: block;
        height: 3px;
        width: calc(100% - 40px);
        background-color: #f7be16;
        top: 13px;
        position: absolute;
        left: calc(-50% + 20px);
        z-index: 0;
    }

    .order-tracking:first-child::before {
        display: none;
    }

    .order-tracking.completed::before {
        background-color: #27aa80;
    }

    /* Smooth fade-in animation */
    .tracking-container {
        opacity: 0;
        animation: fadeIn 0.8s ease forwards;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }


    .transparent-table {
        width: 100%;
        border-collapse: collapse;
        background-color: rgba(255, 255, 255, 0.5);
        /* Transparent white background */
    }

    .transparent-table th,
    .transparent-table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
        background-color: rgba(255, 255, 255, 0.5);
        /* Transparent background for cells */
    }

    .transparent-table th {
        padding-top: 12px;
        padding-bottom: 12px;
        background-color: rgba(255, 255, 255, 0.5);
        /* Slightly opaque black for header */
        /* color: white; */
    }
</style>


<!-- Banner -->
<style>
    /* HERO SECTION */
    .hero-img {
        height: 100vh;
        object-fit: cover;
        filter: brightness(55%);
    }

    .hero-content-wrapper {
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        width: 100%;
        color: white;
    }

    /* TYPING EFFECT */
    #typingText {
        border-right: 4px solid rgba(255, 255, 255, 0.8);
        white-space: nowrap;
        overflow: hidden;
    }

    /* RIGHT SIDE IMAGE GRID */
    .image-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 5px;
    }

    .image-box {
        width: 80%;
        height: 160px;
        border-radius: 12px;
        background-size: cover;
        background-position: center;
        transform: skew(-20deg);
        overflow: hidden;
        border: 2px solid rgba(255, 255, 255, 0.15);
        transition: 0.4s ease;
    }

    .image-box:hover {
        transform: skew(-21deg) scale(1.05);
        border-color: white;
    }
</style>

<!-- HERO CAROUSEL -->
<div id="heroSlider" class="carousel slide" data-bs-ride="carousel">

    <!-- SLIDES -->
    <div class="carousel-inner">
        @foreach ($coverimages as $key => $img)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <img src="{{ asset('uploads/coverimage/' . $img->image) }}" class="d-block w-100 hero-img">
            </div>
        @endforeach
    </div>

    <!-- INDICATORS -->
    <div class="carousel-indicators">
        @foreach ($coverimages as $key => $img)
            <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="{{ $key }}"
                class="{{ $key == 0 ? 'active' : '' }}"></button>
        @endforeach
    </div>

    <!-- OVERLAY CONTENT -->
    <div class="hero-content-wrapper position-absolute top-50 start-50 translate-middle w-100">
        <div class="container">
            <div class="row align-items-center">

                <!-- LEFT SECTION -->
                <div class="col-lg-6 col-md-5">
                    <h1 class="fw-bold display-4 mb-3">
                        <span id="typingText"></span>
                    </h1>

                    <p class="mb-4 fs-4">
                        Want to send important parcels to your loved ones with complete safety, speed, and reliability?
                        We make sure your package reaches them on time, every time—handled with care from start to finish.
                    </p>

                    <div class="bg-dark bg-opacity-50 p-4 rounded shadow">
                        <h6 class="text-uppercase fw-bold mb-3">Enter Your Tracking Number</h6>

                        <form id="track-form">
                            @csrf
                            <div class="input-group">
                                <input type="text" id="tracking_number" name="tracking_number"
                                    class="form-control" placeholder="Enter Your Tracking Number" required>
                                <button class="btn btn-primary" type="submit">Track</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- RIGHT SECTION -->
                @php
                    $sixImages = collect();
                    foreach ($images as $image) {
                        foreach ($image->img as $url) {
                            if ($sixImages->count() < 6) {
                                $sixImages->push($url);
                            }
                        }
                        if ($sixImages->count() >= 6) break;
                    }
                @endphp

                <div class="col-lg-6 col-md-7 mt-4 mt-md-0">
                    <div class="image-grid d-grid gap-2" style="grid-template-columns: repeat(3, 1fr);">
                        @foreach ($sixImages as $url)
                            <div class="image-box rounded"
                                 style="background-image: url('{{ asset($url) }}'); 
                                        background-size: cover;
                                        background-position: center;
                                        height: 150px;">
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>


<!-- TYPING EFFECT JS -->
<script>
    const text = "KTM Nepal Logistic";
    let i = 0;

    function typeEffect() {
        if (i < text.length) {
            document.getElementById("typingText").innerHTML += text.charAt(i);
            i++;
            setTimeout(typeEffect, 90);
        }
    }

    document.addEventListener("DOMContentLoaded", typeEffect);
</script>





<script>
    document.getElementById('track-form').addEventListener('submit', function (event) {
        event.preventDefault();

        const formData = new FormData(this);
        const resultDiv = document.getElementById('tracking-result');
        const errorDiv = document.getElementById('error-message');

        fetch('{{ route('track-parcel') }}', {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            }
        })
            .then(response => response.json())
            .then(data => {
                console.log('Response Data:', data);

                const trackingModal = new bootstrap.Modal(document.getElementById('trackingModal'));

                if (data.error) {
                    resultDiv.innerHTML = '';
                    errorDiv.textContent = data.error;
                    errorDiv.classList.remove('d-none');
                    trackingModal.show();
                } else {
                    errorDiv.classList.add('d-none');
                    resultDiv.innerHTML = formatTrackingData(data.trackingInfo);
                    trackingModal.show();
                    if (data.trackingInfo.parcel.barcode_image) {
                        document.getElementById('barcode').src =
                            `data:image/png;base64,${data.trackingInfo.parcel.barcode_image}`;
                    }
                }
            })
            .catch(error => {
                console.error('Error:', error);
                resultDiv.innerHTML = '';
                errorDiv.textContent = 'An error occurred while tracking the parcel.';
                errorDiv.classList.remove('d-none');
                const trackingModal = new bootstrap.Modal(document.getElementById('trackingModal'));
                trackingModal.show();
            });
    });

    document.getElementById('print-btn').addEventListener('click', function () {
        const printWindow = window.open('', '', 'height=600,width=800');

        const companyInfo = document.getElementById('company-info-print').cloneNode(true);
        const barcode = document.getElementById('barcode').cloneNode(true);
        const trackingInfo = document.getElementById('tracking-result').cloneNode(true);

        const printContainer = document.createElement('div');
        printContainer.style.padding = '20px';

        printContainer.appendChild(companyInfo);
        printContainer.appendChild(document.createElement('hr'));
        printContainer.appendChild(barcode);
        printContainer.appendChild(trackingInfo);

        printWindow.document.write('<html><head><title>Print Tracking Information</title>');
        printWindow.document.write(
            '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" />'
        );
        printWindow.document.write('<style>' +
            '.transparent-table { width: 100%; border-collapse: collapse; } ' +
            '.transparent-table th, .transparent-table td { border: 1px solid #ddd; padding: 8px; text-align: left; } ' +
            '.transparent-table th { padding-top: 12px; padding-bottom: 12px; } ' +
            'hr { margin: 20px 0; }' +
            '@media print { .col-md-6 { float: left; width: 48%; margin-right: 2%; } .col-md-6:last-child { margin-right: 0; } }' +
            '</style>');
        printWindow.document.write('</head><body>');
        printWindow.document.write(printContainer.innerHTML);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.focus();

        printWindow.onload = function () {
            setTimeout(function () {
                printWindow.print();
            }, 500);
        };
    });

    function formatTrackingData(data) {
        let html = '';
        if (typeof data === 'object' && data !== null) {
            html += '<div class="row">';

            if (data.receiver) {
                html += `
                    <div class="col-md-6">
                        <h3>Receiver Information</h3>
                        ${formatReceiverTable(data.receiver)}
                    </div>
                `;
            }

            if (data.parcel) {
                html += `
                    <div class="col-md-6">
                        <h3>Parcel Information</h3>
                        ${formatParcelTable(data.parcel)}
                    </div>
                `;
            }

            html += '</div>'; // close row

            if (data.tracking_updates) {
                html += '<h3 class="mt-4">Tracking Updates</h3>';
                html += formatTrackingUpdatesTable(data.tracking_updates);
            }
        }
        return html;
    }

    function formatParcelTable(parcel) {
        let forwardingNumberRow = '';

        if (parcel.forwarder_number && parcel.forwarder_number.trim() !== '') {
            forwardingNumberRow = `
                <tr>
                    <th>Forwarding Number</th>
                    <td>${parcel.forwarder_number}</td>
                </tr>
            `;
        }

        return `
            <table class="table table-bordered transparent-table">
                <tbody>
                    <tr>
                        <th>HAWB</th>
                        <td>${parcel.tracking_number || ''}</td>
                    </tr>
                    <tr>
                        <th>Carrier</th>
                        <td>${parcel.carrier || ''}</td>
                    </tr>
                    <tr>
                        <th>Dispatched Date</th>
                        <td>${formatDate(parcel.sending_date) || ''}</td>
                    </tr>
                    <tr>
                        <th>Weight</th>
                        <td>${parcel.weight || ''}</td>
                    </tr>
                    <tr>
                        <th>Estimated Delivery</th>
                        <td>${formatDate(parcel.estimated_delivery_date) || ''}</td>
                    </tr>
                    ${forwardingNumberRow}
                </tbody>
            </table>
        `;
    }

    function formatReceiverTable(receiver) {
        return `
            <table class="table transparent-table">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td>${receiver.fullname || ''}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td style="white-space: nowrap;">
                            ${receiver.street_address || ''}, <br>
                            ${receiver.city || ''}, 
                            ${receiver.state || ''}, 
                            ${receiver.country || ''}
                        </td>
                    </tr>
                    <tr>
                        <th>Postal Code</th>
                        <td>${receiver.postal_code || ''}</td>
                    </tr>
                    <tr>
                        <th>Phone No.</th>
                        <td>${receiver.phone_no || ''}</td>
                    </tr>
                </tbody>
            </table>
        `;
    }

    function formatTrackingUpdatesTable(trackingUpdates) {
        return `
            <table class="table transparent-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Location</th>
                        <th>Notes</th>
                    </tr>
                </thead>
                <tbody>
                    ${trackingUpdates.map(update => `
                        <tr>
                            <td>${formatDate(update.updated_at) || ''}</td>
                            <td>${update.status || ''}</td>
                            <td>${update.location || ''}</td>
                            <td>${update.notes || ''}</td>
                        </tr>
                    `).join('')}
                </tbody>
            </table>
        `;
    }

    function formatDate(dateString) {
        if (!dateString) return '';
        const options = { year: 'numeric', month: 'long', day: 'numeric' };
        return new Date(dateString).toLocaleDateString(undefined, options);
    }
</script>

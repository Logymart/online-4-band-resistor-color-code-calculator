<!--============= Exclusive Section Starts Here =============-->
<section class="exclusive-section padding-bottom-2 padding-top oh" id="feature">
    <div class="container">
        <div class="row">
            <div class="col-lg-12"> <!-- Changed col-lg-7 and col-lg-5 to col-lg-12 -->
                <div class="section-header left-style text-center"> <!-- Added text-center for centering the text -->
                    <h5 class="cate">An Exhaustive list of Amazing Features</h5>
                    <h2 class="title">See what You Can Do with Calculator</h2>
                    <p>
                        Online Calculator allows for a highly customizable calculation experience while retaining all the core functionalities of the calculato.
                    </p>
                </div>
                <div class="row mb--20 justify-content-center"> <!-- Added justify-content-center to center the feature items -->
                    <div class="col-sm-4"> <!-- Adjusted column size for better centering -->
                        <div class="exclusive-item">
                            <div class="exclusive-thumb">
                                <img src="assets/images/feature/01.png" alt="feature">
                            </div>
                            <div class="exclusive-content">
                                <h6 class="title">Fast Performance</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4"> <!-- Adjusted column size for better centering -->
                        <div class="exclusive-item">
                            <div class="exclusive-thumb">
                                <img src="assets/images/feature/02.png" alt="feature">
                            </div>
                            <div class="exclusive-content">
                                <h6 class="title">Easy Customize</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4"> <!-- Adjusted column size for better centering -->
                        <div class="exclusive-item">
                            <div class="exclusive-thumb">
                                <img src="assets/images/feature/03.png" alt="feature">
                            </div>
                            <div class="exclusive-content">
                                <h6 class="title">Pure &amp; Elegant</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4"> <!-- Adjusted column size for better centering -->
                        <div class="exclusive-item">
                            <div class="exclusive-thumb">
                                <img src="assets/images/feature/04.png" alt="feature">
                            </div>
                            <div class="exclusive-content">
                                <h6 class="title">Secure Data</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4"> <!-- Adjusted column size for better centering -->
                        <div class="exclusive-item">
                            <div class="exclusive-thumb">
                                <img src="assets/images/feature/05.png" alt="feature">
                            </div>
                            <div class="exclusive-content">
                                <h6 class="title">Quick access</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4"> <!-- Adjusted column size for better centering -->
                        <div class="exclusive-item">
                            <div class="exclusive-thumb">
                                <img src="assets/images/feature/06.png" alt="feature">
                            </div>
                            <div class="exclusive-content">
                                <h6 class="title">24/7 Support</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Exclusive Section Ends Here =============-->
<style>
    /* Exclusive Section Styles */
.exclusive-section {
    padding-top: 50px;
    padding-bottom: 50px;
    background-color: transparent;
}
/* Hover Effects */
.exclusive-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px var(--shadow-color);
    background-color: var(--hover-bg-color);
}

.exclusive-item:hover .exclusive-thumb img {
    filter: brightness(0) saturate(100%) invert(40%) sepia(50%) saturate(500%) hue-rotate(200deg) brightness(95%) contrast(105%);
}
.section-header {
    margin-bottom: 30px;
}

.section-header.left-style.text-center {
    text-align: center;
}

.section-header .cate {
    font-size: 16px;
    font-weight: 500;
    color: #007bff;
    margin-bottom: 10px;
}

.section-header .title {
    font-size: 32px;
    font-weight: 700;
    color: #333;
    margin-bottom: 15px;
}

.section-header p {
    font-size: 16px;
    color: #6c757d;
    max-width: 600px;
    margin: 0 auto;
}

.exclusive-item {
    display: flex; /* Use flexbox for horizontal alignment */
    align-items: center; /* Center items vertically */
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    padding: 15px;
    transition: transform 0.3s, box-shadow 0.3s;
    margin: 15px;
}

.exclusive-thumb img {
    width: 40px; /* Adjust icon size */
    height: 40px; /* Adjust icon size */
}

.exclusive-content {
    margin-left: 15px; /* Space between icon and text */
}

.exclusive-content .title {
    font-size: 18px;
    font-weight: 600;
    color: #333;
    margin: 0;
}

@media (max-width: 768px) {
    .section-header .title {
        font-size: 28px;
    }

    .exclusive-item {
        padding: 10px;
    }
}

@media (max-width: 576px) {
    .section-header .title {
        font-size: 24px;
    }

    .exclusive-item {
        padding: 8px;
    }
}

</style>
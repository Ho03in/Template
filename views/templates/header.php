<head>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

</head>

<body>
    <header class="header">
        <div class="nav-header logo-header d-flex">
            <div class="logo-image">
                <img
                    src="./assets/img/kisspng-gray-wolf-moon-coyote-red-wolf-clip-art-wolf-5ab44881d4b9a9.0979797015217644818713.png">
            </div>
            <div class="logo-text Shabnam">
                <a>آگهی وفروش </a>
            </div>
        </div>
        <div class="nav-header main-h Shabnam">

            <div class="menu">
                <ul class="menu-items">
                    <li>
                        <img src="./assets/img/icons8-home-40.png">
                        <a href="#">صفحه اصلی</a>
                    </li>
                    <li>
                        <img src="./assets/img/icons8-star-40.png">

                        <a href="#"> ذخیره ها</a>
                    </li>
                    <li>
                        <img src="./assets/img/icons8-call-40.png">

                        <a href="#"> تماس با ما</a>
                    </li>

                </ul>
            </div>

        </div>
        <div class="nav-header  Shabnam">
            <ul >
                <li>
                    <button id="showButton"><span class="material-symbols-outlined">
                            account_circle
                        </span></button>
                    <div id="overlay" class="overlay blurred-overlay">
                        <div class="box">
                            <div class="top-box">
                                <div>
                                    <a href="./UN.html"><img src="./assets/img/profile-image" alt=""></a>
                                </div>
                                <div>
                                    <p>ho03in</p>
                                    <p>موجودی: 0 تومان</p>
                                </div>
                            </div>
                            <hr>
                            <div class="other-box">
                                <a href="./hesabkarbari.html">پیشخوان من</a>
                                <a href="./financial.html"> مالی و اشتراک</a>
                                <a href="#" id="openPopup">تماس با پشتیبانی</a>
                                <div class="popup" id="contactPopup">
                                    <div class="popup-content">
                                        <span class="close" id="closePopup"
                                            style="font-size: 20px; cursor: pointer;">&times;</span>
                                        <h2>تماس با پشتیبانی</h2>
                                        <p>سوالات و نظرات خود را با پشتیبانی ما در میان بگذارید.
                                        </p>
                                        <form action="#" method="post">
                                            <label for="subject">موضوع:</label>
                                            <input type="text" id="subject" name="subject" required>

                                            <label for="message">پیام:</label>
                                            <textarea id="message" name="message" rows="4" required></textarea>

                                            <button type="submit">ارسال</button>
                                        </form>
                                    </div>
                                </div>
                                <hr>
                                <a href="./UN.html" class="quit">خروج از حساب کاربری</a>
                                <button id="closeButton" hidden>Close</button> <!-- Close button added -->
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="ad-reg-btn"> + ثبت آگهی</a>
                </li>
            </ul>
        </div>
    </header>
    <script>
        const body = document.querySelector('body');
        const showButton = document.getElementById('showButton');
        const overlay = document.getElementById('overlay');
        const contactPopup = document.getElementById("contactPopup");
        const openPopupButton = document.getElementById("openPopup");
        const closePopupButton = document.getElementById("closePopup");
        const box = document.querySelector('.box');

        showButton.addEventListener('click', function () {
            overlay.style.display = 'block';
            body.classList.add('blurred');
            overlay.classList.add('blurred-overlay');
        });

        overlay.addEventListener('click', function (event) {
            if (!event.target.closest('.box')) {
                overlay.style.display = 'none';
                body.classList.remove('blurred');
                contactPopup.classList.remove('blurred');
                box.classList.remove('blurred');
                overlay.classList.remove('blurred-overlay');
            }
        });

        openPopupButton.addEventListener("click", function () {
            contactPopup.style.display = "block";
            body.classList.add('blurred');
            contactPopup.classList.add('blurred');
            box.classList.add('blurred');
            overlay.classList.add('blurred-overlay');
        });

        closePopupButton.addEventListener("click", function () {
            contactPopup.style.display = "none";
            body.classList.remove('blurred');
            contactPopup.classList.remove('blurred');
            box.classList.remove('blurred');
            overlay.classList.remove('blurred-overlay');
        });

        document.addEventListener('click', function (event) {
            const header = document.querySelector('.header');
            if (!header.contains(event.target)) {
                overlay.style.display = 'none';
                body.classList.remove('blurred');
                contactPopup.classList.remove('blurred');
                box.classList.remove('blurred');
                overlay.classList.remove('blurred-overlay');
            }
        });



    </script>
</body>
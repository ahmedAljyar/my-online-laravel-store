﻿<!DOCTYPE html>
<html>
    <head>
        <title>متجري</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <header>
            <div class="contact">
                <span>للتواصل : 01111111111</span>
                <nav>
                    <a href="#">gmail</a>
                    <a href="#">face book</a>
                    <a href="#">instgram</a>
                </nav>
            </div>
            <div class="title">
                <h1 class="logo">متجري</h1>
                <span class="welcomMassege">أهلا بكم إلي متجري</span>
            </div>
        </header>
        <section class="main">
            <aside class="sidePart leftPart">
                <div class="buyMenu">
                    <h1>قائمة المشتريات</h1>
                    <ul id="buys">
                        <li>
                            <span class="buyRemoveH">حذف</span>
                            <span class="buyNameH">الاسم</span>
                            <span class="buyPriceH">سعر الوحدة</span>
                        </li>
                    </ul>
                </div>
                <div class="order">
                    <form class="userData">
                        <input type="text" placeholder="address">
                        <input type="button" value="ارسال الطلب">
                    </form>
                </div>
            </aside>
            <section class="centerPart">
                <div class="productsMainMenu">
                </div>
            </section>
            <aside class="sidePart rightPart">
                <div class="index">
                    <h1>فهرس القوائم</h1>
                    <nav id="nav">
                    </nav>
                </div>
            </aside>
        </section>
        <footer>
            <p>
                <span class="span">تم إنشاء هذا الموقع بواسطة </span><span class="myLogo">ahmed</span>
                <br>
            </p>
        </footer>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>

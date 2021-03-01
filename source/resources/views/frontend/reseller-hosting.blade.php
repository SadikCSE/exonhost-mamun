@extends('frontend.partials.master')
@section('title','Reseller Hosting - ExonHost')

@section('maincontent')
    <div class="white">
        <ul id="fourplans">
            <!--plan webhosting -->
            <li class="planone">
                <div class="plantitle">
                    <h5>Starter</h5>
                    <i>$</i><b>16.99</b><span>/mo</span><a href="#bonuses" class="labelyellow">3 Bonuses Included</a>
                </div>
                <div class="row ok">20 GB Storage</div>
                <div class="row ok">500 GB Transfer</div>
                <div class="row ok">25 Accounts</div>
                <div class="row ok">Free SSL &amp; SSD</div>
                <div class="row ok">WHM Control Panel</div>
                <div class="row price"><i>$</i><b>16.99</b><span>/mo</span><a href="https://clients.exonhost.com/cart.php?a=add&pid=133" class="greenbutton">Order Now</a></div>
            </li>
            <li class="plantwo">
                <div class="plantitle">
                    <h5>Standard</h5>
                    <i>$</i><b>24.95</b><span>/mo</span><a href="#bonuses" class="labelyellow">3 Bonuses Included</a>
                </div>
                <div class="row ok">50 GB Storage</div>
                <div class="row ok">1000 GB Transfer</div>
                <div class="row ok">50 Accounts</div>
                <div class="row ok">Free SSL &amp; SSD</div>
                <div class="row ok">WHM Control Panel</div>
                <div class="row price"><i>$</i><b>24.99</b><span>/mo</span><a href="https://clients.exonhost.com/cart.php?a=add&pid=134" class="greenbutton">Order Now</a></div>
            </li>
            <li class="planthree">
                <div class="plantitle">
                    <h5>Advanced</h5>
                    <i>$</i><b>44.99</b><span>/mo</span><a href="#bonuses" class="labelyellow">4 Bonuses Included</a>
                </div>
                <div class="row ok">100 GB Storage</div>
                <div class="row ok">2000 GB Transfer</div>
                <div class="row ok">100 Accounts</div>
                <div class="row ok">Free SSL &amp; SSD</div>
                <div class="row ok">WHM Control Panel</div>
                <div class="row price"><i>$</i><b>44.99</b><span>/mo</span><a href="https://clients.exonhost.com/cart.php?a=add&pid=218" class="greenbutton">Order Now</a></div>
            </li>
            <li class="planfour">
                <div class="plantitle">
                    <h5>Business</h5>
                    <i>$</i><b>64.99</b><span>/mo</span><a href="#bonuses" class="labelyellow">4 Bonuses Included</a>
                </div>
                <div class="row ok">200 GB Storage</div>
                <div class="row ok">4000 GB Transfer</div>
                <div class="row ok">200 Accounts</div>
                <div class="row ok">Free SSL &amp; SSD</div>
                <div class="row ok">WHM Control Panel</div>
                <div class="row price"><i>$</i><b>64.99</b><span>/mo</span>
                    <a href="https://clients.exonhost.com/cart.php?a=add&pid=111" class="greenbutton">Order Now</a>
                </div>
            </li>
        </ul>
    </div>
    <!--end plans -->
    <!-- blue 4 boxes -->
    <div class="blue" id="bonuses">
        <div class="content">
            <h1>Four FREE Bonuses Included!</h1>
            We've in house support team for 24/7 operation. They provide onboarding help, free website transfer and ongoing assistance at any time.
            <div class="flex-grid">
                <div class="quart">
                    <h3>
                        <a href="vps.html">
                            <img src="{{asset('Frontend/images')}}/bic6.png"  alt="Cloud Hosting">
                            <hr>
                            Free Site Transfer
                        </a>
                    </h3>
                    <p>Transfering from another host? Our expert support team is standing by to transfer your site from your old host. </p>
                </div>
                <div class="quart">
                    <h3>
                        <a href="dedicated-server.html">
                            <img src="{{asset('Frontend/images')}}/bic7.png"  alt="Dedicated Servers">
                            <hr>
                            Free Auto Installer
                        </a>
                    </h3>
                    <p>Install apps in one click, you don't have to go through the process of every script installers. You can just sit back and relax! </p>
                </div>
                <div class="quart">
                    <h3>
                        <a href="#">
                            <img src="{{asset('Frontend/images')}}/bic8.png"  alt="Data Backup">
                            <hr>
                            Free Instant Setup
                        </a>
                    </h3>
                    <p>We do offer free instant account setup. So you can start working on your website instantly without waste your time.  </p>
                </div>
                <div class="quart">
                    <h3>
                        <a href="#">
                            <img src="{{asset('Frontend/images')}}/bic9.png"  alt="Domane Names">
                            <hr>
                            Free Domane Name
                        </a>
                    </h3>
                    <p>A free domain name with our advanced and business hosting plans for first year on annual billing cycle.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end blue 4 boxes -->
    <!-- apps -->
    <div class="white padseptente" id="appz">
        <div class="content">
            <div class="flex-grid">
                <div class="half" style="width:60%">
                    <div class="iconsrow">
                        <img src="{{asset('Frontend/images')}}/cms1.png"  alt="">
                        <img src="{{asset('Frontend/images')}}/cms2.png"  alt="">
                        <img src="{{asset('Frontend/images')}}/cms3.png"  alt="">
                        <br>
                        <img src="{{asset('Frontend/images')}}/cms4.png"  alt="">
                        <img src="{{asset('Frontend/images')}}/cms5.png"  alt="">
                        <img src="{{asset('Frontend/images')}}/cms6.png"  alt="">
                    </div>
                </div>
                <div class="half">
                    <h2>Install Your Favorite Apps <br>With Just One Click</h2>
                    With our one click installer tool, available on every Web Hosting plan, you can create any type of website: blog, forum, CMS, wiki, photo gallery, E-commerce store, and so much more!  No more thinking for databases, downloading and uploading script files on your own, and other technical work. <br><br>
                    <a href="http://demo.softaculous.com/enduser/" class="bluebutton">View Demo</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end apps -->
    <!-- speed info -->
    <div class="pattern">
        <div class="content">
            <div class="flex-grid" id="premiumspeed">
                <div class="half" style="width:60%">
                    <h2>cPanel/WHM Control Panel</h2>
                    cPanel is one of the leading control panels in the web hosting industry. Take control of your ssd reseller account with this feature-packed and user-friendly control panel. You can create, modify and terminate customer account from Web Host Manager. You don't need to worry about managing your customer hosting account.
                </div>
                <div class="half" id="laptop"> <img src="{{asset('Frontend/images')}}/whm-cpanel.png"  alt=""></div>
            </div>
        </div>
    </div>
    <!-- end speed info -->
   
@endsection

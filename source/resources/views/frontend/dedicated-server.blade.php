@extends('frontend.partials.master')
@section('title','Fully Managed Dedicated Server | SSD Dedicated Server | Dedicated Hosting - ExonHost')

@section('maincontent')


    <!--banner. No label? Add 26px padding with nolabel class -->
    <div class="blue banner innerpage">
        <div id="gradient">
            <div class="content">
                <span class="labelred">Fully Managed</span>
                <h1>Dedicated Servers</h1>
                <div class="breadcrumb"><a href="{{'/'}}">home</a><span class="devider">&nbsp; /  &nbsp;</span><span>services: dedicated servers</span></div>
            </div>
        </div>
    </div>
    <!--end banner -->
    <!--plans /tab content -->
    <div class="white">
        <div class="content" id="dedicated-servers-available">
            <!--SAW TABLE -->
            <!-- single servers -->
            <h3>Single CPU Servers <b class="grey">Sort a list of servers by clicking on the column header</b></h3>
            <table class="tablesaw" data-tablesaw-sortable data-tablesaw-sortable-switch>
                <thead>
                <tr>
                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">Server Model</th>
                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Speed</th>
                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Memory</th>
                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">Hard Drives</th>
                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Bandwidth</th>
                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">Price</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="leftal"><span class="title  intel">Intel Xeon E3-1240 v5 4 Cores @ 3.5 Ghz</span></td>
                    <td>4 x 3.5 GHz</td>
                    <td>16 GB DDR4 ECC</td>
                    <td>2x500 GB SSD</td>
                    <td>10 TB</td>
                    <td>
                        <div class="price">$169.00<a class="greenbutton" href="https://clients.exonhost.com/cart.php?a=add&pid=88">Configure</a></div>
                    </td>
                </tr>
                <tr>
                    <td class="leftal"><span class="title intel">Intel Xeon E3-1240 v6 4 Cores @ 3.7 Ghz</span></td>
                    <td>4 x 3.7 GHz</td>
                    <td>16 GB DDR4 ECC</td>
                    <td>2x500 GB SSD</td>
                    <td>10 TB</td>
                    <td>
                        <div class="price">$179.00<a class="greenbutton" href="https://clients.exonhost.com/cart.php?a=add&pid=130">Configure</a></div>
                    </td>
                </tr>
                <tr>
                    <td class="leftal"><span class="title intel">Intel Xeon E5 1650 V4 6 Cores @ 3.6 Ghz</span></td>
                    <td>6 x 3.6 GHz</td>
                    <td>32 GB DDR4 ECC</td>
                    <td>2x500 GB SSD</td>
                    <td>10 TB</td>
                    <td>
                        <div class="price">$250.00<a class="greenbutton" href="https://clients.exonhost.com/cart.php?a=add&pid=132">Configure</a></div>
                    </td>
                </tr>
                </tbody>
            </table>
            <!-- end single servers -->
            <!-- dual  servers -->
            <h3>Dual CPU Servers <b class="grey">Sort a list of servers by clicking on the column header</b></h3>
            <table class="tablesaw" data-tablesaw-sortable data-tablesaw-sortable-switch>
                <thead>
                <tr>
                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">Server Model</th>
                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Speed</th>
                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Memory</th>
                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">Hard Drives</th>
                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Bandwidth</th>
                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">Price</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="leftal"><span class="title  intel">Dual Intel Xeon E5 2620 v4 16 Cores @ 2.1 Ghz</span></td>
                    <td>16 x 2.1 GHz</td>
                    <td>32 GB DDR4 ECC</td>
                    <td>2x500 GB SSD</td>
                    <td>10 TB</td>
                    <td>
                        <div class="price">$289.00<a class="greenbutton" href="https://clients.exonhost.com/cart.php?a=add&pid=171">Configure</a></div>
                    </td>
                </tr>
                <tr>
                    <td class="leftal"><span class="title intel">Dual Intel Xeon E5 2630 v4 16 Cores @ 2.2 Ghz</span></td>
                    <td>20 x 2.2 GHz</td>
                    <td>32 GB DDR3 ECC</td>
                    <td>2x500 GB SSD</td>
                    <td>10 TB</td>
                    <td>
                        <div class="price">$345.00<a class="greenbutton" href="https://clients.exonhost.com/cart.php?a=add&pid=92">Configure</a></div>
                    </td>
                </tr>
                </tbody>
            </table>
            <!-- end dual  servers -->
            <!--END TABLEs SAW -->
        </div>
    </div>
    </div></div>
    <!--end plans -->
    <!--available os -->
    <div class="white">
        <div class="content" id="oslist">
            <b>Featured Operating Systems</b>
            <hr>
            <span><img src="{{asset('Frontend/images')}}/os1.png"  alt=""></span>
            <span><img src="{{asset('Frontend/images')}}/os2.png"  alt=""></span>
            <span><img src="{{asset('Frontend/images')}}/os3.png"  alt=""></span>
            <span><img src="{{asset('Frontend/images')}}/os4.png"  alt=""></span>
            <span><img src="{{asset('Frontend/images')}}/os5.png"  alt=""></span>
            <span><img src="{{asset('Frontend/images')}}/os6.png"  alt=""></span>
            <span><img src="{{asset('Frontend/images')}}/os7.png"  alt=""></span>
            <span><img src="{{asset('Frontend/images')}}/os8.png"  alt=""></span>
            <span><img src="{{asset('Frontend/images')}}/os9.png"  alt=""></span>
            <span><img src="{{asset('Frontend/images')}}/os10.png"  alt=""></span>
        </div>
    </div>
    <!--end available os -->
    <!-- silver 4 boxes -->
    <div class="blue lightsilver" id="bonuses">
        <div class="content">
            <h1>All Dedicated Servers Included</h1>
            <div class="flex-grid">
                <div class="quart">
                    <h3>
                        <img src="{{asset('Frontend/images')}}/dedi1.png"  alt="Cloud Hosting">
                        <hr>
                        DDOS Protection
                    </h3>
                    <p>Protection against all known attacks up to 20 Gbps, our network protects from over 95% of the most common DDoS attacks </p>
                </div>
                <div class="quart">
                    <h3>
                        <img src="{{asset('Frontend/images')}}/dedi2.png"  alt="Dedicated Servers">
                        <hr>
                        Fully Managed
                    </h3>
                    <p>We run your server so you can run your business. This means that we provide full support and management for your server. </p>
                </div>
                <div class="quart">
                    <h3>
                        <img src="{{asset('Frontend/images')}}/dedi3.png"  alt="Data Backup">
                        <hr>
                        Free cPanel/WHM
                    </h3>
                    <p>All our Servers come with a cPanel/WHM Installed and Configured and included cPanel license at no additional cost. </p>
                </div>
                <div class="quart">
                    <h3>
                        <img src="{{asset('Frontend/images')}}/dedi4.png"  alt="Domane Names">
                        <hr>
                        Full Root Access
                    </h3>
                    <p>The full power of the server! Having root access to the server gives you the ability to take full control of your server. </p>
                </div>
            </div>
        </div>
    </div>
    <!-- end silver 4 boxes -->
    <!-- map -->
    <div id="map">
        <div id="mapimage">
            <img src="{{asset('Frontend/images')}}/map-network.png" alt="Network map">
            <h3>Our locations</h3>
        </div>
    </div>
    <!-- end map -->



@endsection

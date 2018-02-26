@extends('layouts.site')

@section('content')
    <!-- Page Content-->
    <main class="page-content text-left">
        <!-- Section Title Breadcrumbs-->
        <section class="section-full">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>Single Property Page</h1>
                        <p></p>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>Property Catalog</li>
                            <li class="active">Single Property Page</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section Catalog Single Left-->
        <section class="section-sm section-sm-mod-2">
            <div class="container">
                <h2>7758 Laguna Heights Court, Boston, MA 02127</h2>
                <hr>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <div data-lightbox="gallery" class="product-carousel">
                            <!-- Slick Carousel-->
                            <div class="carousel-slider slider">
                                <div class="item"><a href="images/catalog_single-1_original.jpg" data-lightbox="image"><img src="images/catalog_single-1.jpg" alt="" width="770" height="520"></a></div>
                                <div class="item"><a href="images/catalog_single-2_original.jpg" data-lightbox="image"><img src="images/catalog_single-2.jpg" alt="" width="770" height="520"></a></div>
                                <div class="item"><a href="images/catalog_single-3_original.jpg" data-lightbox="image"><img src="images/catalog_single-3.jpg" alt="" width="770" height="520"></a></div>
                                <div class="item"><a href="images/catalog_single-4_original.jpg" data-lightbox="image"><img src="images/catalog_single-4.jpg" alt="" width="770" height="520"></a></div>
                                <div class="item"><a href="images/catalog_single-5_original.jpg" data-lightbox="image"><img src="images/catalog_single-5.jpg" alt="" width="770" height="520"></a></div>
                                <div class="item"><a href="images/catalog_single-6_original.jpg" data-lightbox="image"><img src="images/catalog_single-6.jpg" alt="" width="770" height="520"></a></div>
                            </div>
                            <div class="carousel-thumbnail slider">
                                <div class="item"><img src="images/catalog_single-1.jpg" alt="" width="770" height="520"></div>
                                <div class="item"><img src="images/catalog_single-2.jpg" alt="" width="770" height="520"></div>
                                <div class="item"><img src="images/catalog_single-3.jpg" alt="" width="770" height="520"></div>
                                <div class="item"><img src="images/catalog_single-4.jpg" alt="" width="770" height="520"></div>
                                <div class="item"><img src="images/catalog_single-5.jpg" alt="" width="770" height="520"></div>
                                <div class="item"><img src="images/catalog_single-6.jpg" alt="" width="770" height="520"></div>
                            </div>
                        </div>
                        <div class="row visible-xs-block visible-sm-block">
                            <div class="col-xs-12 col-sm-6">
                                <div class="text-left">
                                    <ul class="list-unstyled small">
                                        <li><span class="text-darker">Created:</span>
                                            <time datetime="2015">5 months 7 days ago</time>
                                        </li>
                                        <li><span class="text-darker">Updated:</span>
                                            <time datetime="2015">1 month 18 days ago</time>
                                        </li>
                                    </ul>
                                    <ul class="describe-1 list-unstyled">
                                        <li><span class="icon-square">
                                <svg x="0px" y="0px" viewbox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
                                  <g>
                                      <path d="M3.6,75.7h3.6V7.3l85.7-0.1v85.3l-16.7-0.1l0-16.7c0-0.9-0.4-1.9-1-2.5c-0.7-0.7-1.6-1-2.5-1h-69V75.7h3.6                          H3.6v3.6H69L69,96c0,2,1.6,3.6,3.6,3.6l23.8,0.1c1,0,1.9-0.4,2.5-1c0.7-0.7,1-1.6,1-2.5V3.6c0-1-0.4-1.9-1-2.5                          c-0.7-0.7-1.6-1-2.5-1L3.6,0.1C1.6,0.2,0,1.7,0,3.7v72c0,0.9,0.4,1.9,1,2.5c0.7,0.7,1.6,1,2.5,1V75.7z"></path>
                                      <path d="M38.1,76.9v-9.5c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v9.5c0,1.3,1.1,2.4,2.4,2.4                          C37,79.3,38.1,78.2,38.1,76.9"></path>
                                      <path d="M38.1,50.7V15c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v35.7c0,1.3,1.1,2.4,2.4,2.4                          C37,53.1,38.1,52.1,38.1,50.7"></path>
                                      <path d="M2.4,38.8h33.3c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H2.4c-1.3,0-2.4,1.1-2.4,2.4                          C0,37.8,1.1,38.8,2.4,38.8"></path>
                                      <path d="M35.7,46h31c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4h-31c-1.3,0-2.4,1.1-2.4,2.4                          C33.3,44.9,34.4,46,35.7,46"></path>
                                      <path d="M78.6,46h16.7c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H78.6c-1.3,0-2.4,1.1-2.4,2.4                          C76.2,44.9,77.3,46,78.6,46"></path>
                                      <path d="M78.6,46h16.7c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H78.6c-1.3,0-2.4,1.1-2.4,2.4                          C76.2,44.9,77.3,46,78.6,46"></path>
                                      <path d="M81,43.6v-7.1c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v7.1c0,1.3,1.1,2.4,2.4,2.4                          C79.9,46,81,44.9,81,43.6"></path>
                                      <path d="M81,43.6v-7.1c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v7.1c0,1.3,1.1,2.4,2.4,2.4                          C79.9,46,81,44.9,81,43.6"></path>
                                  </g>
                                </svg></span>1200 sq ft</li>
                                        <li><span class="icon icon-sm icon-darker hotel-icon-10"></span>2 bathrooms</li>
                                    </ul>
                                    <ul class="describe-2 list-unstyled preffix-2">
                                        <li><span class="icon icon-sm icon-darker hotel-icon-05"></span>4 bedrooms</li>
                                        <li><span class="icon icon-sm icon-darker hotel-icon-26"></span>2 garages</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-module col-xs-12 col-sm-6">
                                <div class="price">
                                    <p class="small">Price</p>
                                    <p><span class="h4">$342.00/day</span><span class="h6 text-darker">
                              <del>$402.00/day</del></span></p>
                                    <div class="btn-group-isotope"><a href="contact_us.html" class="btn btn-primary btn-primary-transparent btn-md btn-min-width-lg">contact an agent</a><a href="contact_us.html" class="btn btn-primary btn-primary-transparent btn-md btn-min-width-lg">request a showing</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <h4>Description</h4>
                                <p>{{ $estate->description }}</p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <colgroup>
                                            <col class="col-xs-3">
                                            <col class="col-xs-3">
                                        </colgroup>
                                        <thead>
                                        <tr class="bg-gray">
                                            <th colspan="2">Property Amenities</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Features</td>
                                            <td>Lawn, Sprinkler System, Marble Floors</td>
                                        </tr>
                                        <tr>
                                            <td>MLS Listing ID</td>
                                            <td>12345678</td>
                                        </tr>
                                        <tr>
                                            <td>Year Built</td>
                                            <td>1868</td>
                                        </tr>
                                        <tr>
                                            <td>Lot Size</td>
                                            <td>5.45</td>
                                        </tr>
                                        <tr>
                                            <td>School District</td>
                                            <td>Boston Glen (925) 862-2026</td>
                                        </tr>
                                        <tr>
                                            <td>High School</td>
                                            <td>Call School District</td>
                                        </tr>
                                        <tr>
                                            <td>Middle School</td>
                                            <td>Call School District</td>
                                        </tr>
                                        <tr>
                                            <td>Elementary School</td>
                                            <td>Call School District</td>
                                        </tr>
                                        <tr>
                                            <td>Parking Type</td>
                                            <td>Garage - Attached</td>
                                        </tr>
                                        <tr>
                                            <td>Room Count</td>
                                            <td>6</td>
                                        </tr>
                                        <tr>
                                            <td>Roof Type</td>
                                            <td>Tile</td>
                                        </tr>
                                        <tr>
                                            <td>View Type</td>
                                            <td>Mountain</td>
                                        </tr>
                                        <tr>
                                            <td>Exterior Type</td>
                                            <td>Stucco</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <colgroup>
                                            <col class="col-xs-4">
                                            <col class="col-xs-2">
                                            <col class="col-xs-2">
                                        </colgroup>
                                        <thead>
                                        <tr class="bg-gray">
                                            <th colspan="3">Nearby Schools</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>St Andrew's Cathedral School</td>
                                            <td>Combined</td>
                                            <td>0.16 km</td>
                                        </tr>
                                        <tr>
                                            <td>Macquarie Grammar School</td>
                                            <td>Secondary</td>
                                            <td>0.45 km</td>
                                        </tr>
                                        <tr>
                                            <td>Holmes Secondary College</td>
                                            <td>Secondary</td>
                                            <td>0.52 km</td>
                                        </tr>
                                        <tr>
                                            <td>Grammar School</td>
                                            <td>Secondary</td>
                                            <td>0.82 km</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="catalog-sidebar range">
                            <div class="sidebar-module cell-sm-12 text-left col-md-push-0">
                                <ul class="list-unstyled small">
                                    <li><span class="text-darker">Created:</span>
                                        <time datetime="2015">5 months 7 days ago</time>
                                    </li>
                                    <li><span class="text-darker">Updated:</span>
                                        <time datetime="2015">1 month 18 days ago</time>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar-module cell-sm-6 cell-md-12 cell-md-push-2">
                                <ul class="describe-1 list-unstyled">
                                    <li><span class="icon-square">
                              <svg x="0px" y="0px" viewbox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
                                <g>
                                    <path d="M3.6,75.7h3.6V7.3l85.7-0.1v85.3l-16.7-0.1l0-16.7c0-0.9-0.4-1.9-1-2.5c-0.7-0.7-1.6-1-2.5-1h-69V75.7h3.6                      H3.6v3.6H69L69,96c0,2,1.6,3.6,3.6,3.6l23.8,0.1c1,0,1.9-0.4,2.5-1c0.7-0.7,1-1.6,1-2.5V3.6c0-1-0.4-1.9-1-2.5                      c-0.7-0.7-1.6-1-2.5-1L3.6,0.1C1.6,0.2,0,1.7,0,3.7v72c0,0.9,0.4,1.9,1,2.5c0.7,0.7,1.6,1,2.5,1V75.7z"></path>
                                    <path d="M38.1,76.9v-9.5c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v9.5c0,1.3,1.1,2.4,2.4,2.4                      C37,79.3,38.1,78.2,38.1,76.9"></path>
                                    <path d="M38.1,50.7V15c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v35.7c0,1.3,1.1,2.4,2.4,2.4                      C37,53.1,38.1,52.1,38.1,50.7"></path>
                                    <path d="M2.4,38.8h33.3c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H2.4c-1.3,0-2.4,1.1-2.4,2.4                      C0,37.8,1.1,38.8,2.4,38.8"></path>
                                    <path d="M35.7,46h31c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4h-31c-1.3,0-2.4,1.1-2.4,2.4                      C33.3,44.9,34.4,46,35.7,46"></path>
                                    <path d="M78.6,46h16.7c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H78.6c-1.3,0-2.4,1.1-2.4,2.4                      C76.2,44.9,77.3,46,78.6,46"></path>
                                    <path d="M78.6,46h16.7c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H78.6c-1.3,0-2.4,1.1-2.4,2.4                      C76.2,44.9,77.3,46,78.6,46"></path>
                                    <path d="M81,43.6v-7.1c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v7.1c0,1.3,1.1,2.4,2.4,2.4                      C79.9,46,81,44.9,81,43.6"></path>
                                    <path d="M81,43.6v-7.1c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v7.1c0,1.3,1.1,2.4,2.4,2.4                      C79.9,46,81,44.9,81,43.6"></path>
                                </g>
                              </svg></span>1200 sq ft</li>
                                    <li><span class="icon icon-sm icon-darker hotel-icon-10"></span>2 bathrooms</li>
                                </ul>
                                <ul class="describe-2 list-unstyled preffix-2">
                                    <li><span class="icon icon-sm icon-darker hotel-icon-05"></span>4 bedrooms</li>
                                    <li><span class="icon icon-sm icon-darker hotel-icon-26"></span>2 garages</li>
                                </ul>
                            </div>
                            <div class="sidebar-module cell-sm-6 cell-md-12 cell-md-push-4">
                                <ul class="list-unstyled">
                                    <li><span class="icon icon-darker icon-xxs fa-star-o"></span><a href="#" class="preffix-1 text-primary">Add to Favorites</a></li>
                                    <li class="offset-6">
                                        <ul class="list-inline">
                                            <li><span class="icon icon-xxs-mod-1 icon-darker fa-share-square-o"></span><span class="preffix-1">Share:</span></li>
                                            <li><a href="#" class="fa-facebook"></a></li>
                                            <li><a href="#" class="fa-twitter"></a></li>
                                            <li><a href="#" class="fa-pinterest-p"></a></li>
                                            <li><a href="#" class="fa-google"></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar-module cell-sm-6 cell-md-12 cell-md-push-5">
                                <!-- RD Google Map-->
                                <div class="rd-google-map rd-google-map-mod-1">
                                    <div id="google-map" data-zoom="14" data-x="-73.9874068" data-y="40.643180" class="rd-google-map__model"></div>
                                    <ul class="rd-google-map__locations">
                                        <li data-x="-73.9874068" data-y="40.643180">
                                            <p>9870 St Vincent Place, Glasgow, DC 45 Fr 45.<span>800 2345-6789</span></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-module cell-sm-6 cell-md-12 cell-md-push-3">
                                <div class="price">
                                    <p class="small">Price</p>
                                    <p><span class="h4">$342.00/day</span><span class="h6 text-darker">
                              <del>$402.00/day</del></span></p>
                                    <div class="btn-group-isotope"><a href="contact_us.html" class="btn btn-primary btn-primary-transparent btn-md btn-min-width-lg">contact an agent</a><a href="contact_us.html" class="btn btn-primary btn-primary-transparent btn-md btn-min-width-lg">request a showing</a></div>
                                </div>
                            </div>
                            <div class="sidebar-module cell-sm-6 cell-md-12 cell-md-push-6">
                                <h4>Request a Showing</h4>
                                <!-- Rd Mailform result field-->
                                <div class="rd-mailform-validate"></div>
                                <!-- RD Mailform-->
                                <form data-result-class="rd-mailform-validate" data-form-type="contact" method="post" action="bat/rd-mailform.php" class="rd-mailform">
                                    <input type="text" name="name" data-constraints="@NotEmpty" placeholder="Your First Name">
                                    <input type="text" name="name-2" data-constraints="@NotEmpty" placeholder="Your Last Name">
                                    <input type="text" name="phone" data-constraints="@Phone" placeholder="Your phone">
                                    <input type="text" name="email" data-constraints="@NotEmpty @Email" placeholder="Your e-mail">
                                    <textarea name="message" data-constraints="@NotEmpty" placeholder="I`m interested in 7758 Laguna Heights Court, Boston, MA 02127. Please contact me with more information!"></textarea>
                                    <button class="btn btn-primary btn-md">send message</button>
                                </form>
                            </div>
                            <div class="sidebar-module cell-sm-6 cell-md-12 cell-md-push-7">
                                <h4>Agent Information</h4>
                                <div class="media media-mod-3">
                                    <div class="media-left round img-width-auto"><img src="images/agency-1.jpg" alt="" width="100" height="100" class="round"></div>
                                    <div class="media-body">
                                        <h6 class="text-primary">Brandon Miller</h6>
                                        <p class="small text-darker">Listing Agent</p><a href="callto:#" class="text-bold">+1 (201) 123 4567</a>
                                    </div>
                                </div>
                                <p>He is our leading specialist in everything concerning Real Estate and property management.</p><a href="agent-personal.html" class="btn btn-primary btn-primary-transparent btn-sm">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section Catalog Single Right-->
        <section class="section-sm section-sm-mod-3">
            <div class="container text-center text-md-left">
                <h2>Similar Properties</h2>
                <hr>
                <div class="row clearleft-custom text-left">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="thumbnail"><a href="property-catalog-single.html" class="img-link"><img src="images/index-6.jpg" alt="" width="370" height="250"/><span class="thumbnail-price">$4,339.00/<span class="mon">month</span></span></a>
                            <div class="caption">
                                <h4><a href="property-catalog-single.html">Building: 123 on the Park</a></h4>
                                <ul class="describe-1">
                                    <li><span class="icon-square"><span class="icon-square">
                                <svg x="0px" y="0px" viewbox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
                                  <g>
                                      <path d="M3.6,75.7h3.6V7.3l85.7-0.1v85.3l-16.7-0.1l0-16.7c0-0.9-0.4-1.9-1-2.5c-0.7-0.7-1.6-1-2.5-1h-69V75.7h3.6                            H3.6v3.6H69L69,96c0,2,1.6,3.6,3.6,3.6l23.8,0.1c1,0,1.9-0.4,2.5-1c0.7-0.7,1-1.6,1-2.5V3.6c0-1-0.4-1.9-1-2.5                            c-0.7-0.7-1.6-1-2.5-1L3.6,0.1C1.6,0.2,0,1.7,0,3.7v72c0,0.9,0.4,1.9,1,2.5c0.7,0.7,1.6,1,2.5,1V75.7z"></path>
                                      <path d="M38.1,76.9v-9.5c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v9.5c0,1.3,1.1,2.4,2.4,2.4                            C37,79.3,38.1,78.2,38.1,76.9"></path>
                                      <path d="M38.1,50.7V15c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v35.7c0,1.3,1.1,2.4,2.4,2.4                            C37,53.1,38.1,52.1,38.1,50.7"></path>
                                      <path d="M2.4,38.8h33.3c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H2.4c-1.3,0-2.4,1.1-2.4,2.4                            C0,37.8,1.1,38.8,2.4,38.8"></path>
                                      <path d="M35.7,46h31c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4h-31c-1.3,0-2.4,1.1-2.4,2.4                            C33.3,44.9,34.4,46,35.7,46"></path>
                                      <path d="M78.6,46h16.7c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H78.6c-1.3,0-2.4,1.1-2.4,2.4                            C76.2,44.9,77.3,46,78.6,46"></path>
                                      <path d="M78.6,46h16.7c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H78.6c-1.3,0-2.4,1.1-2.4,2.4                            C76.2,44.9,77.3,46,78.6,46"></path>
                                      <path d="M81,43.6v-7.1c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v7.1c0,1.3,1.1,2.4,2.4,2.4                            C79.9,46,81,44.9,81,43.6"></path>
                                      <path d="M81,43.6v-7.1c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v7.1c0,1.3,1.1,2.4,2.4,2.4                            C79.9,46,81,44.9,81,43.6"></path>
                                  </g>
                                </svg></span></span>1200 sq ft</li>
                                    <li><span class="icon icon-sm icon-darker hotel-icon-10"></span>2 bathrooms</li>
                                </ul>
                                <ul class="describe-2">
                                    <li><span class="icon icon-sm icon-darker hotel-icon-05"></span>4 bedrooms</li>
                                    <li><span class="icon icon-sm icon-darker hotel-icon-26"></span>2 garages</li>
                                </ul>
                                <p>Introducing Brooklyn's most unique and genteel address: 123 on the Park. A stately, one-of-a-kind rental residence directly overlooking Brooklyn's famed Prospect Park.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="thumbnail"><a href="property-catalog-single.html" class="img-link"><img src="images/index-7.jpg" alt="" width="370" height="250"/><span class="thumbnail-price">$2,229.00/<span class="mon">month</span></span></a>
                            <div class="caption">
                                <h4><a href="property-catalog-single.html">225 Maywood Dr, San Francisco, CA 94127</a></h4>
                                <ul class="describe-1">
                                    <li><span class="icon-square"><span class="icon-square">
                                <svg x="0px" y="0px" viewbox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
                                  <g>
                                      <path d="M3.6,75.7h3.6V7.3l85.7-0.1v85.3l-16.7-0.1l0-16.7c0-0.9-0.4-1.9-1-2.5c-0.7-0.7-1.6-1-2.5-1h-69V75.7h3.6                            H3.6v3.6H69L69,96c0,2,1.6,3.6,3.6,3.6l23.8,0.1c1,0,1.9-0.4,2.5-1c0.7-0.7,1-1.6,1-2.5V3.6c0-1-0.4-1.9-1-2.5                            c-0.7-0.7-1.6-1-2.5-1L3.6,0.1C1.6,0.2,0,1.7,0,3.7v72c0,0.9,0.4,1.9,1,2.5c0.7,0.7,1.6,1,2.5,1V75.7z"></path>
                                      <path d="M38.1,76.9v-9.5c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v9.5c0,1.3,1.1,2.4,2.4,2.4                            C37,79.3,38.1,78.2,38.1,76.9"></path>
                                      <path d="M38.1,50.7V15c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v35.7c0,1.3,1.1,2.4,2.4,2.4                            C37,53.1,38.1,52.1,38.1,50.7"></path>
                                      <path d="M2.4,38.8h33.3c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H2.4c-1.3,0-2.4,1.1-2.4,2.4                            C0,37.8,1.1,38.8,2.4,38.8"></path>
                                      <path d="M35.7,46h31c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4h-31c-1.3,0-2.4,1.1-2.4,2.4                            C33.3,44.9,34.4,46,35.7,46"></path>
                                      <path d="M78.6,46h16.7c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H78.6c-1.3,0-2.4,1.1-2.4,2.4                            C76.2,44.9,77.3,46,78.6,46"></path>
                                      <path d="M78.6,46h16.7c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H78.6c-1.3,0-2.4,1.1-2.4,2.4                            C76.2,44.9,77.3,46,78.6,46"></path>
                                      <path d="M81,43.6v-7.1c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v7.1c0,1.3,1.1,2.4,2.4,2.4                            C79.9,46,81,44.9,81,43.6"></path>
                                      <path d="M81,43.6v-7.1c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v7.1c0,1.3,1.1,2.4,2.4,2.4                            C79.9,46,81,44.9,81,43.6"></path>
                                  </g>
                                </svg></span></span>1200 sq ft</li>
                                    <li><span class="icon icon-sm icon-darker hotel-icon-10"></span>2 bathrooms</li>
                                </ul>
                                <ul class="describe-2">
                                    <li><span class="icon icon-sm icon-darker hotel-icon-05"></span>4 bedrooms</li>
                                    <li><span class="icon icon-sm icon-darker hotel-icon-26"></span>2 garages</li>
                                </ul>
                                <p>One of the original homes built at Ocean Beach.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="thumbnail"><a href="property-catalog-single.html" class="img-link"><img src="images/index-8.jpg" alt="" width="370" height="250"/><span class="thumbnail-price">$1,339.00/<span class="mon">month</span></span></a>
                            <div class="caption">
                                <h4><a href="property-catalog-single.html">2266 48th Ave</a></h4>
                                <ul class="describe-1">
                                    <li><span class="icon-square"><span class="icon-square">
                                <svg x="0px" y="0px" viewbox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
                                  <g>
                                      <path d="M3.6,75.7h3.6V7.3l85.7-0.1v85.3l-16.7-0.1l0-16.7c0-0.9-0.4-1.9-1-2.5c-0.7-0.7-1.6-1-2.5-1h-69V75.7h3.6                            H3.6v3.6H69L69,96c0,2,1.6,3.6,3.6,3.6l23.8,0.1c1,0,1.9-0.4,2.5-1c0.7-0.7,1-1.6,1-2.5V3.6c0-1-0.4-1.9-1-2.5                            c-0.7-0.7-1.6-1-2.5-1L3.6,0.1C1.6,0.2,0,1.7,0,3.7v72c0,0.9,0.4,1.9,1,2.5c0.7,0.7,1.6,1,2.5,1V75.7z"></path>
                                      <path d="M38.1,76.9v-9.5c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v9.5c0,1.3,1.1,2.4,2.4,2.4                            C37,79.3,38.1,78.2,38.1,76.9"></path>
                                      <path d="M38.1,50.7V15c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v35.7c0,1.3,1.1,2.4,2.4,2.4                            C37,53.1,38.1,52.1,38.1,50.7"></path>
                                      <path d="M2.4,38.8h33.3c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H2.4c-1.3,0-2.4,1.1-2.4,2.4                            C0,37.8,1.1,38.8,2.4,38.8"></path>
                                      <path d="M35.7,46h31c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4h-31c-1.3,0-2.4,1.1-2.4,2.4                            C33.3,44.9,34.4,46,35.7,46"></path>
                                      <path d="M78.6,46h16.7c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H78.6c-1.3,0-2.4,1.1-2.4,2.4                            C76.2,44.9,77.3,46,78.6,46"></path>
                                      <path d="M78.6,46h16.7c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H78.6c-1.3,0-2.4,1.1-2.4,2.4                            C76.2,44.9,77.3,46,78.6,46"></path>
                                      <path d="M81,43.6v-7.1c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v7.1c0,1.3,1.1,2.4,2.4,2.4                            C79.9,46,81,44.9,81,43.6"></path>
                                      <path d="M81,43.6v-7.1c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v7.1c0,1.3,1.1,2.4,2.4,2.4                            C79.9,46,81,44.9,81,43.6"></path>
                                  </g>
                                </svg></span></span>1200 sq ft</li>
                                    <li><span class="icon icon-sm icon-darker hotel-icon-10"></span>2 bathrooms</li>
                                </ul>
                                <ul class="describe-2">
                                    <li><span class="icon icon-sm icon-darker hotel-icon-05"></span>4 bedrooms</li>
                                    <li><span class="icon icon-sm icon-darker hotel-icon-26"></span>2 garages</li>
                                </ul>
                                <p>Classic architectural detail, truly superb floor plan &amp; strong upside potential for the next steward to restore this forever home to greatness.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
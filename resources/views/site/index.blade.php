@extends('layouts.site')

@section('content')
    <section>
        <!--Swiper-->
        <div data-height="" data-min-height="600px" class="swiper-container swiper-slider">
            <div class="swiper-wrapper">
                <div data-slide-bg="assets/site/images/slide-1.jpg" class="swiper-slide">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <p data-caption-animate="fadeInDown" class="h1">1530-2 Liberty Ave 4</p>
                            <p data-caption-animate="fadeInUp" data-caption-delay="400" class="h5">This is a 3 bedroom, 2.0 bathroom multi family<br> home. It is located at 1530 Liberty Ave Hillside.</p>
                            <div data-caption-animate="fadeInUp" data-caption-delay="400" class="price">$309.00<span>/day</span></div><a href="property-catalog-single.html" data-caption-animate="fadeInUp" data-caption-delay="400" class="btn btn-sm btn-transparent">book now</a>
                        </div>
                    </div>
                </div>
                <div data-slide-bg="assets/site/images/slide-2.jpg" class="swiper-slide">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <p data-caption-animate="fadeInDown" class="h1">53 Rachel Ct 53</p>
                            <p data-caption-animate="fadeInUp" data-caption-delay="400" class="h5">A renovated apartment for rent by owner.<br> 2 bedroom, 2 full bath living and dining room</p>
                            <div data-caption-animate="fadeInUp" data-caption-delay="400" class="price">$216.00<span>/day</span></div><a href="property-catalog-single.html" data-caption-animate="fadeInUp" data-caption-delay="400" class="btn btn-sm btn-transparent">book now</a>
                        </div>
                    </div>
                </div>
                <div data-slide-bg="assets/site/images/slide-3.jpg" class="swiper-slide">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <p data-caption-animate="fadeInDown" class="h1">Modera Loft</p>
                            <p data-caption-animate="fadeInUp" data-caption-delay="400" class="h5">Make Modera Loft your home and reside<br>in historic Jersey City style.</p>
                            <div data-caption-animate="fadeInUp" data-caption-delay="400" class="price">$239.00<span>/day</span></div><a href="property-catalog-single.html" data-caption-animate="fadeInUp" data-caption-delay="400" class="btn btn-sm btn-transparent">book now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Swiper Pagination-->
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- Page Content-->
    <main class="page-content">
        <!--Section Find your home-->
        <section class="section-sm section-sm-mod-1 bg-dark">
            <div class="container position-margin-top undefined">
                <div class="search-form-wrap bg-white container-shadow">
                    <h3>Find Your Home</h3>
                    <form action="#" name="search-form" class="form-variant-1">
                        <div class="form-group">
                            <label for="keyword">Keyword</label>
                            <input id="keyword" type="text" name="keyword" placeholder="Any">
                        </div>
                        <div class="form-group">
                            <label for="select-1">Location</label>
                            <select id="select-1" name="select-1" class="rd-mailform-select">
                                <option value="Any" selected>Any</option>
                                <option value="Denver">Denver</option>
                                <option value="Houston">Houston</option>
                                <option value="Las Vegas">Las Vegas</option>
                                <option value="Orlando">Orlando</option>
                                <option value="Phoenix">Phoenix</option>
                                <option value="San Diego">San Diego</option>
                                <option value="Miami">Miami</option>
                                <option value="Atlanta">Atlanta</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="select-2">Property Status</label>
                            <select id="select-2" name="select-2" class="rd-mailform-select">
                                <option value="Any" selected>Any</option>
                                <option value="Vacant land">Vacant land</option>
                                <option value="Commercial">Commercial</option>
                                <option value="Residential">Residential</option>
                                <option value="Homes">Homes</option>
                                <option value="Condos">Condos</option>
                                <option value="Townhouses">Townhouses</option>
                                <option value="Foreclosures">Foreclosures</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="select-3">Property Type</label>
                            <select id="select-3" name="select-3" class="rd-mailform-select">
                                <option value="Any" selected>Any</option>
                                <option value="Under Construction">Under Construction</option>
                                <option value="Ready to Move">Ready to Move</option>
                            </select>
                        </div>
                        <div class="form-group width-1">
                            <label for="range-1">Price (USD)<br></label>
                            <input id="range-1" type="text" name="range-2" class="rd-range-input-value rd-range-input-value-1">
                            <input id="range-2" type="text" name="range-3" class="rd-range-input-value rd-range-input-value-2">
                            <div data-min="100" data-max="10000" data-start="[600, 9500]" data-step="50" data-tooltip="true" data-min-diff="100" data-input=".rd-range-input-value-1" data-input-2=".rd-range-input-value-2" class="rd-range"></div>
                        </div>
                        <div class="form-group width-1">
                            <label for="range-3">Area (Sq Ft)<br></label>
                            <input id="range-3" type="text" name="range-2" class="rd-range-input-value rd-range-input-value-3">
                            <input id="range-4" type="text" name="range-3" class="rd-range-input-value rd-range-input-value-4">
                            <div data-min="500" data-max="22000" data-start="[2000, 20000]" data-step="50" data-tooltip="true" data-min-diff="500" data-input=".rd-range-input-value-3" data-input-2=".rd-range-input-value-4" class="rd-range"></div>
                        </div>
                        <div class="form-group width-2">
                            <label for="select-7">Min Beds</label>
                            <select id="select-7" name="select-7" class="rd-mailform-select">
                                <option value="Any" selected>Any</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                        <div class="form-group width-2">
                            <label for="select-8">Min Baths</label>
                            <select id="select-8" name="select-8" class="rd-mailform-select">
                                <option value="Any" selected>Any</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                        <button class="btn btn-md btn-primary">Search</button>
                        <div class="features"><a href="" onclick="return false" class="btn-features"><span></span>Look for certain features</a>
                            <ul class="checkbox list-inline">
                                <li>
                                    <label class="mfCheckbox">
                                        <input type="checkbox" class="mfCheckbox__input"><span>Central Heating (7)</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="mfCheckbox">
                                        <input type="checkbox" class="mfCheckbox__input"><span>Lawn (6)</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="mfCheckbox">
                                        <input type="checkbox" class="mfCheckbox__input"><span>Marble Floors (8)</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="mfCheckbox">
                                        <input type="checkbox" class="mfCheckbox__input"><span>Fire Alarm (5)</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="mfCheckbox">
                                        <input type="checkbox" class="mfCheckbox__input"><span>Home Theater (3)</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="mfCheckbox">
                                        <input type="checkbox" class="mfCheckbox__input"><span>Hurricane Shutters (1)</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--Section Categories-->
        <section class="section-sm section-sm-mod-3 bg-dark text-center text-sm-left">
            <div class="shell">
                <h2>Categories</h2>
                <hr>
                <div class="range offset-1 text-left">
                    <div class="cell-sm-6 cell-md-4 cell-md-push-1">
                        <div class="category"><img src="assets/site/images/index-1.jpg" alt="" width="370" height="250"/>
                            <div class="category-content">
                                <h4>Studio Apartments</h4>
                                <p>42 properties</p><a href="property-catalog-single.html" class="btn btn-sm btn-primary">More details</a>
                            </div>
                        </div>
                        <div class="category"><img src="assets/site/images/index-2.jpg" alt="" width="370" height="250"/>
                            <div class="category-content">
                                <h4>Luxury Houses</h4>
                                <p>42 properties</p><a href="property-catalog-single.html" class="btn btn-sm btn-primary">More details</a>
                            </div>
                        </div>
                    </div>
                    <div class="cell-sm-6 cell-md-4 cell-md-push-3">
                        <div class="category"><img src="assets/site/images/index-4.jpg" alt="" width="370" height="250"/>
                            <div class="category-content">
                                <h4>+1 Bedroom Apartments</h4>
                                <p>42 properties</p><a href="property-catalog-single.html" class="btn btn-sm btn-primary">More details</a>
                            </div>
                        </div>
                        <div class="category"><img src="assets/site/images/index-5.jpg" alt="" width="370" height="250"/>
                            <div class="category-content">
                                <h4>Cozy Houses</h4>
                                <p>42 properties</p><a href="property-catalog-single.html" class="btn btn-sm btn-primary">More details</a>
                            </div>
                        </div>
                    </div>
                    <div class="cell-sm-6 cell-sm-preffix-3 cell-md-4 cell-md-preffix-0 cell-md-push-2">
                        <div class="category"><img src="assets/site/images/index-3.jpg" alt="" width="370" height="530"/>
                            <div class="category-content">
                                <h4>With Swimming Pool</h4>
                                <p>42 properties</p><a href="property-catalog-single.html" class="btn btn-sm btn-primary">More details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Section Recent Properties-->
        <section class="section-md text-center text-sm-left">
            <div class="container">
                <h2>Recent Properties</h2>
                <hr>
                <div class="row clearleft-custom">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="thumbnail"><a href="property-catalog-single.html" class="img-link"><img src="assets/site/images/index-6.jpg" alt="" width="370" height="250"/><span class="thumbnail-price">$4,339.00/<span class="mon">month</span></span></a>
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
                        <div class="thumbnail"><a href="property-catalog-single.html" class="img-link"><img src="assets/site/images/index-7.jpg" alt="" width="370" height="250"/><span class="thumbnail-price">$2,229.00/<span class="mon">month</span></span></a>
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
                        <div class="thumbnail"><a href="property-catalog-single.html" class="img-link"><img src="assets/site/images/index-8.jpg" alt="" width="370" height="250"/><span class="thumbnail-price">$1,339.00/<span class="mon">month</span></span></a>
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
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="thumbnail"><a href="property-catalog-single.html" class="img-link"><img src="assets/site/images/index-9.jpg" alt="" width="370" height="250"/><span class="thumbnail-price">$4,339.00/<span class="mon">month</span></span></a>
                            <div class="caption">
                                <h4><a href="property-catalog-single.html">1336 N Occidental Blvd</a></h4>
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
                                <p>Located in the heart of Silver Lake, this magnificently re-imagined Spanish bungalow is not to be missed.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="thumbnail"><a href="property-catalog-single.html" class="img-link"><img src="assets/site/images/index-10.jpg" alt="" width="370" height="250"/><span class="thumbnail-price">$2,229.00/<span class="mon">month</span></span></a>
                            <div class="caption">
                                <h4><a href="property-catalog-single.html">650 Kelton Ave #201</a></h4>
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
                                <p>Front-facing, single level, well-designed floor plan. Secure building in a highly DESIRABLE location!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="thumbnail"><a href="property-catalog-single.html" class="img-link"><img src="assets/site/images/index-11.jpg" alt="" width="370" height="250"/><span class="thumbnail-price">$1,339.00/<span class="mon">month</span></span></a>
                            <div class="caption">
                                <h4><a href="property-catalog-single.html">1735 N Fuller Ave #124</a></h4>
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
                                <p>This charming 2 bed and 2 bath townhome has been beautifully renovated and ready for its next owners.</p>
                            </div>
                        </div>
                    </div>
                </div><a href="property-catalog-grid.html" class="btn btn-md btn-primary offset-5">view all properties</a>
            </div>
        </section>
        <!--Section Our Advantages-->
        <section class="section-md bg-gray text-center text-md-left">
            <div class="container">
                <h2>Our Advantages</h2>
                <hr>
                <div class="row flow-offset-1 clearleft-custom-2">
                    <div class="col-sm-6 col-md-6">
                        <div class="media media-mod-1">
                            <div class="media-left"><span class="linecons-location4 icon icon-lg bg-primary"></span></div>
                            <div class="media-body">
                                <h4>Various Locations</h4>
                                <p>Search by state then by city to find an apartment  overlooking the lake in Chicago, within walking distance of the beach in Los Angeles or in the heart of Atlanta.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="media media-mod-1">
                            <div class="media-left"><span class="linecons-camera7 icon icon-lg bg-primary"></span></div>
                            <div class="media-body">
                                <h4>View Apartments</h4>
                                <p>View apartment listings with photos, HD videos, InsideView virtual tours, 3D floor plans, and more, while also choosing the apartment and community features that you want.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="media media-mod-1">
                            <div class="media-left"><span class="linecons-blockade icon icon-lg bg-primary"></span></div>
                            <div class="media-body">
                                <h4>Privacy and Security</h4>
                                <p>Renters insurance helps keep your belongings secure, whether they're on your desk, under your couch, or in some cases, even in your car's glove box.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="media media-mod-1">
                            <div class="media-left"><span class="linecons-banknote icon icon-lg bg-primary"></span></div>
                            <div class="media-body">
                                <h4>No Commission</h4>
                                <p>You will therefore appreciate this opportunity to acquire a high-quality apartment for rent without having to pay any commission to our real estate agency.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Section Our Team-->
        <section>
            <!-- Owl Carousel-->
            <div data-items="1" data-xs-items="2" data-sm-items="2" data-md-items="3" data-lg-items="4" data-stage-padding="0" data-loop="false" data-margin="0" data-nav="true" data-autoplay="true" class="owl-carousel">
                <div class="owl-item"><img src="assets/site/images/index-12.jpg" alt="" width="480" height="570">
                    <div class="owl-item-content">
                        <h4>Michelle Nelson</h4>
                        <p>Realtor</p><a href="agent-personal.html" class="btn btn-sm btn-primary">get in touch</a>
                    </div>
                </div>
                <div class="owl-item"><img src="assets/site/images/index-13.jpg" alt="" width="480" height="570">
                    <div class="owl-item-content">
                        <h4>Brandon Miller</h4>
                        <p>Manager</p><a href="agent-personal.html" class="btn btn-sm btn-primary">get in touch</a>
                    </div>
                </div>
                <div class="owl-item"><img src="assets/site/images/index-14.jpg" alt="" width="480" height="570">
                    <div class="owl-item-content">
                        <h4>Christina Harvey</h4>
                        <p>Realtor</p><a href="agent-personal.html" class="btn btn-sm btn-primary">get in touch</a>
                    </div>
                </div>
                <div class="owl-item"><img src="assets/site/images/index-15.jpg" alt="" width="480" height="570">
                    <div class="owl-item-content">
                        <h4>Carolyn Stone</h4>
                        <p>Realtor</p><a href="agent-personal.html" class="btn btn-sm btn-primary">get in touch</a>
                    </div>
                </div>
                <div class="owl-item"><img src="assets/site/images/index-12.jpg" alt="" width="480" height="570">
                    <div class="owl-item-content">
                        <h4>Michelle Nelson</h4>
                        <p>Realtor</p><a href="agent-personal.html" class="btn btn-sm btn-primary">get in touch</a>
                    </div>
                </div>
                <div class="owl-item"><img src="assets/site/images/index-13.jpg" alt="" width="480" height="570">
                    <div class="owl-item-content">
                        <h4>Brandon Miller</h4>
                        <p>Manager</p><a href="agent-personal.html" class="btn btn-sm btn-primary">get in touch</a>
                    </div>
                </div>
                <div class="owl-item"><img src="assets/site/images/index-14.jpg" alt="" width="480" height="570">
                    <div class="owl-item-content">
                        <h4>Christina Harvey</h4>
                        <p>Realtor</p><a href="agent-personal.html" class="btn btn-sm btn-primary">get in touch</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Section Testimonial-->
        <section class="section-md text-center text-sm-left">
            <div class="container">
                <h2> Testimonials</h2>
                <hr>
                <!-- Owl Carousel-->
                <div data-items="1" data-xs-items="1" data-sm-items="2" data-md-items="3" data-loop="false" data-margin="30" data-dots="true" data-autoplay="true" class="owl-carousel owl-carousel-mod-2">
                    <div class="owl-item">
                        <blockquote class="quote">
                            <div class="img-wrap"><img src="assets/site/images/index-16.jpg" alt="" width="50" height="50"></div>
                            <cite class="h6">Laura Russell</cite>
                            <p>
                                <q>Thanks a lot for the quick response. I was really impressed, your solution is excellent!! Your competence is justified!!!</q>
                            </p>
                        </blockquote>
                    </div>
                    <div class="owl-item">
                        <blockquote class="quote">
                            <div class="img-wrap"><img src="assets/site/images/index-17.jpg" alt="" width="50" height="50"></div>
                            <cite class="h6">Richard Santos</cite>
                            <p>
                                <q>I just don't know how to describe your services... They are extraordinary! I am quite happy with them! Just keep up going this way!</q>
                            </p>
                        </blockquote>
                    </div>
                    <div class="owl-item">
                        <blockquote class="quote">
                            <div class="img-wrap"><img src="assets/site/images/index-18.jpg" alt="" width="50" height="50"></div>
                            <cite class="h6">Dylan Medina</cite>
                            <p>
                                <q>Thank you very much. I'm impressed with your service. I've already told my friends about your company and your quick response, thanks again!</q>
                            </p>
                        </blockquote>
                    </div>
                    <div class="owl-item">
                        <blockquote class="quote">
                            <div class="img-wrap"><img src="assets/site/images/index-16.jpg" alt="" width="50" height="50"></div>
                            <cite class="h6">Laura Russell</cite>
                            <p>
                                <q>Thanks a lot for the quick response. I was really impressed, your solution is excellent!! Your competence is justified!!!</q>
                            </p>
                        </blockquote>
                    </div>
                    <div class="owl-item">
                        <blockquote class="quote">
                            <div class="img-wrap"><img src="assets/site/images/index-17.jpg" alt="" width="50" height="50"></div>
                            <cite class="h6">Richard Santos</cite>
                            <p>
                                <q>I just don't know how to describe your services... They are extraordinary! I am quite happy with them! Just keep up going this way!</q>
                            </p>
                        </blockquote>
                    </div>
                    <div class="owl-item">
                        <blockquote class="quote">
                            <div class="img-wrap"><img src="assets/site/images/index-18.jpg" alt="" width="50" height="50"></div>
                            <cite class="h6">Dylan Medina</cite>
                            <p>
                                <q>Thank you very much. I'm impressed with your service. I've already told my friends about your company and your quick response, thanks again!</q>
                            </p>
                        </blockquote>
                    </div>
                    <div class="owl-item">
                        <blockquote class="quote">
                            <div class="img-wrap"><img src="assets/site/images/index-16.jpg" alt="" width="50" height="50"></div>
                            <cite class="h6">Laura Russell</cite>
                            <p>
                                <q>Thanks a lot for the quick response. I was really impressed, your solution is excellent!! Your competence is justified!!!</q>
                            </p>
                        </blockquote>
                    </div>
                    <div class="owl-item">
                        <blockquote class="quote">
                            <div class="img-wrap"><img src="assets/site/images/index-17.jpg" alt="" width="50" height="50"></div>
                            <cite class="h6">Richard Santos</cite>
                            <p>
                                <q>I just don't know how to describe your services... They are extraordinary! I am quite happy with them! Just keep up going this way!</q>
                            </p>
                        </blockquote>
                    </div>
                    <div class="owl-item">
                        <blockquote class="quote">
                            <div class="img-wrap"><img src="assets/site/images/index-18.jpg" alt="" width="50" height="50"></div>
                            <cite class="h6">Dylan Medina</cite>
                            <p>
                                <q>Thank you very much. I'm impressed with your service. I've already told my friends about your company and your quick response, thanks again!</q>
                            </p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
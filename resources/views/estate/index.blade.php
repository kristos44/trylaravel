@extends('layouts.site')

@section('content')
    <!-- Page Content-->
    <main class="page-content text-left">
        <!-- Section Title Breadcrumbs-->
        <section class="section-full section-full-mod-1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>Property Catalog Grid</h1>

                        <p></p>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>Property Catalog</li>
                            <li class="active">Property Catalog Grid</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!--Section Find your home-->
        <section class="section-sm section-sm-mod-1 undefined">
            <div class="container position-margin-top position-margin-top-mod-1">
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
                            <input id="range-1" type="text" name="range-2"
                                   class="rd-range-input-value rd-range-input-value-1">
                            <input id="range-2" type="text" name="range-3"
                                   class="rd-range-input-value rd-range-input-value-2">

                            <div data-min="100" data-max="10000" data-start="[600, 9500]" data-step="50" data-tooltip="true"
                                 data-min-diff="100" data-input=".rd-range-input-value-1"
                                 data-input-2=".rd-range-input-value-2" class="rd-range"></div>
                        </div>
                        <div class="form-group width-1">
                            <label for="range-3">Area (Sq Ft)<br></label>
                            <input id="range-3" type="text" name="range-2"
                                   class="rd-range-input-value rd-range-input-value-3">
                            <input id="range-4" type="text" name="range-3"
                                   class="rd-range-input-value rd-range-input-value-4">

                            <div data-min="500" data-max="22000" data-start="[2000, 20000]" data-step="50"
                                 data-tooltip="true" data-min-diff="500" data-input=".rd-range-input-value-3"
                                 data-input-2=".rd-range-input-value-4" class="rd-range"></div>
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
                        <div class="features"><a href="" onclick="return false" class="btn-features"><span></span>Look for
                                certain features</a>
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
        <!-- Section Sorting-->
        <section class="section-xs">
            <div class="container">
                <!-- RD SelectMenu-->
                <div class="sort-input pull-xs-left">
                    <label for="sort-1" class="small text-regular">Sort
                        <select id="sort-1" name="select" class="rd-mailform-select">
                            <option value="By Price" selected>By Price</option>
                            <option value="By Date">By Date</option>
                            <option value="By Square">By Square</option>
                            <option value="By Location">By Location</option>
                        </select>
                    </label>
                </div>
                <div class="btn-group-mod-3 sorting text-left pull-xs-right"><a href="property-catalog-list.html"
                                                                                class="btn btn-primary btn-sm">List</a><a
                            href="property-catalog-grid.html" class="btn btn-primary btn-sm active">Grid</a></div>
            </div>
        </section>
        <!-- Section Catalog-->
        <section class="section-sm">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-8">
                        <div class="row clearleft-custom-5">
                            @foreach ($estates as $estate)
                                <div class="col-xs-12 col-sm-6">
                                    {{ $estate->id }}
                                    <div class="thumbnail"><a href="property-catalog-single.html" class="img-link"><img
                                                    src="images/index-6.jpg" alt="" width="370" height="250"/><span
                                                    class="thumbnail-price">$4,339.00/<span class="mon">month</span></span></a>

                                        <div class="caption">
                                            <h4><a href="oferta/szczegoly/{{ $estate->id }}">{{ $estate->name }}</a></h4>
                                            <ul class="describe-1">
                                                <li><span class="icon-square"><span class="icon-square">
                                    <svg x="0px" y="0px" viewbox="0 0 100 100" style="enable-background:new 0 0 100 100;"
                                         xml:space="preserve">
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
                                    </svg></span></span>1200 sq ft
                                                </li>
                                                <li><span class="icon icon-sm icon-darker hotel-icon-10"></span>2 bathrooms</li>
                                            </ul>
                                            <ul class="describe-2">
                                                <li><span class="icon icon-sm icon-darker hotel-icon-05"></span>4 bedrooms</li>
                                                <li><span class="icon icon-sm icon-darker hotel-icon-26"></span>2 garages</li>
                                            </ul>
                                            <p>Introducing Brooklyn's most unique and genteel address: 123 on the Park. A
                                                stately, one-of-a-kind rental residence directly overlooking Brooklyn's famed
                                                Prospect Park.</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{--<div class="col-xs-12 col-sm-6">--}}
                                {{--<div class="thumbnail"><a href="property-catalog-single.html" class="img-link"><img--}}
                                                {{--src="images/index-7.jpg" alt="" width="370" height="250"/><span--}}
                                                {{--class="thumbnail-price">$2,229.00/<span class="mon">month</span></span></a>--}}

                                    {{--<div class="caption">--}}
                                        {{--<h4><a href="property-catalog-single.html">225 Maywood Dr, San Francisco, CA--}}
                                                {{--94127</a></h4>--}}
                                        {{--<ul class="describe-1">--}}
                                            {{--<li><span class="icon-square"><span class="icon-square">--}}
                                    {{--<svg x="0px" y="0px" viewbox="0 0 100 100" style="enable-background:new 0 0 100 100;"--}}
                                         {{--xml:space="preserve">--}}
                                      {{--<g>--}}
                                          {{--<path d="M3.6,75.7h3.6V7.3l85.7-0.1v85.3l-16.7-0.1l0-16.7c0-0.9-0.4-1.9-1-2.5c-0.7-0.7-1.6-1-2.5-1h-69V75.7h3.6                            H3.6v3.6H69L69,96c0,2,1.6,3.6,3.6,3.6l23.8,0.1c1,0,1.9-0.4,2.5-1c0.7-0.7,1-1.6,1-2.5V3.6c0-1-0.4-1.9-1-2.5                            c-0.7-0.7-1.6-1-2.5-1L3.6,0.1C1.6,0.2,0,1.7,0,3.7v72c0,0.9,0.4,1.9,1,2.5c0.7,0.7,1.6,1,2.5,1V75.7z"></path>--}}
                                          {{--<path d="M38.1,76.9v-9.5c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v9.5c0,1.3,1.1,2.4,2.4,2.4                            C37,79.3,38.1,78.2,38.1,76.9"></path>--}}
                                          {{--<path d="M38.1,50.7V15c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v35.7c0,1.3,1.1,2.4,2.4,2.4                            C37,53.1,38.1,52.1,38.1,50.7"></path>--}}
                                          {{--<path d="M2.4,38.8h33.3c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H2.4c-1.3,0-2.4,1.1-2.4,2.4                            C0,37.8,1.1,38.8,2.4,38.8"></path>--}}
                                          {{--<path d="M35.7,46h31c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4h-31c-1.3,0-2.4,1.1-2.4,2.4                            C33.3,44.9,34.4,46,35.7,46"></path>--}}
                                          {{--<path d="M78.6,46h16.7c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H78.6c-1.3,0-2.4,1.1-2.4,2.4                            C76.2,44.9,77.3,46,78.6,46"></path>--}}
                                          {{--<path d="M78.6,46h16.7c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H78.6c-1.3,0-2.4,1.1-2.4,2.4                            C76.2,44.9,77.3,46,78.6,46"></path>--}}
                                          {{--<path d="M81,43.6v-7.1c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v7.1c0,1.3,1.1,2.4,2.4,2.4                            C79.9,46,81,44.9,81,43.6"></path>--}}
                                          {{--<path d="M81,43.6v-7.1c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v7.1c0,1.3,1.1,2.4,2.4,2.4                            C79.9,46,81,44.9,81,43.6"></path>--}}
                                      {{--</g>--}}
                                    {{--</svg></span></span>1200 sq ft--}}
                                            {{--</li>--}}
                                            {{--<li><span class="icon icon-sm icon-darker hotel-icon-10"></span>2 bathrooms</li>--}}
                                        {{--</ul>--}}
                                        {{--<ul class="describe-2">--}}
                                            {{--<li><span class="icon icon-sm icon-darker hotel-icon-05"></span>4 bedrooms</li>--}}
                                            {{--<li><span class="icon icon-sm icon-darker hotel-icon-26"></span>2 garages</li>--}}
                                        {{--</ul>--}}
                                        {{--<p>One of the original homes built at Ocean Beach.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-xs-12 col-sm-6">--}}
                                {{--<div class="thumbnail"><a href="property-catalog-single.html" class="img-link"><img--}}
                                                {{--src="images/index-8.jpg" alt="" width="370" height="250"/><span--}}
                                                {{--class="thumbnail-price">$1,339.00/<span class="mon">month</span></span></a>--}}

                                    {{--<div class="caption">--}}
                                        {{--<h4><a href="property-catalog-single.html">2266 48th Ave</a></h4>--}}
                                        {{--<ul class="describe-1">--}}
                                            {{--<li><span class="icon-square"><span class="icon-square">--}}
                                    {{--<svg x="0px" y="0px" viewbox="0 0 100 100" style="enable-background:new 0 0 100 100;"--}}
                                         {{--xml:space="preserve">--}}
                                      {{--<g>--}}
                                          {{--<path d="M3.6,75.7h3.6V7.3l85.7-0.1v85.3l-16.7-0.1l0-16.7c0-0.9-0.4-1.9-1-2.5c-0.7-0.7-1.6-1-2.5-1h-69V75.7h3.6                            H3.6v3.6H69L69,96c0,2,1.6,3.6,3.6,3.6l23.8,0.1c1,0,1.9-0.4,2.5-1c0.7-0.7,1-1.6,1-2.5V3.6c0-1-0.4-1.9-1-2.5                            c-0.7-0.7-1.6-1-2.5-1L3.6,0.1C1.6,0.2,0,1.7,0,3.7v72c0,0.9,0.4,1.9,1,2.5c0.7,0.7,1.6,1,2.5,1V75.7z"></path>--}}
                                          {{--<path d="M38.1,76.9v-9.5c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v9.5c0,1.3,1.1,2.4,2.4,2.4                            C37,79.3,38.1,78.2,38.1,76.9"></path>--}}
                                          {{--<path d="M38.1,50.7V15c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v35.7c0,1.3,1.1,2.4,2.4,2.4                            C37,53.1,38.1,52.1,38.1,50.7"></path>--}}
                                          {{--<path d="M2.4,38.8h33.3c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H2.4c-1.3,0-2.4,1.1-2.4,2.4                            C0,37.8,1.1,38.8,2.4,38.8"></path>--}}
                                          {{--<path d="M35.7,46h31c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4h-31c-1.3,0-2.4,1.1-2.4,2.4                            C33.3,44.9,34.4,46,35.7,46"></path>--}}
                                          {{--<path d="M78.6,46h16.7c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H78.6c-1.3,0-2.4,1.1-2.4,2.4                            C76.2,44.9,77.3,46,78.6,46"></path>--}}
                                          {{--<path d="M78.6,46h16.7c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H78.6c-1.3,0-2.4,1.1-2.4,2.4                            C76.2,44.9,77.3,46,78.6,46"></path>--}}
                                          {{--<path d="M81,43.6v-7.1c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v7.1c0,1.3,1.1,2.4,2.4,2.4                            C79.9,46,81,44.9,81,43.6"></path>--}}
                                          {{--<path d="M81,43.6v-7.1c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v7.1c0,1.3,1.1,2.4,2.4,2.4                            C79.9,46,81,44.9,81,43.6"></path>--}}
                                      {{--</g>--}}
                                    {{--</svg></span></span>1200 sq ft--}}
                                            {{--</li>--}}
                                            {{--<li><span class="icon icon-sm icon-darker hotel-icon-10"></span>2 bathrooms</li>--}}
                                        {{--</ul>--}}
                                        {{--<ul class="describe-2">--}}
                                            {{--<li><span class="icon icon-sm icon-darker hotel-icon-05"></span>4 bedrooms</li>--}}
                                            {{--<li><span class="icon icon-sm icon-darker hotel-icon-26"></span>2 garages</li>--}}
                                        {{--</ul>--}}
                                        {{--<p>Classic architectural detail, truly superb floor plan &amp; strong upside--}}
                                            {{--potential for the next steward to restore this forever home to greatness.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-xs-12 col-sm-6">--}}
                                {{--<div class="thumbnail"><a href="property-catalog-single.html" class="img-link"><img--}}
                                                {{--src="images/index-9.jpg" alt="" width="370" height="250"/><span--}}
                                                {{--class="thumbnail-price">$4,339.00/<span class="mon">month</span></span></a>--}}

                                    {{--<div class="caption">--}}
                                        {{--<h4><a href="property-catalog-single.html">1336 N Occidental Blvd</a></h4>--}}
                                        {{--<ul class="describe-1">--}}
                                            {{--<li><span class="icon-square"><span class="icon-square">--}}
                                    {{--<svg x="0px" y="0px" viewbox="0 0 100 100" style="enable-background:new 0 0 100 100;"--}}
                                         {{--xml:space="preserve">--}}
                                      {{--<g>--}}
                                          {{--<path d="M3.6,75.7h3.6V7.3l85.7-0.1v85.3l-16.7-0.1l0-16.7c0-0.9-0.4-1.9-1-2.5c-0.7-0.7-1.6-1-2.5-1h-69V75.7h3.6                            H3.6v3.6H69L69,96c0,2,1.6,3.6,3.6,3.6l23.8,0.1c1,0,1.9-0.4,2.5-1c0.7-0.7,1-1.6,1-2.5V3.6c0-1-0.4-1.9-1-2.5                            c-0.7-0.7-1.6-1-2.5-1L3.6,0.1C1.6,0.2,0,1.7,0,3.7v72c0,0.9,0.4,1.9,1,2.5c0.7,0.7,1.6,1,2.5,1V75.7z"></path>--}}
                                          {{--<path d="M38.1,76.9v-9.5c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v9.5c0,1.3,1.1,2.4,2.4,2.4                            C37,79.3,38.1,78.2,38.1,76.9"></path>--}}
                                          {{--<path d="M38.1,50.7V15c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v35.7c0,1.3,1.1,2.4,2.4,2.4                            C37,53.1,38.1,52.1,38.1,50.7"></path>--}}
                                          {{--<path d="M2.4,38.8h33.3c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H2.4c-1.3,0-2.4,1.1-2.4,2.4                            C0,37.8,1.1,38.8,2.4,38.8"></path>--}}
                                          {{--<path d="M35.7,46h31c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4h-31c-1.3,0-2.4,1.1-2.4,2.4                            C33.3,44.9,34.4,46,35.7,46"></path>--}}
                                          {{--<path d="M78.6,46h16.7c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H78.6c-1.3,0-2.4,1.1-2.4,2.4                            C76.2,44.9,77.3,46,78.6,46"></path>--}}
                                          {{--<path d="M78.6,46h16.7c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H78.6c-1.3,0-2.4,1.1-2.4,2.4                            C76.2,44.9,77.3,46,78.6,46"></path>--}}
                                          {{--<path d="M81,43.6v-7.1c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v7.1c0,1.3,1.1,2.4,2.4,2.4                            C79.9,46,81,44.9,81,43.6"></path>--}}
                                          {{--<path d="M81,43.6v-7.1c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v7.1c0,1.3,1.1,2.4,2.4,2.4                            C79.9,46,81,44.9,81,43.6"></path>--}}
                                      {{--</g>--}}
                                    {{--</svg></span></span>1200 sq ft--}}
                                            {{--</li>--}}
                                            {{--<li><span class="icon icon-sm icon-darker hotel-icon-10"></span>2 bathrooms</li>--}}
                                        {{--</ul>--}}
                                        {{--<ul class="describe-2">--}}
                                            {{--<li><span class="icon icon-sm icon-darker hotel-icon-05"></span>4 bedrooms</li>--}}
                                            {{--<li><span class="icon icon-sm icon-darker hotel-icon-26"></span>2 garages</li>--}}
                                        {{--</ul>--}}
                                        {{--<p>Located in the heart of Silver Lake, this magnificently re-imagined Spanish--}}
                                            {{--bungalow is not to be missed.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-xs-12 col-sm-6">--}}
                                {{--<div class="thumbnail"><a href="property-catalog-single.html" class="img-link"><img--}}
                                                {{--src="images/index-10.jpg" alt="" width="370" height="250"/><span--}}
                                                {{--class="thumbnail-price">$2,229.00/<span class="mon">month</span></span></a>--}}

                                    {{--<div class="caption">--}}
                                        {{--<h4><a href="property-catalog-single.html">650 Kelton Ave #201</a></h4>--}}
                                        {{--<ul class="describe-1">--}}
                                            {{--<li><span class="icon-square"><span class="icon-square">--}}
                                    {{--<svg x="0px" y="0px" viewbox="0 0 100 100" style="enable-background:new 0 0 100 100;"--}}
                                         {{--xml:space="preserve">--}}
                                      {{--<g>--}}
                                          {{--<path d="M3.6,75.7h3.6V7.3l85.7-0.1v85.3l-16.7-0.1l0-16.7c0-0.9-0.4-1.9-1-2.5c-0.7-0.7-1.6-1-2.5-1h-69V75.7h3.6                            H3.6v3.6H69L69,96c0,2,1.6,3.6,3.6,3.6l23.8,0.1c1,0,1.9-0.4,2.5-1c0.7-0.7,1-1.6,1-2.5V3.6c0-1-0.4-1.9-1-2.5                            c-0.7-0.7-1.6-1-2.5-1L3.6,0.1C1.6,0.2,0,1.7,0,3.7v72c0,0.9,0.4,1.9,1,2.5c0.7,0.7,1.6,1,2.5,1V75.7z"></path>--}}
                                          {{--<path d="M38.1,76.9v-9.5c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v9.5c0,1.3,1.1,2.4,2.4,2.4                            C37,79.3,38.1,78.2,38.1,76.9"></path>--}}
                                          {{--<path d="M38.1,50.7V15c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v35.7c0,1.3,1.1,2.4,2.4,2.4                            C37,53.1,38.1,52.1,38.1,50.7"></path>--}}
                                          {{--<path d="M2.4,38.8h33.3c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H2.4c-1.3,0-2.4,1.1-2.4,2.4                            C0,37.8,1.1,38.8,2.4,38.8"></path>--}}
                                          {{--<path d="M35.7,46h31c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4h-31c-1.3,0-2.4,1.1-2.4,2.4                            C33.3,44.9,34.4,46,35.7,46"></path>--}}
                                          {{--<path d="M78.6,46h16.7c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H78.6c-1.3,0-2.4,1.1-2.4,2.4                            C76.2,44.9,77.3,46,78.6,46"></path>--}}
                                          {{--<path d="M78.6,46h16.7c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H78.6c-1.3,0-2.4,1.1-2.4,2.4                            C76.2,44.9,77.3,46,78.6,46"></path>--}}
                                          {{--<path d="M81,43.6v-7.1c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v7.1c0,1.3,1.1,2.4,2.4,2.4                            C79.9,46,81,44.9,81,43.6"></path>--}}
                                          {{--<path d="M81,43.6v-7.1c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v7.1c0,1.3,1.1,2.4,2.4,2.4                            C79.9,46,81,44.9,81,43.6"></path>--}}
                                      {{--</g>--}}
                                    {{--</svg></span></span>1200 sq ft--}}
                                            {{--</li>--}}
                                            {{--<li><span class="icon icon-sm icon-darker hotel-icon-10"></span>2 bathrooms</li>--}}
                                        {{--</ul>--}}
                                        {{--<ul class="describe-2">--}}
                                            {{--<li><span class="icon icon-sm icon-darker hotel-icon-05"></span>4 bedrooms</li>--}}
                                            {{--<li><span class="icon icon-sm icon-darker hotel-icon-26"></span>2 garages</li>--}}
                                        {{--</ul>--}}
                                        {{--<p>Front-facing, single level, well-designed floor plan. Secure building in a highly--}}
                                            {{--DESIRABLE location!</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-xs-12 col-sm-6">--}}
                                {{--<div class="thumbnail"><a href="property-catalog-single.html" class="img-link"><img--}}
                                                {{--src="images/index-11.jpg" alt="" width="370" height="250"/><span--}}
                                                {{--class="thumbnail-price">$1,339.00/<span class="mon">month</span></span></a>--}}

                                    {{--<div class="caption">--}}
                                        {{--<h4><a href="property-catalog-single.html">1735 N Fuller Ave #124</a></h4>--}}
                                        {{--<ul class="describe-1">--}}
                                            {{--<li><span class="icon-square"><span class="icon-square">--}}
                                    {{--<svg x="0px" y="0px" viewbox="0 0 100 100" style="enable-background:new 0 0 100 100;"--}}
                                         {{--xml:space="preserve">--}}
                                      {{--<g>--}}
                                          {{--<path d="M3.6,75.7h3.6V7.3l85.7-0.1v85.3l-16.7-0.1l0-16.7c0-0.9-0.4-1.9-1-2.5c-0.7-0.7-1.6-1-2.5-1h-69V75.7h3.6                            H3.6v3.6H69L69,96c0,2,1.6,3.6,3.6,3.6l23.8,0.1c1,0,1.9-0.4,2.5-1c0.7-0.7,1-1.6,1-2.5V3.6c0-1-0.4-1.9-1-2.5                            c-0.7-0.7-1.6-1-2.5-1L3.6,0.1C1.6,0.2,0,1.7,0,3.7v72c0,0.9,0.4,1.9,1,2.5c0.7,0.7,1.6,1,2.5,1V75.7z"></path>--}}
                                          {{--<path d="M38.1,76.9v-9.5c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v9.5c0,1.3,1.1,2.4,2.4,2.4                            C37,79.3,38.1,78.2,38.1,76.9"></path>--}}
                                          {{--<path d="M38.1,50.7V15c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v35.7c0,1.3,1.1,2.4,2.4,2.4                            C37,53.1,38.1,52.1,38.1,50.7"></path>--}}
                                          {{--<path d="M2.4,38.8h33.3c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H2.4c-1.3,0-2.4,1.1-2.4,2.4                            C0,37.8,1.1,38.8,2.4,38.8"></path>--}}
                                          {{--<path d="M35.7,46h31c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4h-31c-1.3,0-2.4,1.1-2.4,2.4                            C33.3,44.9,34.4,46,35.7,46"></path>--}}
                                          {{--<path d="M78.6,46h16.7c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H78.6c-1.3,0-2.4,1.1-2.4,2.4                            C76.2,44.9,77.3,46,78.6,46"></path>--}}
                                          {{--<path d="M78.6,46h16.7c1.3,0,2.4-1.1,2.4-2.4c0-1.3-1.1-2.4-2.4-2.4H78.6c-1.3,0-2.4,1.1-2.4,2.4                            C76.2,44.9,77.3,46,78.6,46"></path>--}}
                                          {{--<path d="M81,43.6v-7.1c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v7.1c0,1.3,1.1,2.4,2.4,2.4                            C79.9,46,81,44.9,81,43.6"></path>--}}
                                          {{--<path d="M81,43.6v-7.1c0-1.3-1.1-2.4-2.4-2.4c-1.3,0-2.4,1.1-2.4,2.4v7.1c0,1.3,1.1,2.4,2.4,2.4                            C79.9,46,81,44.9,81,43.6"></path>--}}
                                      {{--</g>--}}
                                    {{--</svg></span></span>1200 sq ft--}}
                                            {{--</li>--}}
                                            {{--<li><span class="icon icon-sm icon-darker hotel-icon-10"></span>2 bathrooms</li>--}}
                                        {{--</ul>--}}
                                        {{--<ul class="describe-2">--}}
                                            {{--<li><span class="icon icon-sm icon-darker hotel-icon-05"></span>4 bedrooms</li>--}}
                                            {{--<li><span class="icon icon-sm icon-darker hotel-icon-26"></span>2 garages</li>--}}
                                        {{--</ul>--}}
                                        {{--<p>This charming 2 bed and 2 bath townhome has been beautifully renovated and ready--}}
                                            {{--for its next owners.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="col-xs-12 text-center text-sm-left">
                                <ul class="pagination">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-lg-4 offset-4">
                        <!-- RD Google Map-->
                        <div class="rd-google-map">
                            <div id="google-map" data-zoom="14" data-x="-73.9874068" data-y="40.643180"
                                 class="rd-google-map__model"></div>
                            <ul class="rd-google-map__locations">
                                <li data-x="-73.9874068" data-y="40.643180">
                                    <p>9870 St Vincent Place, Glasgow, DC 45 Fr 45.<span>800 2345-6789</span></p>
                                </li>
                                <li data-x="-73.990172" data-y="40.644285">
                                    <p>9870 St Vincent Place, Glasgow, DC 45 Fr 45.<span>800 2345-6789</span></p>
                                </li>
                                <li data-x="-73.980172" data-y="40.646285">
                                    <p>9870 St Vincent Place, Glasgow, DC 45 Fr 45.<span>800 2345-6789</span></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
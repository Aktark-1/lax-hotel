@include('include/header')

   <!-- main area start here  -->
   <main>
      <!-- breadcrumb area start here  -->
      <section class="bd-breadcrumb-area p-relative">
         <div class="bd-breadcrumb__wrapper">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-xl-10">
                     <div class="bd-breadcrumb d-flex align-items-center justify-content-center">
                        <div class="bd-breadcrumb__thumb">
                           <img src="assets/img/breadcrumb/breadcrumb-bg.png" alt="breadcrumb img">
                        </div>
                        <div class="bd-breadcrumb__content text-center">
                           <h1 class="bd-breadcrumb__title mb-20">Booking form</h1>
                           <div class="bd-breadcrumb__list">
                              <span><a href="index.html">home</a></span>
                              <span>Booking form</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb area end here  -->

      <!-- booking form area starts here -->
      <section class="bd-booking-area x-clip pb-85 mpb-15">
         <div class="container">
            <div class="row">
               <div class="col-lg-8">
                  <div class="bd-booking-4 mb-65">
                     <form action="#">
                        <div class="bd-booking-4__form">
                           <div class="bd-booking-4__input mb-15">
                              <input type="text" placeholder="First Name">
                           </div>
                           <div class="bd-booking-4__input mb-15">
                              <input type="text" placeholder="Last Name">
                           </div>
                           <div class="bd-booking-4__input mb-15">
                              <input type="email" placeholder="Email Address">
                           </div>
                           <div class="bd-booking-4__input mb-15">
                              <input type="email" placeholder="Phone Number">
                           </div>
                           <div class="bd-booking-4__input p-relative mb-15">
                              <select class="bd-nice-select">
                                 <option value="">Adult</option>
                                 <option value="">1 Adult</option>
                                 <option value="">2 Adult</option>
                                 <option value="">3 Adult</option>
                                 <option value="">4 Adult</option>
                                 <option value="">5 Adult</option>
                              </select>
                           </div>
                           <div class="bd-booking-4__input p-relative mb-15">
                              <select class="bd-nice-select">
                                 <option value="">Children</option>
                                 <option value="">1 Children</option>
                                 <option value="">2 Children</option>
                                 <option value="">3 Children</option>
                                 <option value="">4 Children</option>
                                 <option value="">5 Children</option>
                              </select>
                           </div>
                           <div class="bd-booking-4__input p-relative mb-15">
                              <select class="bd-nice-select">
                                 <option value="">1 Room</option>
                                 <option value="">2 Room</option>
                                 <option value="">3 Room</option>
                                 <option value="">4 Room</option>
                                 <option value="">5 Room</option>
                              </select>
                           </div>
                           <div class="bd-booking-4__input p-relative mb-15">
                              <select class="bd-nice-select">
                                 <option value="">Room Type</option>
                                 <option value="">Luxury Room</option>
                                 <option value="">Family Room</option>
                                 <option value="">Deluxe Room</option>
                                 <option value="">Double Room</option>
                              </select>
                           </div>
                           <div class="bd-booking-4__input mb-15">
                              <input type="text" class="bd-date-picker" placeholder="Check In">
                           </div>
                           <div class="bd-booking-4__input mb-15">
                              <input type="text" class="bd-date-picker bd-booking__input-date" placeholder="Check Out">
                           </div>
                           <div class="bd-booking-4__input message mb-30">
                              <textarea name="message" placeholder="Special Requirements"></textarea>
                           </div>
                           <div class="glo-booking-btn">
                              <button class="bd-btn dark-btn" type="submit">
                                 book now <span><i class="fa-regular fa-arrow-right-long"></i></span>
                              </button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="bd-booking-sidebar-wrap fix mb-35">
                     <div class="bd-booking-sidebar mb-45">
                        <div class="bd-booking-sidebar__content">
                           <h3 class="bd-booking-sidebar__title">Booking Details</h3>
                           <p>
                              A Luxury Hotel is considered a hotel that provides a luxurious accommodation
                              experience
                              to
                              the
                              guest. There are no set with standards (such as stars) for luxury hotels.
                           </p>
                        </div>
                     </div>
                     <div class="bd-booking-sidebar mb-30">
                        <div class="bd-booking-sidebar__content">
                           <h3 class="bd-booking-sidebar__title">Need Any Help</h3>
                           <p>
                              If you need any help to book your room. Our support team is ready for you 24/7 days.
                           </p>
                           <div class="bd-booking-sidebar__contact">
                              <span><i class="fa-solid fa-phone"></i> Call Us:</span>
                              <a href="tel:99411123456"> 994 1112 3456</a>
                           </div>
                        </div>
                     </div>
                     <div class="bd-booking-sidebar mb-30">
                        <div class="bd-booking-sidebar__content">
                           <h3 class="bd-booking-sidebar__title">Visit Free Tour</h3>
                           <p>
                              We are here for you, visit us for free. We have the best hotel in town. Royel hotel
                              is
                              not only a hotel it's a kingdom.
                           </p>
                           <div class="bd-booking-side-btn mt-20">
                              <a href="contact.html" class="bd-btn dark-btn">
                                 Contact us<span><i class="fa-regular fa-arrow-right-long"></i></span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- booking form area ends here -->

      <!-- room view area start  -->
      <div class="bd-roomview-area-2 p-relative">
         <div class="swiper-container bd-roomview-active">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <div class="bd-roomview__slider-wrap p-relative">
                     <div class="bd-roomview__bg-2" data-background="assets/img/room/room-view-1.jpg"></div>
                     <div class="container">
                        <div class="row">
                           <div class="col-12">
                              <div class="bd-roomview__content-2">
                                 <div class="bd-roomview__price-wrap d-flex justify-content-center">
                                    <div class="bd-roomview__price mt-65">
                                       <p><span>$399</span>/<br>Night</p>
                                    </div>
                                 </div>
                                 <div class="bd-roomview__slider-number d-inline-flex p-absolute">
                                    <span class="current">1</span>
                                    <span class="divider">/</span>
                                    <span class="total">6</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="bd-roomview__slider-wrap p-relative">
                     <div class="bd-roomview__bg-2" data-background="assets/img/room/room-view-2.jpg"></div>
                     <div class="container">
                        <div class="row">
                           <div class="col-12">
                              <div class="bd-roomview__content-2">
                                 <div class="bd-roomview__price-wrap d-flex justify-content-center">
                                    <div class="bd-roomview__price mt-65">
                                       <p><span>$185</span>/<br>Night</p>
                                    </div>
                                 </div>
                                 <div class="bd-roomview__slider-number d-inline-flex p-absolute">
                                    <span class="current">2</span>
                                    <span class="divider">/</span>
                                    <span class="total">6</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="bd-roomview__slider-wrap p-relative">
                     <div class="bd-roomview__bg-2" data-background="assets/img/room/room-view-3.jpg"></div>
                     <div class="container">
                        <div class="row">
                           <div class="col-12">
                              <div class="bd-roomview__content-2">
                                 <div class="bd-roomview__price-wrap d-flex justify-content-center">
                                    <div class="bd-roomview__price mt-65">
                                       <p><span>$259</span>/<br>Night</p>
                                    </div>
                                 </div>
                                 <div class="bd-roomview__slider-number d-inline-flex p-absolute">
                                    <span class="current">3</span>
                                    <span class="divider">/</span>
                                    <span class="total">6</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="bd-roomview__slider-wrap p-relative">
                     <div class="bd-roomview__bg-2" data-background="assets/img/room/room-view-4.jpg"></div>
                     <div class="container">
                        <div class="row">
                           <div class="col-12">
                              <div class="bd-roomview__content-2">
                                 <div class="bd-roomview__price-wrap d-flex justify-content-center">
                                    <div class="bd-roomview__price mt-65">
                                       <p><span>$339</span>/<br>Night</p>
                                    </div>
                                 </div>
                                 <div class="bd-roomview__slider-number d-inline-flex p-absolute">
                                    <span class="current">4</span>
                                    <span class="divider">/</span>
                                    <span class="total">6</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="bd-roomview__slider-wrap p-relative">
                     <div class="bd-roomview__bg-2" data-background="assets/img/room/room-view-5.jpg"></div>
                     <div class="container">
                        <div class="row">
                           <div class="col-12">
                              <div class="bd-roomview__content-2">
                                 <div class="bd-roomview__price-wrap d-flex justify-content-center">
                                    <div class="bd-roomview__price mt-65">
                                       <p><span>$357</span>/<br>Night</p>
                                    </div>
                                 </div>
                                 <div class="bd-roomview__slider-number d-inline-flex p-absolute">
                                    <span class="current">5</span>
                                    <span class="divider">/</span>
                                    <span class="total">6</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="bd-roomview__slider-wrap p-relative">
                     <div class="bd-roomview__bg-2" data-background="assets/img/room/room-view-6.jpg"></div>
                     <div class="container">
                        <div class="row">
                           <div class="col-12">
                              <div class="bd-roomview__content-2">
                                 <div class="bd-roomview__price-wrap d-flex justify-content-center">
                                    <div class="bd-roomview__price mt-65">
                                       <p><span>$385</span>/<br>Night</p>
                                    </div>
                                 </div>
                                 <div class="bd-roomview__slider-number d-inline-flex p-absolute">
                                    <span class="current">6</span>
                                    <span class="divider">/</span>
                                    <span class="total">6</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="bd-roomview__pagination-wrap">
                     <div class="bd-roomview__pagination"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="bd-roomview__line">
            <span class="bd-roomview__line-1"></span>
            <span class="bd-roomview__line-2"></span>
         </div>
         <div class="bd-swiper-navigation">
            <button class="bd-roomview-prev">
               <i class="fa-regular fa-arrow-left"></i>
            </button>
            <button class="bd-roomview-next">
               <i class="fa-regular fa-arrow-right"></i>
            </button>
         </div>
      </div>
      <!-- room view area end  -->
      <!-- feature area start here  -->
      <div class="bd-feature theme-bg-2 p-relative pb-90">
         <div class="container">
            <div class="bd-feature__list pt-145">
               <div class="row">
                  <div class="col-12">
                     <div class="bd-feature__list-content">
                        <div class="bd-feature__list-item ryl-up-down-anim mb-40">
                           <i class="flaticon-taxi"></i>
                           <p>Pick Up & Drop</p>
                        </div>
                        <div class="bd-feature__list-item ryl-up-down-anim mb-40">
                           <i class="flaticon-garage"></i>
                           <p>Parking Space</p>
                        </div>
                        <div class="bd-feature__list-item ryl-up-down-anim mb-40">
                           <i class="flaticon-breakfast"></i>
                           <p>Breakfast</p>
                        </div>
                        <div class="bd-feature__list-item ryl-up-down-anim mb-40">
                           <i class="flaticon-swimming-pool"></i>
                           <p>Swimming Pool</p>
                        </div>
                        <div class="bd-feature__list-item ryl-up-down-anim mb-40">
                           <i class="flaticon-wifi-router"></i>
                           <p>Fibre Internet</p>
                        </div>
                        <div class="bd-feature__list-item ryl-up-down-anim mb-40">
                           <i class="flaticon-bar-counter"></i>
                           <p>bar & bbq</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- feature area end here  -->
   </main>
   <!-- main area end here  -->
   @include('include/footer')
  
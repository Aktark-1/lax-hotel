@include('include/header')

   <!-- main area start here  -->
   <main>
      <!-- error page area start here  -->
      <section class="bd-error-area pt-120 pb-75 fix">
         <div class="container">
            <div class="row align-items-center justify-content-between">
               <div class="col-lg-5">
                  <div class="bd-error-area-wrap mb-50">
                     <div class="bd-section__title-wrapper mb-45">
                        <p class="bd-section__subtitle mb-20">Error 404</p>
                        <h2 class="bd-section__title mb-20">Oops! It’s Look Like you are Lost</h2>
                        <p>We're sorry, the page you requested could not be found. It's possible that the page has
                           been moved, renamed, or deleted.</p>
                     </div>
                     <div class="bd-error-btn">
                        <a href="index.html" class="bd-btn dark-btn">
                           back to home <span><i class="fa-regular fa-arrow-right-long"></i></span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="bd-error-thumb-wrapper mb-50">
                     <div class="bd-error-thumb">
                        <img src="assets/img/shape/404.svg" alt="img not found!">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- error page area end here  -->
   </main>
   <!-- main area end here  -->
   @include('include/footer')
 
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/global/functions.php'); ?>
<!DOCTYPE html>
<html lang="en-us">
  <head>
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/global/includes.php'); ?>
    <title>Xinkaishi Official Website</title>
    <script type="text/template" id="qq-template-gallery">
      <div class="qq-uploader-selector qq-uploader qq-gallery" qq-drop-area-text="Drop files here">
          <div class="qq-total-progress-bar-container-selector qq-total-progress-bar-container">
              <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-total-progress-bar-selector qq-progress-bar qq-total-progress-bar"></div>
          </div>
          <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone>
              <span class="qq-upload-drop-area-text-selector"></span>
          </div>
          <div class="qq-upload-button-selector qq-upload-button">
              <div>Upload a file</div>
          </div>
          <span class="qq-drop-processing-selector qq-drop-processing">
              <span>Processing dropped files...</span>
              <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
          </span>
          <ul class="qq-upload-list-selector qq-upload-list" role="region" aria-live="polite" aria-relevant="additions removals">
              <li>
                  <span role="status" class="qq-upload-status-text-selector qq-upload-status-text"></span>
                  <div class="qq-progress-bar-container-selector qq-progress-bar-container">
                      <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-progress-bar-selector qq-progress-bar"></div>
                  </div>
                  <span class="qq-upload-spinner-selector qq-upload-spinner"></span>
                  <div class="qq-thumbnail-wrapper">
                      <img class="qq-thumbnail-selector" qq-max-size="120" qq-server-scale>
                  </div>
                  <button type="button" class="qq-upload-cancel-selector qq-upload-cancel">X</button>
                  <button type="button" class="qq-upload-retry-selector qq-upload-retry">
                      <span class="qq-btn qq-retry-icon" aria-label="Retry"></span>
                      Retry
                  </button>

                  <div class="qq-file-info">
                      <div class="qq-file-name">
                          <span class="qq-upload-file-selector qq-upload-file"></span>
                          <span class="qq-edit-filename-icon-selector qq-edit-filename-icon" aria-label="Edit filename"></span>
                      </div>
                      <input class="qq-edit-filename-selector qq-edit-filename" tabindex="0" type="text">
                      <span class="qq-upload-size-selector qq-upload-size"></span>
                      <button type="button" class="qq-btn qq-upload-delete-selector qq-upload-delete">
                          <span class="qq-btn qq-delete-icon" aria-label="Delete"></span>
                      </button>
                      <button type="button" class="qq-btn qq-upload-pause-selector qq-upload-pause">
                          <span class="qq-btn qq-pause-icon" aria-label="Pause"></span>
                      </button>
                      <button type="button" class="qq-btn qq-upload-continue-selector qq-upload-continue">
                          <span class="qq-btn qq-continue-icon" aria-label="Continue"></span>
                      </button>
                  </div>
              </li>
          </ul>

          <dialog class="qq-alert-dialog-selector">
              <div class="qq-dialog-message-selector"></div>
              <div class="qq-dialog-buttons">
                  <button type="button" class="qq-cancel-button-selector">Close</button>
              </div>
          </dialog>

          <dialog class="qq-confirm-dialog-selector">
              <div class="qq-dialog-message-selector"></div>
              <div class="qq-dialog-buttons">
                  <button type="button" class="qq-cancel-button-selector">No</button>
                  <button type="button" class="qq-ok-button-selector">Yes</button>
              </div>
          </dialog>

          <dialog class="qq-prompt-dialog-selector">
              <div class="qq-dialog-message-selector"></div>
              <input type="text">
              <div class="qq-dialog-buttons">
                  <button type="button" class="qq-cancel-button-selector">Cancel</button>
                  <button type="button" class="qq-ok-button-selector">Ok</button>
              </div>
          </dialog>
      </div>
  </script>
  </head>

  <body class="en-us en">

    <nav id="navigation" class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Xinkaishi</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#app">App</a></li>
            <li><a href="/faq.php">FAQ</a></li>
            <li><a href="/about.php">About Us</a></li>
            <li><a href="/#beta-form" class="nav-buy">Beta Registration</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
      <div class="navigation-bg"></div>
    </nav>

    <section class="jumbotron" id="intro" data-type="background" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo curPageURL(); ?>/assets/images/bg-hero.jpg" data-speed="1">
      <video autoplay  poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" loop>
        <source src="//demosthenes.info/assets/videos/polina.webm" type="video/webm">
        <source src="//demosthenes.info/assets/videos/polina.mp4" type="video/mp4">
      </video>
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h1>Your trusted companion for pregnancy and beyond</h1>
            <p>A smarter, healthier way to connect with your baby </p>
            <p><a class="download-ios" href="https://itunes.apple.com/us/app/xinkaishi/id1056313641">Download from the App Store</a><a class="download-android" href="#">Download Android version</a></p>
          </div>
        </div>        
      </div>
    </section>

    <section id="section-device" class="parallax-window">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 device-features">
            <h2>The most trusted companion for bonding with your baby throughout pregnancy.</h2>
            <div class="col-xs-12 col-md-4 col-md-push-4 device-image"><img src="<?php echo curPageURL(); ?>/assets/images/device-image-1.jpg" alt="Xinkaishi Device" /></div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-md-pull-4">
              <span class="device-point device-point-1 clearfix"><span class="device-icon hidden-md hidden-lg">Battery life</span><span class="device-text"><p>50 hours of continuous use</p></span><span class="device-icon hidden-xs hidden-sm">Battery life</span></span>
              <span class="device-point device-point-2 clearfix"><span class="device-icon hidden-md hidden-lg">Convenience</span><span class="device-text"><p>No gel or wires</p></span><span class="device-icon hidden-xs hidden-sm">Convenience</span></span>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <span class="device-point device-point-3 clearfix"><span class="device-icon">Science</span><span class="device-text"><p>Optimized based on science</p></span></span>
              <span class="device-point device-point-4 clearfix"><span class="device-icon">Safety</span><span class="device-text"><p>Zero radiation, completely safe</p></span></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <a name="app"></a>
    <section id="section-appfeatures">
      <div class="container">
        <div class="row">
          <div class="hidden-xs col-sm-4 app-phone">
            <img src="<?php echo curPageURL(); ?>/assets/images/phone-mock.png" class="app-phone-image" />
            <div id="app-slideshow" class="app-phone-overlay cycle-slideshow"
              data-cycle-slides="> div"
              data-cycle-timeout="0"
              data-cycle-prev=".cycle-prev"
              data-cycle-fx="scrollHorz"
              data-cycle-next=".cycle-next"
              data-cycle-caption=".custom-caption"
              data-cycle-swipe="true"
              data-cycle-swipe-fx="scrollHorz">
              <div><img src="<?php echo curPageURL(); ?>/assets/images/app-ss-heartbeat.jpg" /></div>
              <div><img src="<?php echo curPageURL(); ?>/assets/images/app-ss-dashboard.jpg" /></div>
              <div><img src="<?php echo curPageURL(); ?>/assets/images/app-ss-nutrition.jpg" /></div>
              <div><img src="<?php echo curPageURL(); ?>/assets/images/app-ss-community.jpg" /></div>
              <div><img src="<?php echo curPageURL(); ?>/assets/images/app-ss-journal.jpg" /></div>
              <div><img src="<?php echo curPageURL(); ?>/assets/images/app-ss-kicktracker.jpg" /></div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-8 app-navigation">
            <div id="app-slideshow-pager" class="app-slideshow-pager cycle-slideshow"
              data-cycle-slides="> div > span"
              data-cycle-fx="carousel"
              data-cycle-timeout="0"
              data-cycle-carousel-visible="6"
              data-cycle-carousel-fluid="true"
              data-allow-wrap="false"
              data-cycle-swipe="true"
              data-cycle-swipe-fx="scrollHorz">
              <div class="app-slideshow-pager-item"><span><a href="#" class="nav-app-pager-6"><img src="<?php echo curPageURL(); ?>/assets/images/app-pager-6.png" alt="Heartbeat" /></a></span></div>
              <div class="app-slideshow-pager-item"><span><a href="#" class="nav-app-pager-1"><img src="<?php echo curPageURL(); ?>/assets/images/app-pager-1.png" alt="Dashboard" /></a></span></div>
              <div class="app-slideshow-pager-item"><span><a href="#" class="nav-app-pager-2"><img src="<?php echo curPageURL(); ?>/assets/images/app-pager-2.png" alt="Nutrition" /></a></span></div>
              <div class="app-slideshow-pager-item"><span><a href="#" class="nav-app-pager-3"><img src="<?php echo curPageURL(); ?>/assets/images/app-pager-3.png" alt="Community" /></a></span></div>
              <div class="app-slideshow-pager-item"><span><a href="#" class="nav-app-pager-5"><img src="<?php echo curPageURL(); ?>/assets/images/app-pager-5.png" alt="Memory Album" /></a></span></div>
              <div class="app-slideshow-pager-item"><span><a href="#" class="nav-app-pager-4"><img src="<?php echo curPageURL(); ?>/assets/images/app-pager-4.png" alt="Kick Tracker" /></a></span></div>
            </div>
            <div id="app-slideshow-description" class="app-slideshow-description cycle-slideshow clearfix"
              data-cycle-slides="> div"
              data-cycle-timeout="0"
              data-cycle-fx="scrollHorz"
              data-cycle-auto-height="calc"
              data-cycle-swipe="true"
              data-cycle-swipe-fx="scrollHorz">
              <div>
                <h2>Heartbeat</h2>
                <p>Record your baby's heartbeat...and keep it forever.</p>
                <ul class="graphic">
                  <li><a href="<?php echo curPageURL(); ?>/assets/audio/heartbeat.mp3">Have a listen</a></li>
                </ul>
                <div id="sm2-container"></div>
              </div>
              <div>
                <h2>Dashboard</h2>
                <p>Know exactly what your baby is developing today and how that is affecting your body.</p>
              </div>
              <div>
                <h2>Nutrition</h2>
                <p>Focus on essential nutrients that promote healthy growth and development of your baby.</p>
              </div>
              <div>
                <h2>Community</h2>
                <p>Participate in a vibrant community of moms and moms-to-be about topics that women care about most.</p>
              </div>
              <div>
                <h2>Memory Album</h2>
                <p>Safely share your most special moments with close friends and family</p>
              </div>
              <div>
                <h2>Kick Tracker</h2>
                <p>Build a stronger emotional bond by recording your baby's kicks.</p>
              </div>
            </div>
            <div class="app-slideshow-nextprev">
              <a href="#" class="cycle-prev"><img src="<?php echo curPageURL(); ?>/assets/images/app-slideshow-prev.png" alt="上" /></a> <a href="#" class="cycle-next"><img src="<?php echo curPageURL(); ?>/assets/images/app-slideshow-next.png" alt="下" /></a>
            </div>
         </div>
        </div>
      </div>
    </section>

    <section id="section-story" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo curPageURL(); ?>/assets/images/bg-story.jpg" data-speed="0.8">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h2>Leave a priceless gift for your child</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 story-area">
            <img src="assets/images/story-icon-1.jpg" class="story-image-1 retinaimg" />
            <p>Visual stories with gorgeous photos.</p>
          </div>
          <div class="col-sm-4 story-area">
            <img src="assets/images/story-icon-2.jpg" class="story-image-2 retinaimg" />
            <p>Messages and excitement from family.</p>
          </div>
          <div class="col-sm-4 story-area">
            <img src="assets/images/story-icon-3.jpg" class="story-image-3 retinaimg" />
            <p>Videos that capture the most precious moments.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="section-testimonial">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h2>Developed by experts. Personalized for families.</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 testimonial-area">
            <img src="assets/images/testimonial-icon-1.png" class="testimonial-image-1 retinaimg" />
            <p>"I love seeing the heart beat.  It lets me know my baby is really strong."  Lindsay, 24 weeks</p>
          </div>
          <div class="col-sm-4 testimonial-area">
            <img src="assets/images/testimonial-icon-2.png" class="testimonial-image-2 retinaimg" />
            <p>"No app has this much nutrition for pregnant moms."  Emily, 12 weeks</p>
          </div>
          <div class="col-sm-4 testimonial-area">
            <img src="assets/images/testimonial-icon-3.png" class="testimonial-image-3 retinaimg" />
            <p>"I cannot wait to share the memory album with my daughter when she grows up." Bill & Anne, 10 weeks</p>
          </div>
        </div>
      </div>
    </section>

    <section id="section-compare" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo curPageURL(); ?>/assets/images/bg-compare.jpeg" data-speed="0.5">
      <h2>Why Xinkaishi?</h2>
      <div class="container">
        <div class="row compare-content">
          <div class="container">
            <div class="col-xs-8"><h3>Safely listen to baby's heartbeat outside the hospital</h3></div>
            <div class="col-xs-4"><span class="check">✓</span></div>
          </div>
          <div class="container">
            <div class="col-xs-8"><h3>Accurately calculates baby's heart rate</h3></div>
            <div class="col-xs-4"><span class="check">✓</span></div>
          </div>
          <div class="container">
            <div class="col-xs-8"><h3>Share with friends, family, and social networks</h3></div>
            <div class="col-xs-4"><span class="check">✓</span></div>
          </div>
          <div class="container">
            <div class="col-xs-8"><h3>Rechargeable battery, no wires, no gel</h3></div>
            <div class="col-xs-4"><span class="check">✓</span></div>
          </div>
          <div class="container">
            <div class="col-xs-8"><h3>Daily education for pregnancy and child development</h3></div>
            <div class="col-xs-4"><span class="check">✓</span></div>
          </div>
          <div class="container">
            <div class="col-xs-8"><h3>Vibrant community for expecting mothers</h3></div>
            <div class="col-xs-4"><span class="check">✓</span></div>
          </div>
          <div class="container">
            <div class="col-xs-8"><h3>Interactive journal to track unforgettable moments</h3></div>
            <div class="col-xs-4"><span class="check">✓</span></div>
          </div>
          <div class="container">
            <div class="col-xs-8"><h3>Health nutrition tips for you and your baby</h3></div>
            <div class="col-xs-4"><span class="check">✓</span></div>
          </div>
          <div class="container">
            <div class="col-xs-8"><h3>Log to record and store baby kicks for your doctor</h3></div>
            <div class="col-xs-4"><span class="check">✓</span></div>
          </div>
          <div class="container">
            <div class="col-xs-8"><h3>iPhone, Android, and Xiaomi apps</h3></div>
            <div class="col-xs-4"><span class="check">✓</span></div>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <div class="container">
        <div class="row">
          <p class="copyright">2015 Kaishi Pte. Lte. &middot; <a href="/terms.html" class="footer-terms" data-featherlight="terms.html .all" data-featherlight-type="ajax">Terms of Use</a> &middot; <a href="/privacy.html" class="footer-privacy" data-featherlight="privacy.html .all" data-featherlight-type="ajax">Privacy Policy</a></p>
        </div>
      </div>
    </footer>
  </body>
</html>

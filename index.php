<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/global/functions.php'); ?>
<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/global/includes.php'); ?>
    <title>心开始－官方网站</title>
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

  <body class="zh-cn zh">

    <nav id="navigation" class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">心开始</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#app">APP</a></li>
            <li><a href="/faq.php">常见问题</a></li>
            <li><a href="/about.php">关于心开始</a></li>
            <li><a href="/#beta-form" class="nav-buy">申请Beta</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
      <div class="navigation-bg"></div>
    </nav>

    <section class="jumbotron" id="intro" data-type="background" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo curPageURL(); ?>/assets/images/bg-hero.jpg" data-speed="1">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 hero-image col-sm-push-6">
            <img src="assets/images/hero-package.png" alt="Xinkaishi device" />
          </div>
          <div class="col-xs-12 col-sm-6 col-sm-pull-6">
            <h1>用心•孕新</h1>
            <p>心开始是一个更智能和更全面的平台让孕妈妈体验怀孕的所有需要</p>
            <p><a class="download-ios" href="https://itunes.apple.com/us/app/xinkaishi/id1056313641">iOS版下载</a><a class="download-android" href="#">安卓版下载</a></p>
          </div>
        </div>        
      </div>
    </section>

    <section id="section-device" class="parallax-window">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 device-features">
            <h2>新妈妈最可靠的伴侣</h2>
            <div class="col-xs-12 col-md-4 col-md-push-4 device-image"><img src="<?php echo curPageURL(); ?>/assets/images/device-image-1.jpg" alt="Xinkaishi Device" /></div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-md-pull-4">
              <span class="device-point device-point-1 clearfix"><span class="device-icon hidden-md hidden-lg">操作时间</span><span class="device-text"><p>50小时不停运转</p></span><span class="device-icon hidden-xs hidden-sm">操作时间</span></span>
              <span class="device-point device-point-2 clearfix"><span class="device-icon hidden-md hidden-lg">便利</span><span class="device-text"><p>不需要耦合剂或接线</p></span><span class="device-icon hidden-xs hidden-sm">便利</span></span>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <span class="device-point device-point-3 clearfix"><span class="device-icon">科学</span><span class="device-text"><p>以科学为基础</p></span></span>
              <span class="device-point device-point-4 clearfix"><span class="device-icon">安全</span><span class="device-text"><p>无辐射，安全靠谱</p></span></span>
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
              <div class="app-slideshow-pager-item"><span><a href="#" class="nav-app-pager-6"><img src="<?php echo curPageURL(); ?>/assets/images/app-pager-6.png" alt="宝宝心跳" /></a></span></div>
              <div class="app-slideshow-pager-item"><span><a href="#" class="nav-app-pager-1"><img src="<?php echo curPageURL(); ?>/assets/images/app-pager-1.png" alt="每天" /></a></span></div>
              <div class="app-slideshow-pager-item"><span><a href="#" class="nav-app-pager-2"><img src="<?php echo curPageURL(); ?>/assets/images/app-pager-2.png" alt="营养健康" /></a></span></div>
              <div class="app-slideshow-pager-item"><span><a href="#" class="nav-app-pager-3"><img src="<?php echo curPageURL(); ?>/assets/images/app-pager-3.png" alt="社区圈子" /></a></span></div>
              <div class="app-slideshow-pager-item"><span><a href="#" class="nav-app-pager-5"><img src="<?php echo curPageURL(); ?>/assets/images/app-pager-5.png" alt="孕期日记" /></a></span></div>
              <div class="app-slideshow-pager-item"><span><a href="#" class="nav-app-pager-4"><img src="<?php echo curPageURL(); ?>/assets/images/app-pager-4.png" alt="胎动" /></a></span></div>
            </div>
            <div id="app-slideshow-description" class="app-slideshow-description cycle-slideshow clearfix"
              data-cycle-slides="> div"
              data-cycle-timeout="0"
              data-cycle-fx="scrollHorz"
              data-cycle-auto-height="calc"
              data-cycle-swipe="true"
              data-cycle-swipe-fx="scrollHorz">
              <div>
                <h2>监测宝宝心跳</h2>
                <p>不受其他身体的声音地影响下听到胎儿的心跳和看到宝宝的BPM<br />心开始让妳听到宝宝真实的心跳声。就像听到宝宝告诉妳："别担心妈妈,我一切都好,我爱妳。"</p>
                <ul class="graphic">
                  <li><a href="<?php echo curPageURL(); ?>/assets/audio/heartbeat.mp3">听一下</a></li>
                </ul>
                <div id="sm2-container"></div>
              </div>
              <div>
                <h2>仪表板</h2>
                <p>为孕期的不同阶段提供个人化建议<br />一个包含超过5000多个有关怀孕的数据元素的应用程序<br />超过100多种独特的触动记录去捕捉宝宝与妈妈之间的情感联系</p>
              </div>
              <div>
                <h2>营养学</h2>
                <p>1000个母婴健康优化食谱<br />市场上关于营养学方面最健全有序的搜索功能</p>
              </div>
              <div>
                <h2>总有趣事在附近</h2>
                <p>按不同兴趣分类的社区可让妈妈更方便的与其他准妈妈分享、交流及互相学习<br />可依照准妈妈的生日月份和地区将帖子分类</p>
              </div>
              <div>
                <h2>你的孕期日记</h2>
                <p>将9个月的怀孕过程整理成一本难忘的电子故事书<br />捕捉所有孕期记忆和早期育儿经历，并可安全的与朋友、家庭及社交网络分享</p>
              </div>
              <div>
                <h2>简单数胎动法</h2>
                <p>从20周起，始终如一的数胎动保婴儿健，心开始也会替你自动做记录。</p>
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
            <h2>给宝宝留个无价的礼物</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 story-area">
            <img src="assets/images/story-icon-1.jpg" class="story-image-1 retinaimg" />
            <p>视觉故事，华丽照片</p>
          </div>
          <div class="col-sm-4 story-area">
            <img src="assets/images/story-icon-2.jpg" class="story-image-2 retinaimg" />
            <p>叫上亲友一起跟踪你的孕期时光</p>
          </div>
          <div class="col-sm-4 story-area">
            <img src="assets/images/story-icon-3.jpg" class="story-image-3 retinaimg" />
            <p>保留孕期时最动人的视频</p>
          </div>
        </div>
      </div>
    </section>

    <section id="section-testimonial">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h2>专家开发，家庭个性</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 testimonial-area">
            <img src="assets/images/testimonial-icon-1.png" class="testimonial-image-1 retinaimg" />
            <p>“我最爱听宝宝的心跳，心开始让我知道宝宝现在好坚强” 林赛，孕24周</p>
          </div>
          <div class="col-sm-4 testimonial-area">
            <img src="assets/images/testimonial-icon-2.png" class="testimonial-image-2 retinaimg" />
            <p>“没有任何APP比心开始的营养食谱内容多。” 艾米莉，孕12周</p>
          </div>
          <div class="col-sm-4 testimonial-area">
            <img src="assets/images/testimonial-icon-3.png" class="testimonial-image-3 retinaimg" />
            <p>“等宝宝长大了，我就能把我当年写的日记留给他。” 安妮，孕10周</p>
          </div>
        </div>
      </div>
    </section>

    <section id="section-compare" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo curPageURL(); ?>/assets/images/bg-compare.jpeg" data-speed="0.5">
      <h2>为何选择心开始？</h2>
      <div class="container">
        <div class="row compare-content">
          <div class="container">
            <div class="col-xs-8"><h3>在医院外安全的聆听宝宝的心跳</h3></div>
            <div class="col-xs-4"><span class="check">✓</span></div>
          </div>
          <div class="container">
            <div class="col-xs-8"><h3>准确的算宝宝的心率</h3></div>
            <div class="col-xs-4"><span class="check">✓</span></div>
          </div>
          <div class="container">
            <div class="col-xs-8"><h3>在社区网络上跟朋友和亲戚分享</h3></div>
            <div class="col-xs-4"><span class="check">✓</span></div>
          </div>
          <div class="container">
            <div class="col-xs-8"><h3>充电电池，无线，无耦合剂</h3></div>
            <div class="col-xs-4"><span class="check">✓</span></div>
          </div>
          <div class="container">
            <div class="col-xs-8"><h3>每天为孕期的不同阶段提供个人化建议</h3></div>
            <div class="col-xs-4"><span class="check">✓</span></div>
          </div>
          <div class="container">
            <div class="col-xs-8"><h3>热热闹闹的新妈妈社区圈</h3></div>
            <div class="col-xs-4"><span class="check">✓</span></div>
          </div>
          <div class="container">
            <div class="col-xs-8"><h3>互动日记体验让妈妈记难忘的时刻</h3></div>
            <div class="col-xs-4"><span class="check">✓</span></div>
          </div>
          <div class="container">
            <div class="col-xs-8"><h3>营养保健小贴士</h3></div>
            <div class="col-xs-4"><span class="check">✓</span></div>
          </div>
          <div class="container">
            <div class="col-xs-8"><h3>能帮助孕妇纪录胎动给医生检查</h3></div>
            <div class="col-xs-4"><span class="check">✓</span></div>
          </div>
          <div class="container">
            <div class="col-xs-8"><h3>iOS和安卓版</h3></div>
            <div class="col-xs-4"><span class="check">✓</span></div>
          </div>
        </div>
      </div>
    </section>

    <a name="beta-form"></a>
    <section id="section-mailinglist" data-type="background" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo curPageURL(); ?>/assets/images/bg-betaform.jpg" data-speed="0.5">
      <div class="container">
        <div class="row mailing-list">
          <div class="col-xs-12">
            <form name="mailing-list" id="mailing-list-form" class="mailing-list-form" method="post" action="">
              <h2>申请心开始Beta测试</h2>
              <div class="mailing-list-text-container">
                <label for="name" class="master-text-label">姓名</label>
                <input type="text" name="name" id="name" class="mailing-list-input master-text" value="" />
              </div>
              <div class="mailing-list-text-container">
                <label for="phone" class="master-text-label">手机号</label>
                <input type="text" name="phone" id="phone" class="mailing-list-input master-text" value="" maxlength="11" />
              </div>
              <div class="mailing-list-text-container">
                <label for="email" class="master-text-label">邮箱</label>
                <input type="text" name="email" id="email" class="mailing-list-input master-text" value="" />
              </div>
              <div class="mailing-list-text-container">
                <label for="duedate" class="master-text-label" id="due-date-label">预产期</label>
                <input type="text" name="duedate" id="duedate" class="mailing-list-input master-text" readonly="true" value="" />
              </div>
              <div class="mailing-list-text-container">
                <select id="country-select">
                  <option name="选择城市">选择城市</option>
                  <option name="北京">北京</option>
                  <option name="上海">上海</option>
                  <option name="广州">广州</option>
                  <option name="深圳">深圳</option>
                  <option name="北海">北海</option>
                  <option name="长春">长春</option>
                  <option name="长沙">长沙</option>
                  <option name="成都">成都</option>
                  <option name="重庆">重庆</option>
                  <option name="大连">大连</option>
                  <option name="福州">福州</option>
                  <option name="贵阳">贵阳</option>
                  <option name="海口">海口</option>
                  <option name="杭州">杭州</option>
                  <option name="哈尔滨">哈尔滨</option>
                  <option name="合肥">合肥</option>
                  <option name="昆明">昆明</option>
                  <option name="兰州">兰州</option>
                  <option name="南京">南京</option>
                  <option name="宁波">宁波</option>
                  <option name="青岛">青岛</option>
                  <option name="三亚">三亚</option>
                  <option name="绍兴">绍兴</option>
                  <option name="沈阳">沈阳</option>
                  <option name="苏州">苏州</option>
                  <option name="太原">太原</option>
                  <option name="天津">天津</option>
                  <option name="乌鲁木齐">乌鲁木齐</option>
                  <option name="温州">温州</option>
                  <option name="武汉">武汉</option>
                  <option name="厦门">厦门</option>
                  <option name="西安">西安</option>
                  <option name="珠海">珠海</option>
                </select>
              </div>
              <div class="mailing-list-text-container">
                <label for="address" class="master-text-label">详细地址</label>
                <input type="text" name="address" id="address" class="mailing-list-input master-text" value="" />
              </div>
              <div class="mailing-list-text-container">
                <label for="postcode" class="master-text-label">邮编</label>
                <input type="text" name="postcode" id="postcode" class="mailing-list-input master-text" value="" maxlength="6" />
              </div>
              <div class="mailing-list-file-container">
                <span>为了证明用户的孕期状态，请上传一张医院检查单。单子上必须显示你的姓名和预产期。心开始非常重视你的隐私，所以我们使用高档加密技术保护你的身份。只能上传JPG,JPEG,GIF,PNG格式。</span>
                <input type="file" class="filestyle" name="proof" id="proof" data-buttonBefore="true" data-buttonText="添加图片" data-placeholder="请添加你的孕期体检报告单" />
              </div>
              <div class="mailing-list-file-container">
                  <span class="checkboxsquare">
                    <input type="checkbox" value="None" id="checkboxsquare" name="check" />
                    <label class="checkboxlabel" for="checkboxsquare"></label>
                    我已阅读并同意<a href="/terms.html" data-featherlight="terms.html .all" data-featherlight-type="ajax">使用条款</a>和<a href="/privacy.html" data-featherlight="privacy.html .all" data-featherlight-type="ajax">隐私政策</a>
                  </span>
                  <label class="error" for="check" generated="true"></label>
              </div>
              <div class="mailing-list-submit-container">
                <input type="submit" value="申请" class="mailing-list-submit" />
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="mailing-list-submission-bg"></div>
    </section>

    <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="social-media clearfix"><a href="#" class="sm-qq">QQ</a><a href="#" class="sm-weibo">微博</a><a href="#" class="sm-wechat">微信</a></div>
          <p class="copyright">2015 Kaishi Pte. Lte. &middot; <a href="/terms.html" class="footer-terms" data-featherlight="terms.html .all" data-featherlight-type="ajax">使用条款</a> &middot; <a href="/privacy.html" class="footer-privacy" data-featherlight="privacy.html .all" data-featherlight-type="ajax">隐私政策</a></p>
        </div>
      </div>
    </footer>
  </body>
</html>

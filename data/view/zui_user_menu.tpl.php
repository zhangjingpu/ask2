<? if(!defined('IN_ASK2')) exit('Access Denied'); ?>
 
   <!--分享-->
                <div class="row">
                    <div class="col-sm-3 font-20">
                        分享
                    </div>
                    <div class="col-sm-9 mar-t-05">
                  <a href="javascript:window.open('http://v.t.sina.com.cn/share/share.php?title='+encodeURIComponent(document.title)+'&url='+encodeURIComponent(location.href)+'&source=bookmark');" title="新浪微博分享">
                    <i class="icon icon-weibo text-danger font-20 mar-r-03 hand"></i></a>
                        <i class="icon icon-weixin text-danger font-20 mar-ly-1 hand"></i>
                    </div>
                </div>
 <div class="operation-list operationList mar-t-2">


                  <a class="btn-block" href="<?=SITE_URL?>?user/score.html">
                      <i class="icon icon-heart text-danger">我的主页</i>
                  </a>
                    <a class="btn-block" href="<?=SITE_URL?>?user/recharge.html">
                        <i class="icon icon-dollar text-danger">我要充值</i>
                    </a>
                      <a class="btn-block" href="<?=SITE_URL?>?user/userbank.html">
                        <i class="icon icon-gift text-danger">我的银行</i>
                    </a>
                    <a class="btn-block" href="<?=SITE_URL?>?user/profile.html">
                        <i class="icon icon-user text-danger">个人信息</i>
                    </a>
                  <a class="btn-block" href="<?=SITE_URL?>?user/editemail.html">
                       <i class="icon icon-envelope-alt text-danger">修改邮箱/激活邮箱</i>
                    </a>
                    <a class="btn-block" href="<?=SITE_URL?>?user/ask/1.html">
                        <i class="icon icon-question-sign text-danger">我的问题</i>
                    </a>
                    <a class="btn-block" href="<?=SITE_URL?>?user/answer/1.html">
                        <i class="icon icon-comments text-danger">我的回答</i>
                    </a>
                      <a class="btn-block" href="<?=SITE_URL?>?message/personal.html">
                        <i class="icon icon-comments text-danger">我的消息</i>
                    </a>
                    <a class="btn-block" href="<?=SITE_URL?>?user/follower.html">
                        <i class="icon icon-info-sign text-danger">我的关注</i>
                    </a>

                    <a class="btn-block" href="<?=SITE_URL?>?favorite/default.html">
                        <i class="icon icon-star text-danger">我的收藏</i>
                    </a>

                    <a class="btn-block" href="<?=SITE_URL?>?user/recommend.html">
                        <i class="icon icon-lightbulb text-danger">为我推荐</i>
                    </a>
                    <a class="btn-block" href="<?=SITE_URL?>?ut-<?=$user['uid']?>.html">
                        <i class="icon icon-stack text-danger">我的文章</i>
                    </a>
                    <a class="btn-block" href="<?=SITE_URL?>?user/level.html">
                        <i class="icon icon-level-up text-danger">我的等级</i>
                    </a>


                </div>
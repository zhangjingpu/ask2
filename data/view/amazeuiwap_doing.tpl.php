<? if(!defined('IN_ASK2')) exit('Access Denied'); include template('header'); ?>
<section class="am-container" >
    <div data-am-widget="list_news" class="am-list-news am-list-news-default" >
        <!--列表标题-->
        <div class="am-list-news-hd am-cf">
            <!--带更多链接-->
            <a href="###" class="">
                <h2>正在发生的事情</h2>

            </a>
        </div>

        <div class="am-list-news-bd">
            <ul class="am-list">

                
<? if(is_array($doinglist)) { foreach($doinglist as $doing) { ?>
                <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
                    <div class="am-u-sm-3 am-list-thumb">
                        <? if($doing['hidden'] && in_array($doing['action'],array(1,8))) { ?>                        <img src="<?=SITE_URL?>css/default/avatar.gif" alt="匿名" />
                        <? } else { ?>                        <a class="pic" target="_blank" title="<?=$doing['author']?>" href="<?=SITE_URL?>?u-<?=$doing['authorid']?>.html">
                            <img width="71" height="71" class="am-radius" src="<?=$doing['avatar']?>" alt="<?=$doing['author']?>"  /></a>
                        <? } ?>                    </div>
                    <div class="am-u-sm-9 am-list-thumb">
                        <p class="am-margin-0">注册时间: <?=$doing['user']['register_time']?></p>
                        <?=$doing['user']['signature']?>
                     </div>
                    <div class=" am-u-sm-12 am-list-main">
                        <div class="am-list-item-hd am-cf">

                            <? if($doing['hidden'] && in_array($doing['action'],array(1,8))) { ?>                          <span  class="am-fl"> 匿名</span>
                            <? } else { ?>                            <a title="<?=$doing['author']?>"  class="am-fl" target="_blank" href="<?=SITE_URL?>?u-<?=$doing['authorid']?>.html"><?=$doing['author']?></a>
                            <? } ?>                            <span class="am-fr"><?=$doing['doing_time']?></span></div>
                        <h3 class="am-list-item-hd ">
                            <a href="<?=SITE_URL?>?q-<?=$doing['questionid']?>.html" target="_blank"><?=$doing['title']?>?</a>


                        </h3>
                        <div class="am-list-item-text">
                            <?=$doing['actiondesc']?>
                        </div>
                        <div class="am-margin-sm am-margin-left-0 doing_state"> <i class="am-icon-user-plus" ></i> <?=$doing['attentions']?>
                            <span class=" am-margin-right-sm"></span> <i class="am-icon-comment" ></i><?=$doing['answers']?> <span class="am-margin-right-sm">
                            </span>  <i class="am-icon-eye" ></i><?=$doing['views']?> <span class="am-margin-right-sm">
                            </span> <i class="am-icon-clock-o" ></i> <?=$doing['question_time']?> </div>
                        <? if($doing['referid']) { ?>                        <div class="am-g am-margin-0 am-btn-default">
                            <div class="am-u-sm-2 am-margin-0 am-text-left am-padding-0">
                                <a href="<?=SITE_URL?>?u-<?=$doing['refer_authorid']?>.html"  target="_blank" class="pic">
                                    <img width="41" height="41" alt="<?=$doing['author']?>" src="<?=$doing['refer_avatar']?>" /></a>
                            </div>
                            <div class="am-u-sm-10 am-text-left"><?=$doing['refer_content']?></div>
                        </div>
                        <? } ?>                    </div>



                </li>
                
<? } } ?>
            </ul>
        </div>

    </div>
    <? if($departstr) { ?>    <div class="pages am-text-lg"><?=$departstr?></div>
    <? } ?>    ﻿
   </section>
<? include template('footer'); ?>

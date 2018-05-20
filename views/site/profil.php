<link rel="stylesheet" href="/assets/ace.css" />
<link rel="stylesheet" href="/assets/ace-fonts.css" />
<link rel="stylesheet" href="/assets/ace-ie.css" />
<link rel="stylesheet" href="/assets/ace-part2.css" />
<link rel="stylesheet" href="/assets/ace-rtl.css" />
<link rel="stylesheet" href="/assets/ace-skins.css" />
<link rel="stylesheet" href="/assets/bootstrap.css" />
<link rel="stylesheet" href="/assets/pace.css" />
<link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.css" />
<script src="/assets/jquery.js"></script>
<script src="/assets/jquery.easypiechart.js"></script>
<style>
    body {
        background-color: #fff !important
    }
</style>
<?php

use yii\helpers\Html;

?>
<script>
    jQuery(function($) {


        $('.easy-pie-chart.percentage').each(function(){
            var barColor = $(this).data('color') || '#555';
            var trackColor = '#E2E2E2';
            var size = parseInt($(this).data('size')) || 72;
            $(this).easyPieChart({
                barColor: barColor,
                trackColor: trackColor,
                scaleColor: false,
                lineCap: 'butt',
                lineWidth: parseInt(size/10),
                animate:false,
                size: size
            }).css('color', barColor);
        });
    });
</script>

<div class="tab-content no-border padding-24">
    <div id="home" class="tab-pane in active">
        <div class="row">
            <div class="col-xs-12 col-sm-3 center">
															<span class="profile-picture">

                                <?= Html::img("@web/$user_info[img]", ['alt' => 'Наш логотип', 'width' => '200', 'class' => 'editable img-responsive']) ?>
															</span>

                <div class="space space-4"></div>

                <a href="#" class="btn btn-sm btn-block btn-success">
                    <i class="ace-icon fa fa-plus-circle bigger-120"></i>
                    <span class="bigger-110">Add as a friend</span>
                </a>

                <a href="#" class="btn btn-sm btn-block btn-primary">
                    <i class="ace-icon fa fa-envelope-o bigger-110"></i>
                    <span class="bigger-110">Send a message</span>
                </a>
            </div><!-- /.col -->

            <div class="col-xs-12 col-sm-9">
                <h4 class="blue">
                    <span class="middle"><?=$user_info['name']." ". $user_info['lastname']?></span>

																<span class="label label-purple arrowed-in-right">
																	<i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
																	online
																</span>
                </h4>

                <div class="profile-user-info">
                    <div class="profile-info-row">
                        <div class="profile-info-name"> Логин </div>

                        <div class="profile-info-value">
                            <span><?=$user_info['username']?></span>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> Город </div>

                        <div class="profile-info-value">
                            <i class="fa fa-map-marker light-orange bigger-110"></i>
                            <span>Россия</span>
                            <span>Санкт-Петербург</span>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> Возраст </div>

                        <div class="profile-info-value">
                            <span>21</span>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> Дата рождения </div>

                        <div class="profile-info-value">
                            <span>1996/02/20</span>
                        </div>
                    </div>


                </div>

                <div class="hr hr-8 dotted"></div>

                <div class="profile-user-info">
                    <div class="profile-info-row">
                        <div class="profile-info-name"> Сайт </div>

                        <div class="profile-info-value">
                            <a href="#" target="_blank">www.alexdoe.com</a>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name">
                            <i class="middle ace-icon fa fa-facebook-square bigger-150 blue"></i>
                        </div>

                        <div class="profile-info-value">
                            <a href="#">Find me on Facebook</a>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name">
                            <i class="middle ace-icon fa fa-twitter-square bigger-150 light-blue"></i>
                        </div>

                        <div class="profile-info-value">
                            <a href="#">Follow me on Twitter</a>
                        </div>
                    </div>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="space-20"></div>





        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="widget-box transparent">
                    <div class="widget-header widget-header-small">
                        <h4 class="widget-title smaller">
                            <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                            Little About Me
                        </h4>
                    </div>

                    <div class="widget-body">
                        <div class="widget-main">
                            <p>
                                My job is mostly lorem ipsuming and dolor sit ameting as long as consectetur adipiscing elit.
                            </p>
                            <p>
                                Sometimes quisque commodo massa gets in the way and sed ipsum porttitor facilisis.
                            </p>
                            <p>
                                The best thing about my job is that vestibulum id ligula porta felis euismod and nullam quis risus eget urna mollis ornare.
                            </p>
                            <p>
                                Thanks for visiting my profile.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6">
                <div class="widget-box transparent">
                    <div class="widget-header widget-header-small header-color-blue2">
                        <h4 class="widget-title smaller">
                            <i class="ace-icon fa fa-lightbulb-o bigger-120"></i>
                            Мои умения
                        </h4>
                    </div>

                    <div class="widget-body">
                        <div class="widget-main padding-16">
                            <div class="clearfix">
                                <div class="grid3 center">
                                    <!-- #section:plugins/charts.easypiechart -->
                                    <div class="easy-pie-chart percentage" data-percent="45" data-color="#CA5952" >
                                        <span class="percent">45</span>%
                                    </div>

                                    <!-- /section:plugins/charts.easypiechart -->
                                    <div class="space-2"></div>
                                    Дизайнер
                                </div>

                                <div class="grid3 center">
                                    <div class="center easy-pie-chart percentage" data-percent="90" data-color="#59A84B">
                                        <span class="percent">90</span>%
                                    </div>

                                    <div class="space-2"></div>
                                    Бизнесс мышление
                                </div>

                                <div class="grid3 center">
                                    <div class="center easy-pie-chart percentage" data-percent="80" data-color="#9585BF">
                                        <span class="percent">80</span>%
                                    </div>

                                    <div class="space-2"></div>
                                    Навыки програмирования
                                </div>
                            </div>

                            <div class="hr hr-16"></div>

                            <!-- #section:pages/profile.skill-progress -->
                            <div class="profile-skills">
                                <div class="progress">
                                    <div class="progress-bar" style="width:80%">
                                        <span class="pull-left">HTML5 & CSS3</span>
                                        <span class="pull-right">80%</span>
                                    </div>
                                </div>

                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" style="width:72%">
                                        <span class="pull-left">Javascript & jQuery</span>

                                        <span class="pull-right">72%</span>
                                    </div>
                                </div>

                                <div class="progress">
                                    <div class="progress-bar progress-bar-purple" style="width:70%">
                                        <span class="pull-left">PHP & MySQL</span>

                                        <span class="pull-right">70%</span>
                                    </div>
                                </div>

                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" style="width:50%">
                                        <span class="pull-left">Wordpress</span>

                                        <span class="pull-right">50%</span>
                                    </div>
                                </div>

                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" style="width:38%">
                                        <span class="pull-left">Photoshop</span>

                                        <span class="pull-right">38%</span>
                                    </div>
                                </div>
<div class="space-20"></div>
                                <div class="center">
                                                        <span class="btn btn-app btn-sm btn-light no-hover">
                                                          <span class="line-height-1 bigger-170 blue"> 5  </span>

                                                          <br>
                                                          <span class="line-height-1 smaller-90"> Хакатонов </span>
                                                        </span>

                                                        <span class="btn btn-app btn-sm btn-yellow no-hover">
                                                          <span class="line-height-1 bigger-170"> 133 </span>

                                                          <br>
                                                          <span class="line-height-1 smaller-90"> Рэйтинг </span>
                                                        </span>


                                                        <span class="btn btn-app btn-sm btn-grey no-hover">
                                                          <span class="line-height-1 bigger-170"> 1 </span>

                                                          <br>
                                                          <span class="line-height-1 smaller-90"> Победы </span>
                                                        </span>

                                                      </div>

                            </div>

                            <!-- /section:pages/profile.skill-progress -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /#home -->

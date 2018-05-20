<?php
use yii\helpers\Url;
use  app\models\ScoreTable;

?>

<script src="/js/jquery-2.1.4.min.js"></script>
<script src="/js/ace-extra.min.js"></script>
<script src="/js/ace-elements.min.js"></script>
<script src="/js/ace.min.js"></script>
<!-- bootstrap & fontawesome -->

<!-- page specific plugin styles -->
<link rel="stylesheet" href="/css/jquery-ui.custom.min.css" />
<link rel="stylesheet" href="/css/chosen.min.css" />
<link rel="stylesheet" href="/css/bootstrap-datepicker3.min.css" />
<link rel="stylesheet" href="/css/bootstrap-timepicker.min.css" />
<link rel="stylesheet" href="/css/daterangepicker.min.css" />
<link rel="stylesheet" href="/css/bootstrap-datetimepicker.min.css" />
<link rel="stylesheet" href="/css/bootstrap-colorpicker.min.css" />

<!-- text fonts -->
<link rel="stylesheet" href="/css/fonts.googleapis.com.css" />

<!-- ace styles -->
<link rel="stylesheet" href="/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

<!--[if lte IE 9]>
<link rel="stylesheet" href="css/ace-part2.min.css" class="ace-main-stylesheet" />
<![endif]-->
<link rel="stylesheet" href="/css/ace-skins.min.css" />
<link rel="stylesheet" href="/css/ace-rtl.min.css" />

<!--[if lte IE 9]>
<link rel="stylesheet" href="css/ace-ie.min.css" />
<![endif]-->

<!-- inline styles related to this page -->

<!-- ace settings handler -->
<script src="/js/ace-extra.min.js"></script>
<style>
    body {
        background-color: #fff !important
    }
</style>




<div  align="center"><h1> ЭКСПЕРТНАЯ ОЦЕНКА ПРОЕКТА</h1></div>

<div class="col-xs-9 col-md-10" style="padding-bottom: 20px">
    <div id="slider-eq">
        <h1>Ключевые параметры</h1>
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-81">Сложность реализации</label>
            <div class="col-sm-7 ui-slider-orange">
                <div class="help-block" id="input-span-slider81"></div>
            </div>
            <div class="clearfix" >
                <input class="col-xs-1" style="width: 30px;" type="text" id="form-field-81"  />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-82">Степень достижения цели</label>
            <div class="col-sm-7 ui-slider-orange">
                <div class="help-block" id="input-span-slider82"></div>
            </div>
            <div class="clearfix" >
                <input class="col-xs-1" style="width: 30px;" type="text" id="form-field-82"  />
            </div>
        </div>

    </div>
</div>


    <div  class="col-xs-9 col-md-10" style="padding-bottom: 20px">

    <div id="slider-eq">
        <h1>Менеджмент (Бизнес)</h1>
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-51">Бизнес модель</label>
            <div class="col-sm-7 ui-slider-red">
                <div class="help-block" id="input-span-slider1"></div>
            </div>
            <div class="clearfix" >
                <input class="col-xs-1" style="width: 30px;" type="text" id="form-field-51"  />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-52">Идея, актуальость, спрос</label>
            <div class="col-sm-7 ui-slider-red">
                <div class="help-block" id="input-span-slider2"></div>
            </div>
            <div class="clearfix" >
                <input class="col-xs-1" style="width: 30px;" type="text" id="form-field-52"  />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-53">Потенциал роста</label>
            <div class="col-sm-7 ui-slider-red">
                <div class="help-block" id="input-span-slider3"></div>
            </div>
            <div class="clearfix" >
                <input class="col-xs-1" style="width: 30px;" type="text" id="form-field-53"  />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-54">Вероятность внедрения</label>
            <div class="col-sm-7 ui-slider-red">
                <div class="help-block" id="input-span-slider4"></div>
            </div>
            <div class="clearfix" >
                <input class="col-xs-1" style="width: 30px;" type="text" id="form-field-54"  />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-55">Команда</label>
            <div class="col-sm-7 ui-slider-red">
                <div class="help-block" id="input-span-slider5"></div>
            </div>
            <div class="clearfix" >
                <input class="col-xs-1" style="width: 30px;" type="text" id="form-field-55"  />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-56">Целевая аудитория</label>
            <div class="col-sm-7 ui-slider-red">
                <div class="help-block" id="input-span-slider6"></div>
            </div>
            <div class="clearfix" >
                <input class="col-xs-1" style="width: 30px;" type="text" id="form-field-56"  />
            </div>
        </div>

    </div>
</div>


<div class="col-xs-9 col-md-10" style="padding-bottom: 20px">
    <div id="slider-eq">
        <h1>Программирование</h1>
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-61">Функционал</label>
            <div class="col-sm-7 ui-slider-green">
                <div class="help-block" id="input-span-slider11"></div>
            </div>
            <div class="clearfix" >
                <input class="col-xs-1" style="width: 30px;" type="text" id="form-field-61"  />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-62">Расширяемость(паттерны)</label>
            <div class="col-sm-7 ui-slider-green">
                <div class="help-block" id="input-span-slider21"></div>
            </div>
            <div class="clearfix" >
                <input class="col-xs-1" style="width: 30px;" type="text" id="form-field-62"  />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-63">Сложность реализации</label>
            <div class="col-sm-7 ui-slider-green">
                <div class="help-block" id="input-span-slider31"></div>
            </div>
            <div class="clearfix" >
                <input class="col-xs-1" style="width: 30px;" type="text" id="form-field-63"  />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-64">Дублирование кода</label>
            <div class="col-sm-7 ui-slider-green">
                <div class="help-block" id="input-span-slider41"></div>
            </div>
            <div class="clearfix" >
                <input class="col-xs-1" style="width: 30px;" type="text" id="form-field-64"  />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-65">Комментирование</label>
            <div class="col-sm-7 ui-slider-green">
                <div class="help-block" id="input-span-slider51"></div>
            </div>
            <div class="clearfix" >
                <input class="col-xs-1" style="width: 30px;" type="text" id="form-field-65"  />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-66">Чистота кода, оптимизация</label>
            <div class="col-sm-7 ui-slider-green">
                <div class="help-block" id="input-span-slider61"></div>
            </div>
            <div class="clearfix" >
                <input class="col-xs-1" style="width: 30px;" type="text" id="form-field-66"  />
            </div>
        </div>


    </div>
</div>
<div class="col-xs-9 col-md-10">
    <div id="slider-eq">
        <h1>Дизайн</h1>
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-71">Юзабилити</label>
            <div class="col-sm-7 ui-slider-blue">
                <div class="help-block" id="input-span-slider12"></div>
            </div>
            <div class="clearfix" >
                <input class="col-xs-1" style="width: 30px;" type="text" id="form-field-71"  />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-72">Интерфейс</label>
            <div class="col-sm-7 ui-slider-blue">
                <div class="help-block" id="input-span-slider22"></div>
            </div>
            <div class="clearfix" >
                <input class="col-xs-1" style="width: 30px;" type="text" id="form-field-72"  />
            </div>
        </div>
    </div>
    <p><a  class="btn btn-lg btn-success" href="<?=Url::toRoute(['expert/index'])?>"  id = "click_but">Оценить</a></p>
</div>


<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="/assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script src="js/excanvas.min.js"></script>
<![endif]-->
<script src="/js/jquery-ui.custom.min.js"></script>
<script src="/js/jquery.ui.touch-punch.min.js"></script>
<script src="/js/chosen.jquery.min.js"></script>
<script src="/js/spinbox.min.js"></script>
<script src="/js/bootstrap-datepicker.min.js"></script>
<script src="/js/bootstrap-timepicker.min.js"></script>
<script src="/js/moment.min.js"></script>
<script src="/js/daterangepicker.min.js"></script>
<script src="/js/bootstrap-datetimepicker.min.js"></script>
<script src="/js/bootstrap-colorpicker.min.js"></script>
<script src="/js/jquery.knob.min.js"></script>
<script src="/js/autosize.min.js"></script>
<script src="/js/jquery.inputlimiter.min.js"></script>
<script src="/js/jquery.maskedinput.min.js"></script>
<script src="/js/bootstrap-tag.min.js"></script>

<!-- ace scripts -->


<script type="text/javascript">
    jQuery(function($) {
        $('#id-disable-check').on('click', function() {
            var inp = $('#form-input-readonly').get(0);
            if(inp.hasAttribute('disabled')) {
                inp.setAttribute('readonly' , 'true');
                inp.removeAttribute('disabled');
                inp.value="This text field is readonly!";
            }
            else {
                inp.setAttribute('disabled' , 'disabled');
                inp.removeAttribute('readonly');
                inp.value="This text field is disabled!";
            }
        });


        if(!ace.vars['touch']) {
            $('.chosen-select').chosen({allow_single_deselect:true});
            //resize the chosen on window resize

            $(window)
                .off('resize.chosen')
                .on('resize.chosen', function() {
                    $('.chosen-select').each(function() {
                        var $this = $(this);
                        $this.next().css({'width': $this.parent().width()});
                    })
                }).trigger('resize.chosen');
            //resize chosen on sidebar collapse/expand
            $(document).on('settings.ace.chosen', function(e, event_name, event_val) {
                if(event_name != 'sidebar_collapsed') return;
                $('.chosen-select').each(function() {
                    var $this = $(this);
                    $this.next().css({'width': $this.parent().width()});
                })
            });


            $('#chosen-multiple-style .btn').on('click', function(e){
                var target = $(this).find('input[type=radio]');
                var which = parseInt(target.val());
                if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
                else $('#form-field-select-4').removeClass('tag-input-style');
            });
        }


        $('[data-rel=tooltip]').tooltip({container:'body'});
        $('[data-rel=popover]').popover({container:'body'});

        autosize($('textarea[class*=autosize]'));

        $('textarea.limited').inputlimiter({
            remText: '%n character%s remaining...',
            limitText: 'max allowed : %n.'
        });

        $.mask.definitions['~']='[+-]';
        $('.input-mask-date').mask('99/99/9999');
        $('.input-mask-phone').mask('(999) 999-9999');
        $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
        $(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});




        $( "#slider-eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
            // read initial values from markup and remove that
            var value = parseInt( $( this ).text(), 10 );
            $( this ).empty().slider({
                value: value,
                range: "min",
                animate: true

            });
        });

        $("#slider-eq > span.ui-slider-purple").slider('disable');//disable third item


        $(".knob").knob();


        var tag_input = $('#form-field-tags');
        try{
            tag_input.tag(
                {
                    placeholder:tag_input.attr('placeholder'),
                    //enable typeahead by specifying the source array
                    source: ace.vars['US_STATES'],//defined in ace.js >> ace.enable_search_ahead
                    /**
                     //or fetch data from database, fetch those that match "query"
                     source: function(query, process) {
						  $.ajax({url: 'remote_source.php?q='+encodeURIComponent(query)})
						  .done(function(result_items){
							process(result_items);
						  });
						}
                     */
                }
            )

            //programmatically add/remove a tag
            var $tag_obj = $('#form-field-tags').data('tag');
            $tag_obj.add('Programmatically Added');

            var index = $tag_obj.inValues('some tag');
            $tag_obj.remove(index);
        }
        catch(e) {
            //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
            tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
            //autosize($('#form-field-tags'));
        }




        $(document).one('ajaxloadstart.page', function(e) {
            autosize.destroy('textarea[class*=autosize]')

            $('.limiterBox,.autosizejs').remove();
            $('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
        });

    });
</script>
<script src="/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script src="js/excanvas.min.js"></script>
<![endif]-->
<script src="/js/jquery-ui.custom.min.js"></script>
<script src="/js/jquery.ui.touch-punch.min.js"></script>
<script src="/js/chosen.jquery.min.js"></script>
<script src="/js/spinbox.min.js"></script>
<script src="/js/bootstrap-datepicker.min.js"></script>
<script src="/js/bootstrap-timepicker.min.js"></script>
<script src="/js/moment.min.js"></script>
<script src="/js/daterangepicker.min.js"></script>
<script src="/js/bootstrap-datetimepicker.min.js"></script>
<script src="/js/bootstrap-colorpicker.min.js"></script>
<script src="/js/jquery.knob.min.js"></script>
<script src="/js/autosize.min.js"></script>
<script src="/js/jquery.inputlimiter.min.js"></script>
<script src="/js/jquery.maskedinput.min.js"></script>
<script src="/js/bootstrap-tag.min.js"></script>

<!-- ace scripts -->
<script src="/js/ace-elements.min.js"></script>
<script src="/js/ace.min.js"></script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function($) {
        $('#id-disable-check').on('click', function() {
            var inp = $('#form-input-readonly').get(0);
            if(inp.hasAttribute('disabled')) {
                inp.setAttribute('readonly' , 'true');
                inp.removeAttribute('disabled');
                inp.value="This text field is readonly!";
            }
            else {
                inp.setAttribute('disabled' , 'disabled');
                inp.removeAttribute('readonly');
                inp.value="This text field is disabled!";
            }
        });


        if(!ace.vars['touch']) {
            $('.chosen-select').chosen({allow_single_deselect:true});
            //resize the chosen on window resize

            $(window)
                .off('resize.chosen')
                .on('resize.chosen', function() {
                    $('.chosen-select').each(function() {
                        var $this = $(this);
                        $this.next().css({'width': $this.parent().width()});
                    })
                }).trigger('resize.chosen');
            //resize chosen on sidebar collapse/expand
            $(document).on('settings.ace.chosen', function(e, event_name, event_val) {
                if(event_name != 'sidebar_collapsed') return;
                $('.chosen-select').each(function() {
                    var $this = $(this);
                    $this.next().css({'width': $this.parent().width()});
                })
            });


            $('#chosen-multiple-style .btn').on('click', function(e){
                var target = $(this).find('input[type=radio]');
                var which = parseInt(target.val());
                if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
                else $('#form-field-select-4').removeClass('tag-input-style');
            });
        }


        $('[data-rel=tooltip]').tooltip({container:'body'});
        $('[data-rel=popover]').popover({container:'body'});

        autosize($('textarea[class*=autosize]'));

        $('textarea.limited').inputlimiter({
            remText: '%n character%s remaining...',
            limitText: 'max allowed : %n.'
        });

        $.mask.definitions['~']='[+-]';
        $('.input-mask-date').mask('99/99/9999');
        $('.input-mask-phone').mask('(999) 999-9999');
        $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
        $(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});



        $( "#input-size-slider" ).css('width','200px').slider({
            value:1,
            range: "min",
            min: 1,
            max: 8,
            step: 1,
            slide: function( event, ui ) {
                var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
                var val = parseInt(ui.value);
                $('#form-field-4').attr('class', sizing[val]).attr('placeholder', '.'+sizing[val]);
            }
        });

        var arr = [];
        //red slider for Общие

        $( "#input-span-slider81" ).slider({
            value:1,
            range: "min",
            min: 1,
            max: 10,
            step: 1,
            slide: function( event, ui ) {
                var val = parseInt(ui.value);
                arr[81] = val;
                $('#form-field-81').val(val);
            }
        });
        $( "#input-span-slider82" ).slider({
            value:1,
            range: "min",
            min: 1,
            max: 10,
            step: 1,
            slide: function( event, ui ) {
                var val = parseInt(ui.value);
                arr[82] = val;
                $('#form-field-82').val(val);
            }
        });


        //red slider for MANAGMENT

        $( "#input-span-slider1" ).slider({
            value:1,
            range: "min",
            min: 1,
            max: 10,
            step: 1,
            slide: function( event, ui ) {
                var val = parseInt(ui.value);
                arr[1] = val;
                $('#form-field-51').val(val);
            }
        });
        $( "#input-span-slider2" ).slider({
            value:1,
            range: "min",
            min: 1,
            max: 10,
            step: 1,
            slide: function( event, ui ) {
                var val = parseInt(ui.value);
                arr[2] = val;
                $('#form-field-52').val(val);

            }

        });
        $( "#input-span-slider3" ).slider({
            value:1,
            range: "min",
            min: 1,
            max: 10,
            step: 1,
            slide: function( event, ui ) {
                var val = parseInt(ui.value);
                arr[3] = val;
                $('#form-field-53').val(val);
            }
        });
        $( "#input-span-slider4" ).slider({
            value:1,
            range: "min",
            min: 1,
            max: 10,
            step: 1,
            slide: function( event, ui ) {
                var val = parseInt(ui.value);
                arr[4] = val;
                $('#form-field-54').val(val);
            }
        });
        $( "#input-span-slider5" ).slider({
            value:1,
            range: "min",
            min: 1,
            max: 10,
            step: 1,
            slide: function( event, ui ) {
                var val = parseInt(ui.value);
                arr[5] = val;
                $('#form-field-55').val(val);
            }
        });
        $( "#input-span-slider6" ).slider({
            value:1,
            range: "min",
            min: 1,
            max: 10,
            step: 1,
            slide: function( event, ui ) {
                var val = parseInt(ui.value);
                arr[5] = val;
                $('#form-field-56').val(val);
            }
        });

        //green slider for PROGRAMMING


        $( "#input-span-slider11" ).slider({
            value:1,
            range: "min",
            min: 1,
            max: 10,
            step: 1,
            slide: function( event, ui ) {
                var val = parseInt(ui.value);
                arr[11] = val;
                $('#form-field-61').val(val);
            }
        });
        $( "#input-span-slider21" ).slider({
            value:1,
            range: "min",
            min: 1,
            max: 10,
            step: 1,
            slide: function( event, ui ) {
                var val = parseInt(ui.value);
                arr[21] = val;
                $('#form-field-62').val(val);
            }
        });
        $( "#input-span-slider31" ).slider({
            value:1,
            range: "min",
            min: 1,
            max: 10,
            step: 1,
            slide: function( event, ui ) {
                var val = parseInt(ui.value);
                arr[31] = val;
                $('#form-field-63').val(val);
            }
        });
        $( "#input-span-slider41" ).slider({
            value:1,
            range: "min",
            min: 1,
            max: 10,
            step: 1,
            slide: function( event, ui ) {
                var val = parseInt(ui.value);
                arr[41] = val;
                $('#form-field-64').val(val);
            }
        });
        $( "#input-span-slider51" ).slider({
            value:1,
            range: "min",
            min: 1,
            max: 10,
            step: 1,
            slide: function( event, ui ) {
                var val = parseInt(ui.value);
                arr[51] = val;
                $('#form-field-65').val(val);
            }
        });
        $( "#input-span-slider61" ).slider({
            value:1,
            range: "min",
            min: 1,
            max: 10,
            step: 1,
            slide: function( event, ui ) {
                var val = parseInt(ui.value);
                arr[61] = val;
                $('#form-field-66').val(val);
            }
        });


        //blue slider for DESIGN

        $( "#input-span-slider12" ).slider({
            value:1,
            range: "min",
            min: 1,
            max: 10,
            step: 1,
            slide: function( event, ui ) {
                var val = parseInt(ui.value);
                arr[12] = val;
                $('#form-field-71').val(val);
            }
        });
        $( "#input-span-slider22" ).slider({
            value:1,
            range: "min",
            min: 1,
            max: 10,
            step: 1,
            slide: function( event, ui ) {
                var val = parseInt(ui.value);
                arr[22] = val;
                $('#form-field-72').val(val);
            }
        });

        $( "#slider-eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
            // read initial values from markup and remove that
            var value = parseInt( $( this ).text(), 10 );
            $( this ).empty().slider({
                value: value,
                range: "min",
                animate: true

            });
        });

        $("#slider-eq > span.ui-slider-purple").slider('disable');//disable third item


        var a = document.getElementById('click_but');
        a.onclick = function() {
            var max_biz_score = (50*0.75)/3;
            var min_biz_score = (50*0.25)/3;
            var max_prog_score = (35*0.75)/3;
            var min_prog_score = (35*0.25)/3;
            var max_des_score = (15)/3;

            var total_programing = (((arr[11]/10)*max_prog_score)*100+((arr[21]/10)*max_prog_score)*100+((arr[31]/10)*min_prog_score)*100+((arr[41]/10)*min_prog_score)*100+
                ((arr[51]/10)*min_prog_score)*100+((arr[61]/10)*max_prog_score)*100);
            var total_biz = (((arr[1]/10)*max_biz_score)*100+((arr[2]/10)*max_biz_score)*100+
                ((arr[3]/10)*min_biz_score)*100+((arr[4]/10)*min_biz_score)*100+((arr[5]/10)*max_biz_score)*100);
            var total_des = (((arr[12]/10)*max_des_score)*100+((arr[22]/10)*max_des_score)*100);
            var total_score = (((arr[81]/10)*max_prog_score)*((arr[82]/10)*max_prog_score)*(((arr[11]/10)*max_prog_score)*100+((arr[21]/10)*max_prog_score)*100+((arr[31]/10)*min_prog_score)*100+((arr[41]/10)*min_prog_score)*100+
                ((arr[51]/10)*min_prog_score)*100+((arr[61]/10)*max_prog_score)*100+((arr[1]/10)*max_biz_score)*100+((arr[2]/10)*max_biz_score)*100+
                ((arr[3]/10)*min_biz_score)*100+((arr[4]/10)*min_biz_score)*100+((arr[5]/10)*max_biz_score)*100+((arr[12]/10)*max_des_score)*100+((arr[22]/10)*max_des_score)*100))/100;

            total_score = Math.ceil(total_score);
            total_programing = Math.ceil(total_programing);
            total_biz = Math.ceil(total_biz);
            total_des = Math.ceil(total_des);
            console.log(total_score);
            console.log(total_programing);
            console.log(total_biz);
            console.log(total_des);

           $.ajax({
                type: "POST",
                url:"<?=Url::toRoute(['site/obrabot'])?>",
                data: {
                    id_hack:"<?=$_GET['id_hack']?>",
                    id_command:"<?=$_GET['id_command']?>",
                    checkpoint:"<?=$_GET['checkpoint']?>",
                    total_score: total_score,
                    total_programing:total_programing,
                    total_biz:total_biz,
                    total_des: total_des
                }
                //responseType: 'html'
            }).success(function (data) {

            });



        };
        $(document).one('ajaxloadstart.page', function(e) {
            autosize.destroy('textarea[class*=autosize]')

            $('.limiterBox,.autosizejs').remove();
            $('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
        });

    });
</script>

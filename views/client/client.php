
<script src="/js/jquery-2.1.4.min.js"></script>
<script src="/js/ace-extra.min.js"></script>
<link rel="stylesheet" href="/css/font-awesome.min.css" />
<link rel="stylesheet" href="/css/select2.min.css" />
<link rel="stylesheet" href="/css/fonts.googleapis.com.css" />
<link rel="stylesheet" href="/css/ace.min.css" />
<link rel="stylesheet" href="/css/ace-skins.min.css" />
<link rel="stylesheet" href="/css/ace-rtl.min.css" />
<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\URL;

?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="main-content">
    				<div class="main-content-inner">
    					<div class="page-content">
    						<div class="row">
    							<div class="col-xs-12">
    								<!-- PAGE CONTENT BEGINS -->
    								<div class="widget-box">
    									<div class="widget-header widget-header-blue widget-header-flat">
    										<h4 class="widget-title lighter">Маршрутная карта проетка</h4>
    									</div>
    									<div class="widget-body">
    										<div class="widget-main">
    											<div id="fuelux-wizard-container">
    												<div>
    													<ul class="steps">
                                                            <li data-step="1" class="active">
    															<span class="step">0</span>
    															<span class="title">Установка плана</span>
    														</li>
    														<li data-step="2" class="active">
    															<span class="step">1</span>
    															<span class="title">CheckPoint</span>
    														</li>

    														<li data-step="3">
    															<span class="step">2</span>
    															<span class="title">CheckPoint</span>
    														</li>

    														<li data-step="4">
    															<span class="step">3</span>
    															<span class="title">CheckPoint</span>
    														</li>
															<li data-step="5">
																<span class="step">4</span>
																<span class="title">CheckPoint</span>
															</li>

    														<li data-step="6">
    															<span class="step">5</span>
    															<span class="title">Все!</span>
    														</li>
    													</ul>
    												</div>
    												<hr />
    										<div class="step-content pos-rel">
                                            <div class="step-pane" data-step="1">
                                                <div class="form-group">
													<h3 class="col-sm-10 control-label no-padding-top" for="duallist" style="color:blue">Основные данные о проекте</h3>
                										<div class="col-sm-12">
                                                            <div class="hr hr-2 hr-dotted"></div>
                											<div class="bootstrap-duallistbox-container row moveonselect">
                                                                 <div class="box1 col-md-10">
                                                                      <span class="info-container">
                                                                           <span class="info">Какую проблему Вы решаете?</span>
                                                                         </span>
                                                                          <input class="filter form-control" type="text" placeholder="...">
																 </div>

                                                            </div>
                										</div>
                								</div>
                                                <div class="form-group">
                    										<div class="col-sm-12">
                    											<div class="bootstrap-duallistbox-container row moveonselect">
                                                                     <div class="box1 col-md-10">
                                                                          <span class="info-container">
                                                                               <span class="info">В чем ваша особенность?</span>
                                                                             </span>
                                                                              <input class="filter form-control"  type="text" placeholder="...">
																	 </div>

																</div>
                    									</div>
                    							</div>
                                                <div class="form-group">
                        										<div class="col-sm-12">
                        											<div class="bootstrap-duallistbox-container row moveonselect">
                                                                         <div class="box1 col-md-10">
                                                                              <span class="info-container">
                                                                                   <span class="info">Сколько будует стоить внедрени?</span>
                                                                                 </span>
                                                                                  <input class="filter form-control"  type="text" placeholder="...">
																		 </div>
																	</div>
                        										</div>
												</div>
												<div class="form-group">
													<div class="col-sm-12">
														<div class="bootstrap-duallistbox-container row moveonselect">
															<div class="box1 col-md-10">
                                                                              <span class="info-container">
                                                                                   <span class="info">Какую пользу принесет Ваша идея?</span>
                                                                                 </span>
																<input class="filter form-control"  type="text" placeholder="...">
															</div>
														</div>
													</div>
												</div>

                                                                <div class="form-group">
																	<h3 class="col-sm-10 control-label no-padding-top" for="duallist" style="color:blue">Опишите основные функци на пути к итоговому продукту, которые вы хотите реализовать</h3>
                                        										<div class="col-sm-12">
                                                                                    <div class="hr hr-2 hr-dotted"></div>
                                        											<div class="bootstrap-duallistbox-container row moveonselect">
                                                                                         <div class="box1 col-md-10">
                                                                                              <span class="info-container">
                                                                                                   <span class="info">CheckPoint 1</span>
                                                                                                 </span>
                                                                                                  <input class="filter form-control"  type="text" placeholder="...">
																						 </div>
																					</div>
                                        										</div>
                                        							</div>
                                                                    <div class="form-group">
                                            										<div class="col-sm-12">
                                            											<div class="bootstrap-duallistbox-container row moveonselect">
                                                                                             <div class="box1 col-md-10">
                                                                                                  <span class="info-container">
                                                                                                       <span class="info">CheckPoint 2</span>
                                                                                                     </span>
                                                                                                      <input class="filter form-control"  type="text" placeholder="...">
                                                                                                 </div>
																						</div>
                                            										</div>
																	</div>
												<div class="form-group">
													<div class="col-sm-12">
														<div class="bootstrap-duallistbox-container row moveonselect">
															<div class="box1 col-md-10">
                                                                                                  <span class="info-container">
                                                                                                       <span class="info">CheckPoint 3</span>
                                                                                                     </span>
																<input class="filter form-control"  type="text" placeholder="...">
															</div>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-12">
														<div class="bootstrap-duallistbox-container row moveonselect">
															<div class="box1 col-md-10">
                                                                                                  <span class="info-container">
                                                                                                       <span class="info">CheckPoint 4</span>
                                                                                                     </span>
																<input class="filter form-control"  type="text" placeholder="...">
															</div>
														</div>
													</div>
												</div>
                                                        </div>
                                                        <div class="step-pane active" data-step="2">
                                                            <div class="center">
    															<h3 class="blue lighter">Поехали! Постарайтесь выполнить ВСЕ свои цели!</h3>
    														</div>

    													</div>

    													<div class="step-pane" data-step="3">
                                                            <div class="center">
    															<h3 class="blue lighter">Эксперту получил сообщение о готовности первого пункта из Вашего плана. В ближайшее время будьте готовы представить ему свои достижения</h3>
    														</div>
    													</div>

    													<div class="step-pane" data-step="4">
    														<div class="center">
    															<h3 class="blue lighter">Эксперту получил сообщение о готовности второго пункта из Вашего плана. В ближайшее время будьте готовы представить ему свои достижения</h3>
    														</div>
    													</div>

    													<div class="step-pane" data-step="5">
    														<div class="center">
    															<h3 class="blue lighter">Эксперту получил сообщение о готовности третьего пункта из Вашего плана. В ближайшее время будьте готовы представить ему свои достижения</h3>
    														</div>
    													</div>
														<div class="step-pane" data-step="6">
															<div class="center">
																<h3 class="green">Поздравляем! Вы справились! Эксперт скоро вынесет последнее заключение</h3>
																<h3 class="green">Удачи на презентации!!!</h3>
															</div>
														</div>
    												</div>
    											</div>


    											<div class="wizard-actions" style="margin-top: 350px;" >
    												<button class="btn btn-prev">
    													<i class="ace-icon fa fa-arrow-left"></i>
    													Prev
    												</button>

    												<button class="btn btn-success btn-next" data-last="Finish">
    													Next
    													<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
    												</button>
    											</div>
    										</div><!-- /.widget-main -->
    									</div><!-- /.widget-body -->
    								</div>

    								<div id="modal-wizard" class="modal">
    									<div class="modal-dialog">
    										<div class="modal-content">
    											<div id="modal-wizard-container">
    												<div class="modal-header">
    													<ul class="steps">
    														<li data-step="1" class="active">
    															<span class="step">1</span>
    															<span class="title">Validation states</span>
    														</li>

    														<li data-step="2">
    															<span class="step">2</span>
    															<span class="title">Alerts</span>
    														</li>

    														<li data-step="3">
    															<span class="step">3</span>
    															<span class="title">Payment Info</span>
    														</li>

    														<li data-step="4">
    															<span class="step">4</span>
    															<span class="title">Other Info</span>
    														</li>
    													</ul>
    												</div>

    												<div class="modal-body step-content">
    													<div class="step-pane active" data-step="1">
    														<div class="center">
    															<h4 class="blue">Step 1</h4>
    														</div>
    													</div>

    													<div class="step-pane" data-step="2">
    														<div class="center">
    															<h4 class="blue">Step 2</h4>
    														</div>
    													</div>

    													<div class="step-pane" data-step="3">
    														<div class="center">
    															<h4 class="blue">Step 3</h4>
    														</div>
    													</div>

    													<div class="step-pane" data-step="4">
    														<div class="center">
    															<h4 class="blue">Step 4</h4>
    														</div>
    													</div>
														<div class="step-pane" data-step="5">
															<div class="center">
																<h4 class="blue">Step 5</h4>
															</div>
														</div>
    												</div>
    											</div>

    											<div class="modal-footer wizard-actions">
    												<button class="btn btn-sm btn-prev">
    													<i class="ace-icon fa fa-arrow-left"></i>
    													Prev
    												</button>

    												<button class="btn btn-success btn-sm btn-next" data-last="Finish">
    													Next
    													<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
    												</button>

    												<button class="btn btn-danger btn-sm pull-left" data-dismiss="modal">
    													<i class="ace-icon fa fa-times"></i>
    													Cancel
    												</button>
    											</div>
    										</div>
    									</div>
    								</div><!-- PAGE CONTENT ENDS -->
    							</div><!-- /.col -->
    						</div><!-- /.row -->
    					</div><!-- /.page-content -->
    				</div>
    			</div><!-- /.main-content -->
</div>
<script type="text/javascript">
if('ontouchstart' in document.documentElement) document.write("<script src='/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/wizard.min.js"></script>
<script src="/js/jquery.validate.min.js"></script>
<script src="/js/jquery-additional-methods.min.js"></script>
<script src="/js/bootbox.js"></script>
<script src="/js/jquery.maskedinput.min.js"></script>
<script src="/js/select2.min.js"></script>
	<!-- ace scripts -->
<script src="/js/ace-elements.min.js"></script>
<script src="/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
<script type="text/javascript">
			jQuery(function($) {

				$('[data-rel=tooltip]').tooltip();

				$('.select2').css('width','200px').select2({allowClear:true})
				.on('change', function(){
					$(this).closest('form').validate().element($(this));
				});


				var $validation = false;
				$('#fuelux-wizard-container')
				.ace_wizard({
					//step: 2 //optional argument. wizard will jump to step "2" at first
					//buttons: '.wizard-actions:eq(0)'
				})
				.on('actionclicked.fu.wizard' , function(e, info){
					if(info.step == 1 && $validation) {
						if(!$('#validation-form').valid()) e.preventDefault();
					}
				})
				//.on('changed.fu.wizard', function() {
				//})
				.on('finished.fu.wizard', function(e) {
					bootbox.dialog({
						message: "Спасибо за напряженную работу!",
						buttons: {
							"success" : {
								"label" : "OK",
								"className" : "btn-sm btn-primary"
							}
						}
					});
				}).on('stepclick.fu.wizard', function(e){
					//e.preventDefault();//this will prevent clicking and selecting steps
				});


				//jump to a step
				/**
				var wizard = $('#fuelux-wizard-container').data('fu.wizard')
				wizard.currentStep = 3;
				wizard.setState();
				*/

				//determine selected step
				//wizard.selectedItem().step



				//hide or show the other form which requires validation
				//this is for demo only, you usullay want just one form in your application
				$('#skip-validation').removeAttr('checked').on('click', function(){
					$validation = this.checked;
					if(this.checked) {
						$('#sample-form').hide();
						$('#validation-form').removeClass('hide');
					}
					else {
						$('#validation-form').addClass('hide');
						$('#sample-form').show();
					}
				})



				//documentation : http://docs.jquery.com/Plugins/Validation/validate


				$.mask.definitions['~']='[+-]';
				$('#phone').mask('(999) 999-9999');

				jQuery.validator.addMethod("phone", function (value, element) {
					return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
				}, "Enter a valid phone number.");

				$('#validation-form').validate({
					errorElement: 'div',
					errorClass: 'help-block',
					focusInvalid: false,
					ignore: "",
					rules: {
						email: {
							required: true,
							email:true
						},
						password: {
							required: true,
							minlength: 5
						},
						password2: {
							required: true,
							minlength: 5,
							equalTo: "#password"
						},
						name: {
							required: true
						},
						phone: {
							required: true,
							phone: 'required'
						},
						url: {
							required: true,
							url: true
						},
						comment: {
							required: true
						},
						state: {
							required: true
						},
						platform: {
							required: true
						},
						subscription: {
							required: true
						},
						gender: {
							required: true,
						},
						agree: {
							required: true,
						}
					},

					messages: {
						email: {
							required: "Please provide a valid email.",
							email: "Please provide a valid email."
						},
						password: {
							required: "Please specify a password.",
							minlength: "Please specify a secure password."
						},
						state: "Please choose state",
						subscription: "Please choose at least one option",
						gender: "Please choose gender",
						agree: "Please accept our policy"
					},


					highlight: function (e) {
						$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
					},

					success: function (e) {
						$(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
						$(e).remove();
					},

					errorPlacement: function (error, element) {
						if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
							var controls = element.closest('div[class*="col-"]');
							if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
							else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
						}
						else if(element.is('.select2')) {
							error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
						}
						else if(element.is('.chosen-select')) {
							error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
						}
						else error.insertAfter(element.parent());
					},

					submitHandler: function (form) {
					},
					invalidHandler: function (form) {
					}
				});




				$('#modal-wizard-container').ace_wizard();
				$('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');


				/**
				$('#date').datepicker({autoclose:true}).on('changeDate', function(ev) {
					$(this).closest('form').validate().element($(this));
				});

				$('#mychosen').chosen().on('change', function(ev) {
					$(this).closest('form').validate().element($(this));
				});
				*/


				$(document).one('ajaxloadstart.page', function(e) {
					//in ajax mode, remove remaining elements before leaving page
					$('[class*=select2]').remove();
				});
			})
		</script>

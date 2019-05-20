<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php include ('include/data.php'); ?>

<form action="admin.php?page=<?php echo WPBIKER_FP_BASENAME;?>" method="post">
	<div class="wpbikercolom">	
		<div id="wpbiker-leftcol">			
			<div class="wpbiker-admin">			
				<input placeholder="Name is used only for admin purposes" type='text' name='title' value="<?php echo $title; ?>" class="input-100 wpbiker-title"/>
			</div>
			
			<div class="wpbikerbox">
				<h3><?php esc_attr_e("Preview", "wpbiker-fp-lang") ?></h3>
				<div style="display: block; overflow: auto">
					<?php include ('preview/preview.php'); ?>
				</div>
			</div>
			
			<div class="tab-box ">
				
				<ul class="tab-nav">
					<li><a href="#t1"><i class="fa fa-plus-square-o" aria-hidden="true"></i> <?php esc_attr_e("Form", "wpbiker-fp-lang") ?></a></li>
					<li><a href="#t2"><i class="fa fa-css3" aria-hidden="true"></i> <?php esc_attr_e("Style", "wpbiker-fp-lang") ?></a></li>
					<li><a href="#t3"><i class="fa fa-mobile" aria-hidden="true"></i> <?php esc_attr_e("Mobile style", "wpbiker-fp-lang") ?></a></li>
					<li><a href="#t4"><i class="fa fa-envelope" aria-hidden="true"></i> <?php esc_attr_e("Email settings", "wpbiker-fp-lang") ?></a></li>
					<li><a href="#t5"><i class="fa fa-product-hunt" aria-hidden="true"></i> <?php esc_attr_e("Pro version", "wow-marketings") ?></a></li>
				</ul>
				
				<div class="tab-panels wpbiker-admin">
					
					<div id="t1" class="tab-content">
						
						<?php if ($count_i == 0){; ?>
							<div class="items-1">
								<h3><?php esc_attr_e("Field", "wpbiker-fp-lang") ?> <span class="icount"><?php echo $count_i+1;?></span></h3>						
								<div class="wpbiker-admin-col">
									
									<div class="wpbiker-admin-col-4">
										<?php esc_attr_e("Title", "wpbiker-fp-lang") ?><span class="err">*</span>: 
										<?php esc_attr_e("show", "wpbiker-fp-lang") ?> <input name="param[include_field_name][0]" type="checkbox" value="1" checked="checked"><br/>								
										<input  placeholder="Title/Required" type='text' name="param[name_item][0]" value="" class="titltform"/>
									</div>
									
									<div class="wpbiker-admin-col-4">
										<?php esc_attr_e("Item type", "wpbiker-fp-lang") ?>:<br/>
										<select name="param[item_type][0]" onchange="changetype('0');">
											<option value="input"><?php esc_attr_e("Input", "wpbiker-fp-lang") ?></option>
											<option value="textarea"><?php esc_attr_e("Textarea", "wpbiker-fp-lang") ?></option>
											<option value="select"><?php esc_attr_e("Select", "wpbiker-fp-lang") ?></option>
											<option value="radio"><?php esc_attr_e("Radio", "wpbiker-fp-lang") ?></option>
											<option value="checkbox" ><?php esc_attr_e("Checkbox", "wpbiker-fp-lang") ?></option>									
										</select>
									</div>
									
									<div class="wpbiker-admin-col-4">
										<?php esc_attr_e("Width", "wpbiker-fp-lang") ?>:<br/>
										<select name="param[width_col][0]">
											<option value="12">12/12</option>
											<option value="11">11/12</option>
											<option value="10">10/12</option>
											<option value="9">9/12</option>
											<option value="8" >8/12</option>
											<option value="7" >7/12</option>
											<option value="6" >6/12</option>
											<option value="5" >5/12</option>
											<option value="4" >4/12</option>
											<option value="3" >3/12</option>
											<option value="2" >2/12</option>
											<option value="1" >1/12</option>
										</select>
									</div>
									
								</div>
								
								<div class="wpbiker-admin-col" id="block_input_0">
									
									<div class="wpbiker-admin-col-4">
										<?php esc_attr_e("Validation", "wpbiker-fp-lang") ?>:<br/>
										<select name="param[input_validator][0]">
											<option value="name"><?php esc_attr_e("Name", "wpbiker-fp-lang") ?></option>
											<option value="email"><?php esc_attr_e("Email", "wpbiker-fp-lang") ?></option>
											<option value="number"><?php esc_attr_e("Number", "wpbiker-fp-lang") ?></option>
											<option value="text"><?php esc_attr_e("Text", "wpbiker-fp-lang") ?></option>
										</select>
									</div>
									
									<div class="wpbiker-admin-col-4">
										<?php esc_attr_e("Placeholder", "wpbiker-fp-lang") ?>:<br/>
										<input type='text' name="param[input_placeholder][0]" value="" />
									</div>
									
									<div class="wpbiker-admin-col-4">
										<?php esc_attr_e("Required field", "wpbiker-fp-lang") ?>:<br/>
										<input name="param[field_required][0]" type="checkbox" value="1" checked="checked">
									</div>
								</div>
								
								<div id="block_noinput_0">
									<div class="wpbiker-admin-col">
										<div class="wpbiker-admin-col-4">
											<?php esc_attr_e("Value", "wpbiker-fp-lang") ?>:
										</div>
										
										<div class="wpbiker-admin-col-4">
											<?php esc_attr_e("Text", "wpbiker-fp-lang") ?>:
										</div>
										
										<div class="wpbiker-admin-col-3">
											<?php esc_attr_e("Selected", "wpbiker-fp-lang") ?>:
										</div>
										
										<div class="wpbiker-admin-col-1"></div>
									</div>
									
									<div id="value_text_0">
										<div class="wpbiker-admin-col">
											
											<div class="wpbiker-admin-col-4">
												<input  placeholder="" type='text' name="param[list_value][0][0]" value="" />
											</div>
											
											<div class="wpbiker-admin-col-4">
												<input  placeholder="" type='text' name="param[list_text][0][0]" value="" />
											</div>
											
											<div class="wpbiker-admin-col-3">
												<input  placeholder="" type='checkbox' name="param[list_checkbox][0][0]" value="1" />
											</div>
											<div class="wpbiker-admin-col-1 value_text_remove">
												<i class="fa fa-times-circle fp-close" aria-hidden="true"></i>
											</div>
										</div>
									</div>
									<div class="wpbiker-admin-col">
										<div class="wpbiker-admin-col-4">
											<a href="javascript:void(0);" onclick="newlist(0);"><?php esc_attr_e("Add new value", "wpbiker-fp-lang") ?></a>
										</div>
										
										<div class="wpcalc-admin-col-4" id="check_0">
											<input name="param[check_style][0]" type="radio" value="colom" <?php if($param['check_style'][0]=='colom' || $param['check_style'][0] =='') { echo 'checked="checked"'; } ?>> Colom <input name="param[check_style][0]" type="radio" value="inline" <?php if($param['check_style'][0]=='inline') { echo 'checked="checked"'; } ?>> Inline
										</div>
									</div>
									
								</div>
							</div>
						<?php } ?>
						<?php if ($count_i > 0){
							for ($i = 0; $i < $count_i; $i++) { ?>
							
							<div class="items-<?php echo $i+1;?>">
								<h3><?php esc_attr_e("Field", "wpbiker-marketings") ?> <span class="icount"><?php echo $i+1;?></span></h3>
								<div class="wpbiker-admin-col">
									
									<div class="wpbiker-admin-col-4">
										<?php esc_attr_e("Title", "wpbiker-marketings") ?><span class="err">*</span>: <?php esc_attr_e("show", "wpbiker-fp-lang") ?> 
										<input name="param[include_field_name][<?php echo $i;?>]" type="checkbox" value="1" <?php if(!empty($param['include_field_name'][$i])) { echo 'checked="checked"'; } ?> > <br/>
										<input  placeholder="Title/Required" type='text' name="param[name_item][<?php echo $i;?>]" value="<?php echo $param['name_item'][$i]; ?>" class="titltform"/>
									</div>
									
									<div class="wpbiker-admin-col-4">
										<?php esc_attr_e("Item type", "wpbiker-fp-lang") ?>:<br/>
										<select name="param[item_type][<?php echo $i;?>]" onchange="changetype(<?php echo $i;?>);">
											<option value="input" <?php if($param['item_type'][$i]=='input') { echo 'selected="selected"'; } ?>><?php esc_attr_e("Input", "wpbiker-fp-lang") ?></option>
											<option value="textarea" <?php if($param['item_type'][$i]=='textarea') { echo 'selected="selected"'; } ?>><?php esc_attr_e("Textarea", "wpbiker-fp-lang") ?></option>
											<option value="select" <?php if($param['item_type'][$i]=='select') { echo 'selected="selected"'; } ?>><?php esc_attr_e("Select", "wpbiker-fp-lang") ?></option>
											<option value="radio" <?php if($param['item_type'][$i]=='radio') { echo 'selected="selected"'; } ?>><?php esc_attr_e("Radio", "wpbiker-fp-lang") ?></option>
											<option value="checkbox" <?php if($param['item_type'][$i]=='checkbox') { echo 'selected="selected"'; } ?>><?php esc_attr_e("Checkbox", "wpbiker-fp-lang") ?></option>									
										</select>
									</div>
									
									<div class="wpbiker-admin-col-4">
										<?php esc_attr_e("Width", "wpbiker-fp-lang") ?>:<br/>
										<select name="param[width_col][<?php echo $i;?>]">	
											<?php if (empty($param['width_col'][$i])) { ?>
												<option value="12">12/12</option>
												<option value="11">11/12</option>
												<option value="10">10/12</option>
												<option value="9">9/12</option>
												<option value="8">8/12</option>
												<option value="7">7/12</option>
												<option value="6">6/12</option>
												<option value="5">5/12</option>
												<option value="4">4/12</option>
												<option value="3">3/12</option>
												<option value="2">2/12</option>
												<option value="1">1/12</option>										
												<?php	} else { ?>
												<option value="12" <?php if($param['width_col'][$i]=='12') { echo 'selected="selected"'; } ?>>12/12</option>
												<option value="11" <?php if($param['width_col'][$i]=='11') { echo 'selected="selected"'; } ?>>11/12</option>
												<option value="10" <?php if($param['width_col'][$i]=='10') { echo 'selected="selected"'; } ?>>10/12</option>
												<option value="9" <?php if($param['width_col'][$i]=='9') { echo 'selected="selected"'; } ?>>9/12</option>
												<option value="8" <?php if($param['width_col'][$i]=='8') { echo 'selected="selected"'; } ?>>8/12</option>
												<option value="7" <?php if($param['width_col'][$i]=='7') { echo 'selected="selected"'; } ?>>7/12</option>
												<option value="6" <?php if($param['width_col'][$i]=='6') { echo 'selected="selected"'; } ?>>6/12</option>
												<option value="5" <?php if($param['width_col'][$i]=='5') { echo 'selected="selected"'; } ?>>5/12</option>
												<option value="4" <?php if($param['width_col'][$i]=='4') { echo 'selected="selected"'; } ?>>4/12</option>
												<option value="3" <?php if($param['width_col'][$i]=='3') { echo 'selected="selected"'; } ?>>3/12</option>
												<option value="2" <?php if($param['width_col'][$i]=='2') { echo 'selected="selected"'; } ?>>2/12</option>
												<option value="1" <?php if($param['width_col'][$i]=='1') { echo 'selected="selected"'; } ?>>1/12</option>
											<?php	} ?>
										</select>
									</div>
									
									
								</div>
								
								<div class="wpbiker-admin-col" id="block_input_<?php echo $i;?>">
									<div class="wpbiker-admin-col-4"><?php esc_attr_e("Validation", "wpbiker-fp-lang") ?>:<br/>
										<select name="param[input_validator][<?php echo $i;?>]"> 
											<?php if (empty($param[input_validator][$i])){ ?>
												<option value="name"><?php esc_attr_e("Name", "wpbiker-fp-lang") ?></option>
												<option value="email"><?php esc_attr_e("Email", "wpbiker-fp-lang") ?></option>
												<option value="number"><?php esc_attr_e("Number", "wpbiker-fp-lang") ?></option>
												<option value="text"><?php esc_attr_e("Text", "wpbiker-fp-lang") ?></option>
												<?php } else { ?>
												<option value="name" <?php if($param['input_validator'][$i]=='name') { echo 'selected="selected"'; } ?>><?php esc_attr_e("Name", "wpbiker-fp-lang") ?></option> 
												<option value="email" <?php if($param['input_validator'][$i]=='email') { echo 'selected="selected"'; } ?>><?php esc_attr_e("Email", "wpbiker-fp-lang") ?></option>
												<option value="number" <?php if($param['input_validator'][$i]=='number') { echo 'selected="selected"'; } ?>><?php esc_attr_e("Number", "wpbiker-fp-lang") ?></option>
												<option value="text" <?php if($param['input_validator'][$i]=='text') { echo 'selected="selected"'; } ?>><?php esc_attr_e("Text", "wpbiker-fp-lang") ?></option>
											<?php } ?>
										</select>
									</div>	
									
									<div class="wpbiker-admin-col-4">
										<?php esc_attr_e("Placeholder", "wpbiker-fp-lang") ?>:<br/>
										<input type='text' name="param[input_placeholder][<?php echo $i;?>]" value="<?php echo $param['input_placeholder'][$i]; ?>" />
									</div>
									
									<div class="wpbiker-admin-col-4">
										<?php esc_attr_e("Required field", "wpbiker-fp-lang") ?>:<br/>
										<input name="param[field_required][<?php echo $i;?>]" type="checkbox" value="1" <?php if(!empty($param['field_required'][$i])) { echo 'checked="checked"'; } ?> >
									</div>
								</div>
								
								<div id="block_noinput_<?php echo $i;?>">
									
									<div class="wpbiker-admin-col">
										
										<div class="wpbiker-admin-col-4">
											<?php esc_attr_e("Value", "wpbiker-fp-lang") ?>:
										</div>
										
										<div class="wpbiker-admin-col-4">
											<?php esc_attr_e("Text", "wpbiker-fp-lang") ?>:
										</div>
										
										<div class="wpbiker-admin-col-3">
											<?php esc_attr_e("Selected", "wpbiker-fp-lang") ?>:
										</div>
										
										<div class="wpbiker-admin-col-1"></div>
									</div>
									
									<div id="value_text_<?php echo $i;?>">							
										<?php 
											$count_list = count($param['list_value'][$i]);
											if ($count_list > 0) {
												for ($ii = 0; $ii < $count_list; $ii++) { ?>
												
												<div class="wpbiker-admin-col">
													
													<div class="wpbiker-admin-col-4">
														<input type='text' name="param[list_value][<?php echo $i;?>][<?php echo $ii;?>]" value="<?php echo $param['list_value'][$i][$ii]; ?>" />
													</div>
													
													<div class="wpbiker-admin-col-4">
														<input type='text' name="param[list_text][<?php echo $i;?>][<?php echo $ii;?>]" value="<?php echo $param['list_text'][$i][$ii]; ?>" />
													</div>
													
													<div class="wpbiker-admin-col-3">
														<input type='checkbox' name="param[list_checkbox][<?php echo $i;?>][<?php echo $ii;?>]" value="1" <?php if(!empty($param['list_checkbox'][$i][$ii])) { echo 'checked="checked"'; } ?>/>
													</div>
													
													<div class="wpbiker-admin-col-1 value_text_remove">
														<i class="fa fa-times-circle fp-close" aria-hidden="true"></i>
													</div>
													
												</div> 
												<?php 
												}	
											} 
										?>							
									</div>
									<div class="wpbiker-admin-col">
										<div class="wpbiker-admin-col-4">
											<a href="javascript:void(0);" onclick="newlist(<?php echo $i;?>);"><?php esc_attr_e("Add new value", "wpbiker-fp-lang") ?></a>
										</div>
										<div class="wpcalc-admin-col-4" id="check_<?php echo $i;?>">
											<?php if (empty($param['check_style'][$i])){ $param['check_style'][$i] = 'colom';} ?>
											<input name="param[check_style][<?php echo $i;?>]" type="radio" value="colom" <?php if($param['check_style'][$i]=='colom') { echo 'checked="checked"'; } ?>> Colom <input name="param[check_style][<?php echo $i;?>]" type="radio" value="inline" <?php if($param['check_style'][$i]=='inline') { echo 'checked="checked"'; } ?>> Inline
										</div>
									</div>
								</div>
							</div>
							<?php	
							} 
						} ?>
						<div class="submit-bottom">
							<input type="button" value="Add field" class="formsub fully-rounded" onclick="itemadd()"> 
							<input type="button" class="formpreview fully-rounded" value="Delete last field" onclick="itemremove()">
						</div>
					</div>
					
					<div id="t2" class="tab-content">
						
						<div class="wpbiker-admin-col">	
							
							<div class="wpbiker-admin-col-4 fieldform">
								<?php esc_attr_e("Form align", "wpbiker-fp-lang") ?>: <br/>
								<select name='param[form_align]'>
									<option value="left" <?php if($param['form_align']=='left') { echo 'selected="selected"'; } ?>><?php esc_attr_e("left", "wpbiker-fp-lang") ?></option>
									<option value="center" <?php if($param['form_align']=='center') { echo 'selected="selected"'; } ?>><?php esc_attr_e("center", "wpbiker-fp-lang") ?></option> 
									<option value="right" <?php if($param['form_align']=='right') { echo 'selected="selected"'; } ?>><?php esc_attr_e("right", "wpbiker-fp-lang") ?></option>
								</select>
							</div>
							
							<div class="wpbiker-admin-col-4 fieldform">
								<?php esc_attr_e("Form width", "wpbiker-fp-lang") ?>: <br/>
								<input type='text' placeholder="100" name='param[form_width]' value="<?php echo $param['form_width']; ?>"/> <br/> 
								<input name="param[form_width_par]" type="radio" value="px" <?php if($param['form_width_par']=='px') { echo 'checked="checked"'; } ?>>px 
								<input name="param[form_width_par]" type="radio" value="%" <?php if($param['form_width_par']=='%' || $param['form_width_par'] =='') { echo 'checked="checked"'; } ?>>%
							</div>
							
							<div class="wpbiker-admin-col-4 fieldform">
								<?php esc_attr_e("Form margin top & bottom", "wpbiker-fp-lang") ?>:<br/>
								<input type='text' placeholder="0" name='param[form_margin_top]' value="<?php echo $param['form_margin_top']; ?>"/> px
							</div>
							
						</div>
						
						<div class="wpbiker-admin-col">	
							
							
							
							<div class="wpbiker-admin-col-4 fieldform">
								<?php esc_attr_e("Form margin left & right", "wpbiker-fp-lang") ?>:<br/>
								<input type='text' placeholder="0" name='param[form_margin_left]' value="<?php echo $param['form_margin_left']; ?>"/> px
							</div>
							
							<div class="wpbiker-admin-col-4 fieldform">
								<?php esc_attr_e("Form padding top & bottom", "wpbiker-fp-lang") ?>:<br/>
								<input type='text' placeholder="0" name='param[form_padding_top]' value="<?php echo $param['form_padding_top']; ?>"/> px
								
							</div>
							
							<div class="wpbiker-admin-col-4 fieldform">
								<?php esc_attr_e("Form padding left & right", "wpbiker-fp-lang") ?>:<br/>
								<input type='text' placeholder="0" name='param[form_padding_left]' value="<?php echo $param['form_padding_left']; ?>"/> px
							</div>
							
						</div>
						
						<div class="wpbiker-admin-col">
							
							<div class="wpbiker-admin-col-4 fieldform">
								<?php esc_attr_e("Form border", "wpbiker-fp-lang") ?>:<br/>
								<input type='text' placeholder="0" name='param[form_border]' value="<?php if (!empty($param['form_border'])) { echo $param['form_border']; }; ?>"/> px
								
							</div>
							
							<div class="wpbiker-admin-col-4 fieldform">
								<?php esc_attr_e("Form border radius", "wpbiker-fp-lang") ?>:<br/>
								<input type='text' placeholder="5" name='param[form_border_radius]' value="<?php if (!empty($param['form_border_radius'])) { echo $param['form_border_radius']; }; ?>"/> px
								
							</div>
							
							<div class="wpbiker-admin-col-4 fieldform">
								<?php esc_attr_e("Background image", "wpbiker-fp-lang") ?>:<br/>
								<input type='text' placeholder="link" name='param[background_img]' value="<?php if (!empty($param['form_border_radius'])) { echo $param['background_img']; }; ?>"/>
								
							</div>
							
						</div>
						
						<div class="wpbiker-admin-col">							
							
							<div class="wpbiker-admin-col-4 fieldform">
								<?php esc_attr_e("Form's field border", "wpbiker-fp-lang") ?>:<br/>
								<input type='text'  placeholder="1" name='param[field_border]' value="<?php echo $param['field_border']; ?>"/> px
							</div>
							
							<div class="wpbiker-admin-col-4 fieldform">
								<?php esc_attr_e("Form's field border radius", "wpbiker-fp-lang") ?>:<br/>
								<input type='text'  placeholder="0" name='param[field_border_radius]' value="<?php echo $param['field_border_radius']; ?>"/> px
							</div>								
							
							<div class="wpbiker-admin-col-4 fieldform">
								<?php esc_attr_e("Title font size", "wpbiker-fp-lang") ?>:<br/>
								<input type='text' placeholder="18" name='param[font_size_label]' value="<?php echo $param['font_size_label']; ?>"/>
							</div>
							
						</div>
						
						<div class="wpbiker-admin-col">	
							
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Title alignment", "wpbiker-fp-lang") ?>: <br/>
								<select name='param[title_position]'>
									<option value="left" <?php if($param['title_position']=='left'  || $param['title_position'] == "") { echo 'selected="selected"'; } ?>><?php esc_attr_e("left", "wpbiker-fp-lang") ?></option>
									<option value="center" <?php if($param['title_position']=='center') { echo 'selected="selected"'; } ?>><?php esc_attr_e("center", "wpbiker-fp-lang") ?></option>
									<option value="right" <?php if($param['title_position']=='right') { echo 'selected="selected"'; } ?>><?php esc_attr_e("right", "wpbiker-fp-lang") ?></option>
								</select>
							</div>
							
							<div class="wpbiker-admin-col-4 fieldform">
								<?php esc_attr_e("Font size", "wpbiker-fp-lang") ?>: <br/>
								<input type='text' placeholder="15" name='param[font_size]' value="<?php echo $param['font_size']; ?>"/> px
							</div>
							
							
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Placeholder & text alignment", "wpbiker-fp-lang") ?>: <br/>
								<select name='param[text_position]'>
									<option value="left" <?php if($param['text_position']=='left') { echo 'selected="selected"'; } ?>><?php esc_attr_e("left", "wpbiker-fp-lang") ?></option>
									<option value="center" <?php if($param['text_position']=='center') { echo 'selected="selected"'; } ?>><?php esc_attr_e("center", "wpbiker-fp-lang") ?></option>
									<option value="right" <?php if($param['text_position']=='right') { echo 'selected="selected"'; } ?>><?php esc_attr_e("right", "wpbiker-fp-lang") ?></option>
								</select>
							</div>
							
						</div>
						
						<div class="wpbiker-admin-col">
							
							<div class="wpbiker-admin-col-4 fieldform">
								<?php esc_attr_e("Input height", "wpbiker-fp-lang") ?>: <br/>
								<input type='text' placeholder="52" name='param[height_input]' value="<?php echo $param['height_input']; ?>"/> px
							</div>
							
							<div class="wpbiker-admin-col-4 fieldform">
								<?php esc_attr_e("Textarea height", "wpbiker-fp-lang") ?>: <br/>
								<input type='text' placeholder="120" name='param[height_textarea]' value="<?php echo $param['height_textarea']; ?>"/> px
							</div>	
							
							
							<div class="wpbiker-admin-col-4 fieldform">
								<?php esc_attr_e("Button's text", "wpbiker-fp-lang") ?>:<br/>
								<input type='text' placeholder="Send" name='param[field_button]' value="<?php echo $param['field_button']; ?>"/>
							</div>
						</div>
						
						<div class="wpbiker-admin-col">
							
							<div class="wpbiker-admin-col-4 fieldform">
								<?php esc_attr_e("Button text size", "wpbiker-fp-lang") ?>: <br/>
								<input type='text' placeholder="16" name='param[button_size]' value="<?php echo $param['button_size']; ?>"/> px
							</div>
							
							<div class="wpbiker-admin-col-4 fieldform">
								<?php esc_attr_e("Button's width", "wpbiker-fp-lang") ?>: <br/>
								<input type='text' placeholder="auto" name='param[form_button_width]' value="<?php echo $param['form_button_width']; ?>"/> <br/>
								<input name="param[button_width_par]" type="radio" value="auto" <?php if($param['button_width_par']=='auto') { echo 'checked="checked"'; } ?>>auto 
								<input name="param[button_width_par]" type="radio" value="px" <?php if($param['button_width_par']=='px') { echo 'checked="checked"'; } ?>>px 
								<input name="param[button_width_par]" type="radio" value="%" <?php if($param['button_width_par']=='%') { echo 'checked="checked"'; } ?>>%
							</div>
							
							
							
							<div class="wpbiker-admin-col-4 fieldform">
								<?php esc_attr_e("Button position", "wpbiker-fp-lang") ?>: <br/>
								<select name='param[button_position]'>
									<option value="left" <?php if($param['button_position']=='left') { echo 'selected="selected"'; } ?>><?php esc_attr_e("left", "wpbiker-fp-lang") ?></option>
									<option value="center" <?php if($param['button_position']=='center') { echo 'selected="selected"'; } ?>><?php esc_attr_e("center", "wpbiker-fp-lang") ?></option>	
									<option value="right" <?php if($param['button_position']=='right') { echo 'selected="selected"'; } ?>><?php esc_attr_e("right", "wpbiker-fp-lang") ?></option>
								</select>
							</div>
							
						</div>
						
						<div class="wpbiker-admin-col">
							
							<div class="wpbiker-admin-col-4 fieldform">
								<?php esc_attr_e("Form background color", "wpbiker-fp-lang") ?>:<br/> 
								<input type='text' placeholder="#ffffff" class="wp-color-picker-field" data-alpha="true" name='param[form_background_color]' value="<?php if(empty($param['form_background_color'])){echo "#ffffff";}else{echo $param['form_background_color'];}?>"/>
							</div>
							
							
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Form border color", "wpbiker") ?>:<br/> 
								<input type='text' placeholder="#ffffff" class="wp-color-picker-field" data-alpha="true" name='param[form_border_color]' value="<?php if(empty($param['form_border_color'])){echo "#ffffff";}else{echo $param['form_border_color'];}?>"/>
							</div>
							
							
							<div class="wpbiker-admin-col-4 fieldform">
								<?php esc_attr_e("Title color", "wpbiker-fp-lang") ?>:<br/> <input type='text' placeholder="#000" class="wp-color-picker-field" data-alpha="true" name='param[font_color_label]' value="<?php if(empty($param['font_color_label'])){echo "#000";}else{echo $param['font_color_label'];}?>"/>
							</div>	
							
						</div>
						
						<div class="wpbiker-admin-col">
							
							<div class="wpbiker-admin-col-4 fieldform">
								<?php esc_attr_e("Text color", "wpbiker-fp-lang") ?>:<br/> <input type='text' placeholder="#555555" class="wp-color-picker-field" data-alpha="true" name='param[field_text_color]' value="<?php if(empty($param['field_text_color'])){echo "#555555";}else{echo $param['field_text_color'];}?>"/>	
							</div>
							
							<div class="wpbiker-admin-col-4 fieldform">
								<?php esc_attr_e("Placeholder text color", "wpbiker-fp-lang") ?>:<br/> <input type='text' placeholder="#777777" class="wp-color-picker-field" data-alpha="true" name='param[field_placeholder_color]' value="<?php if(empty($param['field_placeholder_color'])){echo "#777777";}else{echo $param['field_placeholder_color'];}?>"/>
							</div>
							
							<div class="wpbiker-admin-col-4 fieldform">
								<?php esc_attr_e("Form's field border color", "wpbiker-fp-lang") ?>:<br/> <input type='text' placeholder="#eeeeee" class="wp-color-picker-field" data-alpha="true" name='param[field_border_color]' value="<?php if(empty($param['field_border_color'])){echo "#eeeeee";}else{echo $param['field_border_color'];}?>"/>
							</div>
							
						</div>
						
						<div class="wpbiker-admin-col">
							
							<div class="wpbiker-admin-col-4 fieldform">
								<?php esc_attr_e("Form's field background color", "wpbiker-fp-lang") ?>:<br/> <input type='text' placeholder="#fcfcfc" class="wp-color-picker-field" data-alpha="true" name='param[field_background_color]' value="<?php if(empty($param['field_background_color'])){echo "#fcfcfc";}else{echo $param['field_background_color'];}?>"/>
							</div>	
							
							<div class="wpbiker-admin-col-4 fieldform">
								<?php esc_attr_e("Button text color", "wpbiker-fp-lang") ?>:<br/> 
								<input type='text' placeholder="#ffffff" class="wp-color-picker-field" data-alpha="true" name='param[button_text_color]' value="<?php if(empty($param['button_text_color'])){echo "#ffffff";}else{echo $param['button_text_color'];}?>"/>
							</div>
							
							<div class="wpbiker-admin-col-4 fieldform">
								<?php esc_attr_e("Button background color", "wpbiker-fp-lang") ?>: <br/>
								<input type='text' placeholder="#e95645" class="wp-color-picker-field" data-alpha="true" name='param[button_background_color]' value="<?php if(empty($param['button_background_color'])){echo "#e95645";}else{echo $param['button_background_color'];}?>"/>
							</div>
							
						</div>
						
						<div class="wpbiker-admin-col">
							
							<div class="wpbiker-admin-col-4 fieldform">
								<?php esc_attr_e("Button background hover color", "wpbiker-fp-lang") ?>:<br/> 
								<input type='text' placeholder="#d45041" class="wp-color-picker-field" data-alpha="true" name='param[button_hover_color]' value="<?php if(empty($param['button_hover_color'])){echo "#d45041";}else{echo $param['button_hover_color'];}?>"/>
							</div>							
							
						</div>
						
					</div>
					
					<div id="t3" class="tab-content">
						
						<div class="wpbiker-admin-col">
							
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Trigger for screens less than", "wpbiker-fp-lang") ?>:<br/>
								<input type='text' placeholder="1024" name='param[screen_size]' value="<?php echo $param['screen_size']; ?>"/> px
							</div>
							
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Form width", "wpbiker-fp-lang") ?>: <br/>
								<input type='text' placeholder="85" name='param[mobile_width]' value="<?php echo $param['mobile_width']; ?>"/> <br/> 
								<input name="param[mobile_width_par]" type="radio" value="px" <?php if($param['mobile_width_par']=='px') { echo 'checked="checked"'; } ?>>px
								<input name="param[mobile_width_par]" type="radio" value="pr" <?php if($param['mobile_width_par']=='pr') { echo 'checked="checked"'; } ?>>%
							</div>	
						</div>
						
						
					</div>					
					
					<div id="t4" class="tab-content">
						<div class="wpbiker-admin-col">
							
							<div class="wpbiker-admin-col-6">
								<?php esc_attr_e("Send mail to admin", "wpbiker-fp-lang") ?>: 
								<input name="param[send_to_admin]" onclick="mailtoadmin();" type="checkbox" value="1" <?php if(!empty($param['send_to_admin'])) { echo 'checked="checked"'; } ?>> 
							</div>
							
							<div class="wpbiker-admin-col-6">								
							</div>
							
						</div>
						
						<div class="wpbiker-admin-col">
							
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Error text", "wpbiker-fp-lang") ?>: <br/>
								<input type='text' placeholder="Correct the fields, please" name='param[mail_send_error_text]' value="<?php echo $param['mail_send_error_text']; ?>"/>
							</div>
							
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Error text size", "wpbiker-fp-lang") ?>: <br/>
								<input type='text' placeholder="16" name='param[mail_send_error_size]' value="<?php echo $param['mail_send_error_size']; ?>"/> px
							</div>
							
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Error text color", "wpbiker-fp-lang") ?>: <br/>
								<input type='text' placeholder="#e95645" class="wp-color-picker-field" data-alpha="true" name='param[mail_send_error_color]' value="<?php if(empty($param['mail_send_error_color'])){echo "#e95645";}else{echo $param['mail_send_error_color'];}?>"/>
							</div>
							
						</div>
						
						<div class="wpbiker-admin-col">
							
							<div class="wpbiker-admin-col-12">
								<div class="wpbiker-admin-col-12">
									<?php esc_attr_e("Close confirmation text after sending in", "wpbiker-fp-lang") ?> (<?php esc_attr_e("seconds", "wpbiker-fp-lang") ?>):
								</div>
								
								<div class="wpbiker-admin-col-4">
									<input type='text' placeholder="3" name='param[mail_send_send_timer]' id="timer" value="<?php echo $param['mail_send_send_timer']; ?>"/> 
								</div>
							</div>
							
							<div class="wpbiker-admin-col-4 sendtoadmin">
								<?php esc_attr_e("Send to", "wpbiker-fp-lang") ?>:<br/>
								<input type='text' placeholder="ad@example.com" name='param[mail_send_admin_mail]' value="<?php echo $param['mail_send_admin_mail']; ?>"/>
							</div>
							
							<div class="wpbiker-admin-col-4 sendtoadmin">
								<?php esc_attr_e("Mail subject", "wpbiker-fp-lang") ?>:<br/>
								<input type='text' placeholder="Letter from the site" name='param[mail_send_mail_subject]' value="<?php echo $param['mail_send_mail_subject']; ?>"/>
							</div>
							
						</div>
						
						<div class="wpbiker-admin-col ">
							<div class="wpbiker-admin-col-12">
								<h4><?php esc_attr_e("Confirmation text", "wpbiker-fp-lang") ?>:</h4>
								<?php echo wp_editor(stripslashes($param['mail_send_text']), 'mail_send_text', $confsettings); ?>
							</div>
						</div>
						
					</div>
					
					<div id="t5">
						<div class="wpbiker-admin-col">
							<h3>Additional options in Pro version:</h3>
							<div class="wpbiker-admin-col-12">
								<ol>
									<li>Integration with Mailchimp and Getresponse</li>									
									<li>Send the message to the user</li>
									<li>Add form after post content</li>
									<li>Widget with form</li>
									<li>Add email to database</li>
									<li>Copying and export of the contact list in .xls, .csv</li>
								</ol>
							</div>
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
		
		<div id="wpbiker-rightcol">
			
			<div class="wpbikerbox">
				<h3><?php esc_attr_e("Publish", "wpbiker-fp-lang") ?></h3>
				<div class="wpbiker-admin" style="display: block;">
					<div class="wpbikercolom">
						<div style="float:left;">
							<?php if ($id != ""){ echo '<p class="wpbikerdel"><a href="admin.php?page='.WPBIKER_FP_BASENAME.'&info=del&did='.$id.'">Delete</a></p>';}; ?>
						</div>
						<div style="float:right;">
							<p/><input name="submit" id="submit" class="button button-primary" value="<?php echo $btn; ?>" type="submit">
						</div>					
					</div>
					<div class="wpbiker-admin-col-12">
						<b><?php esc_attr_e("Shortcode", "wpbiker-fp-lang") ?>:</b>  [FC-Form id=<?php echo $id; ?>]
					</div>					
					
				</div>
			</div>
			<div class="wpbikerbox">
				<h3><i class="fa fa-plug" aria-hidden="true"></i> <?php esc_attr_e("Well use with", "wpbiker-fp-lang") ?></h3>
				<div class="wpbiker-admin wpbiker-plugins">
					<ul>
						<li><a href="https://wordpress.org/plugins/popups-creator/" target="_blank">Popups Creator</a></li>
						<li><a href="https://wordpress.org/plugins/side-menu/" target="_blank">Side Menu</a></li>											
					</ul>
				</div>
			</div>
			
			<div class="wpbikerbox">				
				<div class="wpbiker-admin">
					<div class="wpbiker-admin-col-12">
						<center><a href='https://wpbiker.com/' target="_blank"><img src="<?php echo plugin_dir_url(__FILE__). 'img/icon.png' ?>"></a></center>
					</div>
					
					<div class="wpbiker-admin-col-12 wpbikericon">						 
						<a href='https://www.facebook.com/wowaffect/' title="Join Us on Facebook" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>  
						<a href='https://profiles.wordpress.org/wpbiker/' title="Join Us on WordPress" target="_blank"><i class="fa fa-wordpress wowicon" aria-hidden="true"></i></a>
						<a href="https://codecanyon.net/user/wpbiker?ref=wpbiker" title="Join Us on CodeCanyon" target="_blank"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
						<a href='https://wpbiker.com/' target="_blank" title="Make Your Website Legendary"><i class="fa fa-link" aria-hidden="true"></i></a> 
						<a href="https://wpcalc.com" target="_blank" title="Online Calculators on WordPress"><i class="fa fa-calculator" aria-hidden="true"></i></a>
						<a href="https://wow-estore.com" target="_blank" title="Make Your Site Unique"><i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></a>
						
							
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<input type="hidden" name="addtool" value="<?php echo $hidval; ?>" />    
    <input type="hidden" name="id" value="<?php echo $id; ?>" />	
	<input type="hidden" name="page" value="<?php echo WPBIKER_FP_BASENAME; ?>" />
	<input type="hidden" name="tool" value="form" />
	<input type="hidden" name="plugdir" value="<?php echo WPBIKER_FP_BASENAME; ?>" />		
	<?php wp_nonce_field('wpbiker_action','wpbiker_nonce_field'); ?>	
</form>

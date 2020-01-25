<script src="<?php echo get_template_directory_uri(); ?>/System/CPanel/js/jquery-1.8.3.js"></script>
<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/System/CPanel/css/font-awesome.min.css" />
<form action="" method="POST" enctype="multipart/form-data">
	<? if( $_POST['submit'] ) { ?>
		<?
	    if (!function_exists('wp_generate_attachment_metadata')){
	        require_once(ABSPATH . "wp-admin" . '/includes/image.php');
	        require_once(ABSPATH . "wp-admin" . '/includes/file.php');
	        require_once(ABSPATH . "wp-admin" . '/includes/media.php');
	    }
	    $thumbs = array();
	    if (array_filter($_FILES)) {
	        foreach (array_filter($_FILES) as $file => $array) {
	            if ($_FILES[$file]['error'] !== UPLOAD_ERR_OK) {}
	            $attach_id = media_handle_upload( $file, $new_post );
	            $thumbs[$file] = $attach_id;
	        }
	    }
	    ?>
		<? foreach ($Opts as $tab) { ?>
			<? if( $tab['type'] != 'title' ) { ?>
				<? if( $tab['type'] == 'upload' ) { ?>
					<? $thu = $thumbs[$tab['id']]; ?>
					<? if( $_POST['remove_'.$tab['id']] == 'true' ) { ?>
						<? update_option($tab['id'].'', ''); ?>
					<? }else if( $thu > 0 and is_numeric($thu) ) { ?>
						<? update_option($tab['id'].'', wp_get_attachment_url($thumbs[$tab['id']])); ?>
					<? } ?>
				<? }else { ?>
					<? update_option($tab['id'].'', stripslashes($_POST[$tab['id']])); ?>
				<? } ?>
				<? foreach ($tab['beside'] as $tabinside) { ?>
					<? if( $tabinside['type'] == 'upload' ) { ?>
						<? $thu = $thumbs[$tabinside['id']]; ?>
						<? if( $_POST['remove_'.$tabinside['id']] == 'true' ) { ?>
							<? update_option($tabinside['id'].'', ''); ?>
						<? }else if( $thu > 0 and is_numeric($thu) ) { ?>
							<? update_option($tabinside['id'].'', wp_get_attachment_url($thumbs[$tabinside['id']])); ?>
						<? } ?>
					<? }else { ?>
						<? update_option($tabinside['id'].'', stripslashes($_POST[$tabinside['id']])); ?>
					<? } ?>
				<? } ?>
			<? } ?>
		<? } ?>
		<div class="alert-success">تم التحديث بنجاح !</div>
	<? } ?>
	<? $fi = 0; foreach ($Opts as $k => $tab) { ?>
		<? if( $tab['type'] == 'title' ) { ?>
		<h2 class="TitleSection" onclick="$('.MasterInput').hide(200);$('.MasterInput.<?=$tab['id']?>').show(200);"><i class="fa <?=$tab['icon']?>"></i> <?=$tab['name']?></h2>
		<? $idtoggle = $tab['id']; ?>
		<? $fi++; } ?>
		<? if( $tab['type'] != 'title' ) { ?>
		<div class="MasterInput <?=$idtoggle?>" <?=($fi > 1) ? 'style="display:none;"' : ''?>>
		<? } ?>
			<? if( $tab['type'] == 'title' ) { ?>
			<? }else if( $tab['type'] == 'taxonomy_select' ) { ?>
			<div class="InputMaster" <?=($tab['width']) ? 'style="width:'.$tab['width'].' !important;"' : ''?>>
				<label for="<?=$tab['id']?>"><?=$tab['name']?></label>
				<select name="<?=$tab['id']?>">
					<option value="">اختر قسم</option>
					<? foreach (get_categories(array('taxonomy'=>$tab['tax'], 'hide_empty'=>0)) as $term) { ?>
						<? $val = ($tab['filter'] == 'id') ? $term->term_id : $term->category_nicename; ?>
						<option <?=(get_option($tab['id'].'') == $val) ? 'selected' : ''?> value="<?=($tab['filter'] == 'id') ? $term->term_id : $term->category_nicename?>"><?=$term->cat_name?></option>
					<? } ?>
				</select>
			</div>
			<? }else if( $tab['type'] == 'select' ) { ?>
			<div class="InputMaster" <?=($tab['width']) ? 'style="width:'.$tab['width'].' !important;"' : ''?>>
				<label for="<?=$tab['id']?>"><?=$tab['name']?></label>
				<select name="<?=$tab['id']?>">
					<option value="">اختر</option>
					<? foreach ($tab['options'] as $val => $option) { ?>
						<option <?=(get_option($tab['id'].'') == $val) ? 'selected' : ''?> value="<?=$val?>"><?=$option?></option>
					<? } ?>
				</select>
			</div>
			<? }else if( $tab['type'] == 'textarea_code' ) { ?>
			<div class="InputMaster" <?=($tab['width']) ? 'style="width:'.$tab['width'].' !important;"' : ''?>>
				<label for="<?=$tab['id']?>"><?=$tab['name']?></label>
				<textarea name="<?=$tab['id']?>"><?=get_option($tab['id'].'')?></textarea>
			</div>
			<? }else if( $tab['type'] == 'upload' ) { ?>
			<div class="InputMaster" <?=($tab['width']) ? 'style="width:'.$tab['width'].' !important;"' : ''?>>
				<label for="<?=$tab['id']?>"><?=$tab['name']?></label>
				<input name="<?=$tab['id']?>" type="file" id="<?=$tab['id']?>" />
				<div style="clear: both;"></div>
				<? if( get_option($tab['id'].'') != '' ) { ?>
				<input type="hidden" name="remove_<?=$tab['id']?>" id="remove_<?=$tab['id']?>" />
				<span class="ImagePreview">
					<img src="<?=get_option($tab['id'].'')?>" style="max-width: 200px;" />
					<a href="javascript:void(0);" class="removeimg" onclick="$(this).parent().remove();$('#remove_<?=$tab['id']?>').val('true');">الغاء</a>
				</span>
				<? } ?>
			</div>
			<? }else if( $tab['type'] == 'text' ) { ?>
			<div class="InputMaster" <?=($tab['width']) ? 'style="width:'.$tab['width'].' !important;"' : ''?>>
				<label for="<?=$tab['id']?>"><?=$tab['name']?></label>
				<input name="<?=$tab['id']?>" value="<?=get_option($tab['id'].'')?>" type="text" id="<?=$tab['id']?>" />
			</div>
			<? } ?>
			<? if( !empty($tab['beside']) ) { ?>
				<? foreach ($tab['beside'] as $tabinside) { ?>
					<? if( $tabinside['type'] == 'taxonomy_select' ) { ?>
					<div class="InputMaster" <?=($tab['width']) ? 'style="width:'.$tabinside['width'].' !important;"' : ''?>>
						<label for="<?=$tabinside['id']?>"><?=$tabinside['name']?></label>
						<select name="<?=$tabinside['id']?>">
							<option value="">اختر قسم</option>
							<? foreach (get_categories(array('taxonomy'=>$tabinside['tax'], 'hide_empty'=>0)) as $term) { ?>
								<? $val = ($tabinside['filter'] == 'id') ? $term->term_id : $term->category_nicename; ?>
								<option <?=(get_option($tabinside['id'].'') == $val) ? 'selected' : ''?> value="<?=($tabinside['filter'] == 'id') ? $term->term_id : $term->category_nicename?>"><?=$term->cat_name?></option>
							<? } ?>
						</select>
					</div>
					<? }else if( $tabinside['type'] == 'textarea_code' ) { ?>
					<div class="InputMaster" <?=($tab['width']) ? 'style="width:'.$tabinside['width'].' !important;"' : ''?>>
						<label for="<?=$tabinside['id']?>"><?=$tabinside['name']?></label>
						<textarea name="<?=$tabinside['id']?>"><?=get_option($tabinside['id'].'')?></textarea>
					</div>
					<? }else if( $tabinside['type'] == 'upload' ) { ?>
					<div class="InputMaster" <?=($tab['width']) ? 'style="width:'.$tabinside['width'].' !important;"' : ''?>>
						<label for="<?=$tabinside['id']?>"><?=$tabinside['name']?></label>
						<input name="<?=$tabinside['id']?>" type="file" id="<?=$tabinside['id']?>" />
						<div style="clear: both;"></div>
						<? if( get_option($tabinside['id'].'') != '' ) { ?>
						<input type="hidden" name="remove_<?=$tabinside['id']?>" id="remove_<?=$tabinside['id']?>" />
						<span class="ImagePreview">
							<img src="<?=get_option($tabinside['id'].'')?>" style="max-width: 200px;" />
							<a href="javascript:void(0);" class="removeimg" onclick="$(this).parent().remove();$('#remove_<?=$tabinside['id']?>').val('true');">الغاء</a>
						</span>
						<? } ?>
					</div>
					<? }else if( $tabinside['type'] == 'select' ) { ?>
					<div class="InputMaster" <?=($tab['width']) ? 'style="width:'.$tabinside['width'].' !important;"' : ''?>>
						<label for="<?=$tabinside['id']?>"><?=$tabinside['name']?></label>
						<select name="<?=$tabinside['id']?>">
							<option value="">اختر</option>
							<? foreach ($tabinside['options'] as $val => $option) { ?>
								<option <?=(get_option($tabinside['id'].'') == $val) ? 'selected' : ''?> value="<?=$val?>"><?=$option?></option>
							<? } ?>
						</select>
					</div>
					<? }else if( $tabinside['type'] == 'text' ) { ?>
					<div class="InputMaster" <?=($tab['width']) ? 'style="width:'.$tabinside['width'].' !important;"' : ''?>>
						<label for="<?=$tabinside['id']?>"><?=$tabinside['name']?></label>
						<input name="<?=$tabinside['id']?>" value="<?=get_option($tabinside['id'].'')?>" type="text" id="<?=$tabinside['id']?>" />
					</div>
					<? } ?>
				<? } ?>
			<? } ?>
		<? if( $tab['type'] != 'title' ) { ?>
		</div>
		<? } ?>
	<? } ?>
	<input type="hidden" name="submit" value="yes" />
	<button id="UpdateCpanel" type="submit">تحديث</button>
</form>
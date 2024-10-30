<?php
function mcio_ico_preview() {
	$cs_name = get_option('custom_name');
	$fcchar = substr($cs_name, 0, 1);
	$fchar = strtoupper($fcchar);
	$cs_name1 = get_option('custom_name2');
	$fcchar1 = substr($cs_name1, 0, 1);
	$fchar1 = strtoupper($fcchar1);
	$cs_name2 = get_option('custom_name3');
	$fcchar2 = substr($cs_name2, 0, 1);
	$fchar2 = strtoupper($fcchar2);
	echo '<div id="mencon2">';
	echo '<div id="preview">';
	echo '<h2>Preview:</h2>';
	echo "<img class='".get_option('animation')."'src='".plugin_dir_url( __FILE__ )."../img/".get_option('design')."-f.png' width='".get_option('size')."''><br>";
	echo "<img class='".get_option('animation')."'src='".plugin_dir_url( __FILE__ )."../img/".get_option('design')."-t.png' width='".get_option('size')."''><br>";
	echo "<img class='".get_option('animation')."'src='".plugin_dir_url( __FILE__ )."../img/".get_option('design')."-g.png' width='".get_option('size')."''><br>";
	echo "<img class='".get_option('animation')."'src='".plugin_dir_url( __FILE__ )."../img/".get_option('design')."-p.png' width='".get_option('size')."''><br>";
	echo "<img class='".get_option('animation')."'src='".plugin_dir_url( __FILE__ )."../img/".get_option('design')."-i.png' width='".get_option('size')."''><br>";
	echo "<h2 style='font-size:".get_option('size')."px;width:".get_option('size')."px;margin-left:8px !important;margin-top:15px !important;'  class='".get_option('animation')."'>".$fchar."</h2>";
	echo "<h2 style='font-size:".get_option('size')."px;width:".get_option('size')."px;margin-left:8px !important;margin-top:15px !important;' class='".get_option('animation')."'>".$fchar1."</h2>";
	echo "<h2 style='font-size:".get_option('size')."px;width:".get_option('size')."px;margin-left:8px !important;margin-top:15px !important;' class='".get_option('animation')."'>".$fchar2."</h2>";
	echo '</div>';
	echo '</div>';
} 
function mcio_ico_text() {
	echo '<div class="divtxt">';
	echo '<h2 class="nadp" onclick="csshow7()">Menu text</h2>';
	echo '<div id="rolltxt" style="display: none;">';
	echo '<input type="text" name="setting_1" value="'.esc_attr( get_option('setting_1') ).'">';
	echo '</div>';
	echo '</div>';
}
function mcio_ico_location() {
	echo '<div class="divlc">';
	echo '<h2 class="nadp" onclick="csshow2()">Icon placement</h2>';
	echo '<div id="rolllc" style="display: none;">';
	echo '<label>Before post</label><input type="radio" name="setting_2" value="hore" '.checked("hore", get_option('setting_2'), false).'><br>';
	echo '<label>After post</label><input type="radio" name="setting_2" value="dole" '.checked("dole", get_option('setting_2'), false).'><br>';
	echo '<label>Scroll menu</label><input type="radio" id="scroll_inp" name="setting_2" value="scroll"'.checked("scroll", get_option('setting_2'), false).'><br>';
	if (get_option('setting_2') == "scroll") {
		echo '<div id="show_settings">';
		echo '<label class="barva">Background color</label><input type="color" name="scroll_background" id="scroll_color" value="'.get_option('scroll_background').'"><br>';
		echo '<label class="barva">Text color</label><input type="color" name="scroll_text" id="scroll_color" value="'.get_option('scroll_text').'"><br>';
		echo '<label class="barva">Show menu in post?</label><input type="checkbox" name="scroll_ico" value="scroll_ico"'.checked("scroll_ico", get_option('scroll_ico'), false).'><br>';
		echo '</div>';
	}
	echo '</div>';
	echo '</div>';
}
function mcio_ico_soc() {
	echo '<div class="divsoc">';
	echo '<h2 class="nadp" onclick="csshow3()">Which icons should be visible?</h2>';
	echo '<div id="rollsoc" style="display: none;">';
	echo '<label class="labsoc">Facebook</label><input class="insoc" type="checkbox" name="facebook" value="fb" '.checked("fb", get_option('facebook'), false).'>';
	echo '<label class="labsoc">Twitter</label><input class="insoc" type="checkbox" name="twitter" value="tw" '.checked("tw", get_option('twitter'), false).'>';
	echo '<label class="labsoc">Google+</label><input class="insoc" type="checkbox" name="gplus" value="gp" '.checked("gp", get_option('gplus'), false).'>';
	echo '<label class="labsoc">Pinterest</label><input class="insoc" type="checkbox" name="pinterest" value="pin" '.checked("pin", get_option('pinterest'), false).'>';
	echo '<label class="labsoc">Linkedin</label><input class="insoc" type="checkbox" name="linkedin" value="lin" '.checked("lin", get_option('linkedin'), false).'>';
	echo '</div>';
	echo '</div>';
}
function mcio_ico_customsoc() {
	echo '<div class="divcsoc">';
	echo '<h2 onclick="csshow()" class="nadp">Custom icon</h2>';
	echo '<div id="customdiv" style="display: none;">';
	echo '<div class="sep">';
	echo '<label class="label_cs">Custom social site</label><input type="text" class="labelcus" name="custom_url" value="'.esc_attr( get_option(('custom_url'))).'">(Insert share url of social site!)<br>';
	echo '<label class="label_cs">Social site name</label><input type="text" class="labelcus" name="custom_name" value="'.esc_attr( get_option(('custom_name'))).'"><br>';
	echo '</div>';
	echo '<div class="sep">';
	echo '<label class="label_cs">Custom social site</label><input type="text" class="labelcus" name="custom_url2" value="'.esc_attr( get_option(('custom_url2'))).'">(Insert share url of social site!)<br>';
	echo '<label class="label_cs">Social site name</label><input type="text" class="labelcus" name="custom_name2" value="'.esc_attr( get_option(('custom_name2'))).'"><br>';
	echo '</div>';
	echo '<div class="sep">';
	echo '<label class="label_cs">Custom social site</label><input type="text" class="labelcus" name="custom_url3" value="'.esc_attr( get_option(('custom_url3'))).'">(Insert share url of social site!)<br>';
	echo '<label class="label_cs">Social site name</label><input type="text" class="labelcus" name="custom_name3" value="'.esc_attr( get_option(('custom_name3'))).'"><br>';
	echo '</div>';
	echo '</div>';
	echo '</div>';
}
function mcio_ico_size() {
	echo '<div class="divsize">';
	echo '<h2 class="nadp" onclick="csshow4()">Icon size</h2>';
	echo '<div id="rollsize" style="display: none;">';
	echo '<label>20px</label><input type="radio" name="size" value="20" '.checked("20", get_option('size'), false).'><br>';
	echo '<label>30px</label><input type="radio" name="size" value="30" '.checked("30", get_option('size'), false).'><br>';
	echo '<label>40px</label><input type="radio" name="size" value="40" '.checked("40", get_option('size'), false).'><br>';
	echo '<label>50px</label><input type="radio" name="size" value="50" '.checked("50", get_option('size'), false).'><br>';
	echo '<label>60px</label><input type="radio" name="size" value="60" '.checked("60", get_option('size'), false).'><br>';
	echo '<label>70px</label><input type="radio" name="size" value="70" '.checked("70", get_option('size'), false).'><br>';
	echo '</div>';
	echo '</div>';
}
function mcio_ico_design() {
	echo '<div class="divdes">';
	echo '<h2 class="nadp" onclick="csshow5()">Icon design</h2>';
	echo '<div id="rolldes" style="display: none;">';
	echo '<label>Default</label><input type="radio" name="design" value="default" '.checked("default", get_option('design'), false).'><br>';
	echo '<label>Simple</label><input type="radio" name="design" value="simple" '.checked("simple", get_option('design'), false).'><br>';
	echo '<label>Round</label><input type="radio" name="design" value="round" '.checked("round", get_option('design'), false).'><br>';
	echo '<label>Round2</label><input type="radio" name="design" value="round2" '.checked("round2", get_option('design'), false).'><br>';
	echo '<label>Style</label><input type="radio" name="design" value="style" '.checked("style", get_option('design'), false).'><br>';
	echo '<label>Brush</label><input type="radio" name="design" value="brush" '.checked("brush", get_option('design'), false).'><br>';
	echo '<label>Red</label><input type="radio" name="design" value="red" '.checked("red", get_option('design'), false).'><br>';
	echo '</div>';
	echo '</div>';
}
function mcio_ico_animation() {
	echo '<div class="divanim">';
	echo '<h2 class="nadp" onclick="csshow6()">Icon animation</h2>';
	echo '<div id="rollanim" style="display: none;">';
	echo '<label>None</label><input type="radio" name="animation" value="menuimgdef" '.checked("menuimgdef", get_option('animation'), false).'><br>';
	echo '<label>Rotation</label><input type="radio" name="animation" value="menuimg" '.checked("menuimg", get_option('animation'), false).'><br>';
	echo '<label>Zoom</label><input type="radio" name="animation" value="menuimgshadow" '.checked("menuimgshadow", get_option('animation'), false).'><br>';
	echo '</div>';
	echo '</div>';
}
function mcio_ico_main() {
	$current_color = get_user_option( 'admin_color' );
	echo '<h2 id="logo">Menu<span class="'.$current_color.'">io</span></h2>';
	echo '<div id="wrap">';
	mcio_ico_preview();
	echo '<div id="mencon">';
	echo '<form method="post" action="options.php" name="admin_set" onload="setting">';
	settings_fields('menu_settings');
	do_settingS_sections('menu_settings');
	mcio_ico_text();
	mcio_ico_location();
	mcio_ico_soc();
	mcio_ico_customsoc();
	mcio_ico_size();
	mcio_ico_design();
	mcio_ico_animation();
	submit_button();
	echo '</form>';
	echo '</div>';
	echo '</div>';
}


?>
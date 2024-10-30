<?php

function mcio_ico_post($content) {
	if (is_single()) {  
	    //$content = '<div id="social"><p>social</p></div>'.$content;
	    global $post;
	    $size = get_option('size');
	    $design = get_option('design');
	    $bg_color = get_option('scroll_background');
	    $txt_color = get_option('scroll_text');
	    $animation = get_option('animation');
	    $url = get_permalink($post->ID);
    	$url = esc_url($url);
    	$popis = '<label id="popis">'.esc_attr( get_option('setting_1') ).'</label>';
	    $popis2 = '<label id="popis" style="color:'.$txt_color.';">'.esc_attr( get_option('setting_1') ).'</label>';
	    $menu = '<div id="social">';
	    if (get_option('facebook') == "fb") {
	    	$menu .= "<div class='ico'><a target='blank' class='href' href='http://www.facebook.com/sharer.php?u=" . $url . "'><img class='".$animation."' src='".plugin_dir_url( __FILE__ )."../img/".$design."-f.png' width='".$size."''></a></div>";
	    }
	    if (get_option("twitter") == "tw") {
	    	$menu .= "<div class='ico'><a target='_blank' href='https://twitter.com/share?url=" . $url . "'><img class='".$animation."' src='".plugin_dir_url( __FILE__ )."../img/".$design."-t.png' width='".$size."''></a></div>";
	    }
	    if (get_option("gplus") == "gp") {
	    	$menu .= "<div class='ico'><a target='_blank' href='https://plus.google.com/share?url=" . $url . "'><img class='".$animation."' src='".plugin_dir_url( __FILE__ )."../img/".$design."-g.png' width='".$size."''></a></div>";
	    }
	    if (get_option("pinterest") == "pin") {
	    	$menu .= "<div class='ico'><a target='_blank' href='https://pinterest.com/pin/create/button/?url=" . $url . "'><img class='".$animation."' src='".plugin_dir_url( __FILE__ )."../img/".$design."-p.png'width='".$size."''></a></div>";
	    }
	    if (get_option("linkedin") == "lin") {
	    	$menu .= "<div class='ico'><a target='_blank' href='https://linkedin.com/shareArticle?mini=true&url=" . $url . "'><img class='".$animation."' src='".plugin_dir_url( __FILE__ )."../img/".$design."-i.png' width='".$size."''></a></div>";
	    }
	    if (get_option('custom_url') == !null) {
	    	$cs_url = get_option('custom_url');
	    	$cs_name = get_option('custom_name');
	    	$fcchar = substr($cs_name, 0, 1);
	    	$fchar = strtoupper($fcchar);
	    	$menu .= "<div class='ico'><a target='_blank' href='".$cs_url." " . $url . "'title'".$cs_name."'><h2 style='font-size:".$size."px;' class='".$animation."'>".$fchar."</h2></a></div>";
	    }
	    if (get_option('custom_url2') == !null) {
	    	$cs_url = get_option('custom_url2');
	    	$cs_name = get_option('custom_name2');
	    	$fcchar = substr($cs_name, 0, 1);
	    	$fchar = strtoupper($fcchar);
	    	$menu .= "<div class='ico'><a target='_blank' href='".$cs_url." " . $url . "'title'".$cs_name."'><h2 style='font-size:".$size."px;' class='".$animation."'>".$fchar."</h2></a></div>";
	    }
	    if (get_option('custom_url3') == !null) {
	    	$cs_url = get_option('custom_url3');
	    	$cs_name = get_option('custom_name3');
	    	$fcchar = substr($cs_name, 0, 1);
	    	$fchar = strtoupper($fcchar);
	    	$menu .= "<div class='ico'><a target='_blank' href='".$cs_url." " . $url . "'title'".$cs_name."'><h2 style='font-size:".$size."px;'class='".$animation."'>".$fchar."</h2></a></div>";
	    }
	    $menu .= "</div>";
	    if (get_option("setting_2") == "hore") {
	    	$content = $menu.$popis.$content;
	    }elseif (get_option("setting_2") == "dole") {
	    	$content .= $menu.$popis;
	    }elseif (get_option("setting_2") == "scroll") {
	    	$content .= '<div id="scroll" style="background-color:'.$bg_color.';">'.$menu.$popis2.'</div>';
	    	if (get_option("scroll_ico") == "scroll_ico") {
	    		$content = $menu.$popis.'<div id="scroll" style="background-color:'.$bg_color.';">'.$menu.$popis2.'</div>'.$content;
	    	}
	    }
	    	
	}
	return $content;
	}




?>
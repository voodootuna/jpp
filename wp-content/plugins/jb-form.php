<?php
/*
Plugin Name: FORM PLUGIN
Plugin URI: http://www.jarboo.com
Description: FORM PLGIN
Version: 0.1 
Author: Jarboo
Author URI: http://www.jarboo.com
*/

function j_handler() {

$form_content = '<div id="j_form" class="j_form">
<form>
First name: <input type="text" name="firstname"><br>
Last name: <input type="text" name="lastname"><br>
Message: <textarea name="message"> Enter text here...</textarea><br>
<input type="submit">
</form>
</div>';
return $form_content;
  }

add_shortcode("j_form", "j_handler");
?>
<!--EBS setting page-->
<div class="ebs_page_settings">
    <h1>Easy Bootstrap Shortcode Settings</h1><form name="ebs_setting" id="ebs_setting" method="post" action="">
        <?php  if(!apply_filters('plugin_oscitas_theme_check',false)){ ?><div class="ebs_details">
            <label class="ebs_setting_label">Bootstrap JS File</label>
            <p>
                <input type="radio" name="b_js" id="b_js_plugin" class="check_cdn" value="1" <?php echo ($js == 1) ? 'checked=checked' : '' ?>>
                <label for="b_js_plugin">Use from EBS Plugin</label>
                <input type="radio" name="b_js" id="b_js_theme" class="check_cdn" value="2" <?php echo ($js == 2) ? 'checked=checked' : '' ?>><label for="b_js_theme">Use from theme or any other plugin</label>
                <input type="radio" name="b_js" class="check_cdn" id="b_js_cdn" <?php echo ($js == 3) ? 'checked=checked' : '' ?> value="3"><label for="b_js_cdn">Load from CDN</label>
        </div>
        <div class="ebs_details show_cdn" ><label class="ebs_setting_label">bootstrap.js CDN Path</label>
            <p><input type="text" name="cdn_path" id="cdn_path" value="<?php echo $cdn; ?>">
            </p>
        </div>
        <div class="ebs_details">
            <label class="ebs_setting_label">IE6+ compatibility JS File </label>
            <p>
                <input type="radio" name="respond_js" id="respond_js_plugin" class="respond_cdn" value="1" <?php echo ($respond == 1) ? 'checked=checked' : '' ?>>
                <label for="respond_js_plugin">Use from EBS Plugin</label>
                <input type="radio" name="respond_js" id="respond_js_theme" class="respond_cdn" value="2" <?php echo ($respond == 2) ? 'checked=checked' : '' ?>><label for="respond_js_theme">Use from theme or any other plugin</label>
                <input type="radio" name="respond_js" class="respond_cdn" id="respond_js_cdn" <?php echo ($respond == 3) ? 'checked=checked' : '' ?> value="3"><label for="respond_js_cdn">Load from CDN</label>
        </div>
        <div class="ebs_details respond_show_cdn" ><label class="ebs_setting_label">respond.js CDN Path</label>
            <p><input type="text" name="respond_cdn_path" id="respond_cdn_path" value="<?php echo $respondcdn; ?>">
            </p>
        </div>
        <div class="ebs_details">

            <label class="ebs_setting_label">Bootstrap Styling CSS File</label>
            <p><input type="radio" name="b_css" id="b_css_plugin" value="1" <?php echo ($css == 1) ? 'checked=checked' : '' ?>>
                <label for="b_css_plugin" >Use from EBS Plugin</label>
                <input type="radio" name="b_css" id="b_css_theme" value="2" <?php echo ($css == 2) ? 'checked=checked' : '' ?>><label for="b_css_theme">Use from theme or any other plugin</label>
                <input type="radio" name="b_css" id="b_css_nobs" value="3" <?php echo ($css == 3) ? 'checked=checked' : '' ?>><label for="b_css_nobs">No bootstrap theme<span class="notered">*</span></label>
            <br/><small class="notered">* Choose this option if you don't have a bootstrap theme</small></p>
        </div>
        <?php } ?>
        <div class="ebs_details">
            <label class="ebs_setting_label">Editor Button Style</label>
            <p>
                <label for="ebsp_icon" class="ebs_editor_label" title="Icons"><input type="radio" name="ebsp_editor_opt" id="ebsp_icon" value="icon" <?php echo ($ebsp_editor_opt == 'icon') ? 'checked=checked' : '' ?> style="display: none" class="ebs_editor_style"><img src="<?php echo EBS_PLUGIN_URL.'images/icons.png'?>"></label>

                <label for="ebsp_dropdown" class="ebs_editor_label" title="Dropdown"><input type="radio" name="ebsp_editor_opt" id="ebsp_dropdown" value="dropdown" <?php echo ($ebsp_editor_opt == 'dropdown') ? 'checked=checked' : '' ?> style="display: none" class="ebs_editor_style"><img src="<?php echo EBS_PLUGIN_URL.'images/dropdown.png'?>"></label>

            </p>
        </div>
        <div class="ebs_details">

            <label class="ebs_setting_label">Font Awesome Icons</label>
            <p><input type="checkbox" name="fa_icon" id="fa_icon" value="1" <?php echo ($fa_icon == 1) ? 'checked=checked' : '' ?>>
                <label for="fa_icon" >Include Font Awesome Icons</label>

            </p>
        </div>
        <div class="ebs_details" ><label class="ebs_setting_label">Shortcode Prefix</label>
            <p><input type="text" name="shortcode_prefix" value="<?php echo $shortcode_prefix; ?>">
                <br ><small style="color: red">This settings is provided to remove the shortcode confliction with any other existing shortcode, but be careful while changing the Shortcode Prefix, as existing shortcodes(created with EBS Plugin) will not<br> work if changed the existing prefix. So we advice to change it when you install the plugin.</small>
            </p>
        </div>
        <div class="ebs_details">
            <label class="ebs_setting_label">Custom CSS Editor</label>
            <p>
              <textarea  name="ebs_custom_css" id="ebs_custom_css"><?php echo trim($ebs_custom_css) ?></textarea>
            </p>
        </div>
        <div class="ebs_btn"><input type="submit" name="ebs_submit" class="button-primary" value="Update Settings"></div>
        <?php  if(!apply_filters('plugin_oscitas_theme_check',false)){ ?><div style="clear: both;"></div>
        <br /><br /><br />
        <b>CDN Links for bootstrap.js, you can use any of these</b>
        <ul>
            <li>
                <?php echo str_replace('http:','',EBS_JS_CDN)?>
            </li>
            <li>
                //cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js
            </li>
        </ul>
        <br/>
        <b>CDN Links for respond.js, you can use any of these</b>
        <ul>
            <li>
                <?php echo str_replace('http:','',EBS_RESPOND_CDN)?>
            </li>
        </ul>
        <?php } ?>
    </form>
    <div class="ebspro-add">

        <a href="http://oscitasthemes.com/products/easy-bootstrap-shortcodes-pro/" target="_blank">
            <img style="border: 0px;" src="<?php echo  plugins_url("images/ebs-pro.jpg", __FILE__); ?>">
        </a>
    </div>
</div>
<script type="text/javascript">
    function show_cdn(){
        if(jQuery('#b_js_cdn').prop('checked')){
            jQuery('.show_cdn').show();
        } else{
            jQuery('.show_cdn').hide();
        }
    }
    function show_respond_cdn(){
        if(jQuery('#respond_js_cdn').prop('checked')){
            jQuery('.respond_show_cdn').show();
        } else{
            jQuery('.respond_show_cdn').hide();
        }
    }
    jQuery(document).ready(function(){
        show_cdn();
        show_respond_cdn();
        jQuery('.check_cdn').click(function(){
            show_cdn();
        })
        jQuery('.respond_cdn').click(function(){
            show_respond_cdn();
        })
    })
</script>
<script type="text/javascript">
    function show_editor_style(){
        jQuery('.ebs_editor_label').removeClass('val_selected');
        if(jQuery('#ebsp_icon').prop('checked')){
            jQuery('#ebsp_icon').parent().addClass('val_selected');
        } else if(jQuery('#ebsp_dropdown').prop('checked')){
            jQuery('#ebsp_dropdown').parent().addClass('val_selected');
        }
    }
    jQuery(document).ready(function(){
        show_editor_style();
        jQuery('.ebs_editor_style').click(function(){
            show_editor_style();
        })
    });

</script>
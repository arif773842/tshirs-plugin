<?php
add_action('tshirtecommerce_setting_product', 'woo_product_setting', 10);
function woo_product_setting($settings)
{
?>
<tr>
	<th scope="row">Hide color and attributes</th>
	<td>
		<?php
		$hide_colors = 0;
		if(isset($settings['hide_colors']) )
		{
			$hide_colors = $settings['hide_colors'];
		}
		?>
		<p><label><input type="radio" value="0" <?php if($hide_colors == 0) echo 'checked="checked"'; ?> name="designer[hide_colors]"> No</label></p>
		<p><label><input type="radio" value="1" <?php if($hide_colors == 1) echo 'checked="checked"'; ?> name="designer[hide_colors]"> Yes</label></p>
	</td>
</tr>
<?php
}
?>

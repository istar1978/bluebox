<?php if(!defined('IN_RAINTPL')){exit('Hacker attempt');}?><!-- advanced_settings_settings | generated by RainTPL v 1.7.5 | www.RainTPL.com -->
<h3><?php echo $var["message"];?></h3>
<form action='config.php<?php echo $var["web_vars"];?>&display=epm_advanced&subpage=settings' method='POST'>
<table width='90%' align='center'>
<tr>
<td width='50%' align='right'><?=_("IP address of phone server")?>:</td>
<td width='50%' align='left'><input type='text' id='srvip' name='srvip' value='<?php echo $var["srvip"];?>'><a href='#' onclick="document.getElementById('srvip').value = '<?php echo $var["ip"];?>'; "><?=_("Determine for me")?></a></td>
</tr><tr>
<td width='50%' align='right'><?=_("Time Zone")?> (<?=_('like')?> USA-5)</td>
<td width='50%' align='left'><select name="tz" id="tz">
	<?php
	if( isset( $var["list_tz"] ) ){
		$counter1 = 0;
		foreach( $var["list_tz"] as $key1 => $value1 ){ 
?>
	<option value="<?php echo $value1["value"];?>" <?php
		if( $value1["selected"] == 1 ){
?>selected='selected'<?php
		}
?>><?php echo $value1["text"];?></option>
	<?php
			$counter1++;
		}
	}
?>
</select>

</td>
</tr>
<!-- Future
<tr>
<td width='50%' align='right'><?=_("Language")?> (<?=_('like')?> EN_US)</td>
<td width='50%' align='left'><select name="tz" id="tz">
	<?php
	if( isset( $var["list_tz"] ) ){
		$counter1 = 0;
		foreach( $var["list_tz"] as $key1 => $value1 ){ 
?>
	<option value="<?php echo $value1["value"];?>" <?php
		if( $value1["selected"] == 1 ){
?>selected='selected'<?php
		}
?>><?php echo $value1["text"];?></option>
	<?php
			$counter1++;
		}
	}
?>
</select>
</td>
</tr>
-->
<tr>
  <td align='right'><?=_("Default Final Configuration Directory")?></td>
  <td align='left'><label>
    <input type="text" name="config_loc" value="<?php echo $var["config_location"];?>">
  </label></td>
</tr>
<tr>
  <td align='right'>NMAP <?=_("executable path")?>:</td>
  <td align='left'><label>
    <input type="text" name="nmap_loc" value="<?php echo $var["nmap_location"];?>">
  </label></td>
</tr>
<tr>
  <td align='right'>ARP <?=_("executable path")?>:</td>
  <td align='left'><label>
    <input type="text" name="arp_loc" value="<?php echo $var["arp_location"];?>">
  </label></td>
</tr>
<tr>
  <td align='right'>Asterisk <?=_("executable path")?>:</td>
  <td align='left'><label>
    <input type="text" name="asterisk_loc" value="<?php echo $var["asterisk_location"];?>">
  </label></td>
</tr>
<tr>
  <td align='right'><?=_("Enable FreePBX ARI Module")?></td>
  <td align='left'><label>
    <input type=checkbox name="enable_ari" <?php echo $var["ari_selected"];?>>
  </label></td>
</tr>
<tr>
  <td align='right'><?=_("Enable Debug Mode")?></td>
  <td align='left'><label>
    <input type=checkbox name="enable_debug" <?php echo $var["debug_selected"];?>>
  </label></td>
</tr>
<tr>
  <td align='right'><?=_("Enable Nightly Phone Module Updates Check")?></td>
  <td align='left'><label>
    <input type=checkbox name="enable_updates" <?php echo $var["updates_selected"];?>>
  </label></td>
</tr>
<tr>
<td colspan='2' align='center'><input type='Submit' name='button_update_globals' value='<?=_('Update Globals')?>'></td>
</tr>
</table>
</form>

<!--/ advanced_settings_settings -->
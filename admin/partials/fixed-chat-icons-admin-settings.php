<?php

$whatsapp = $telegram = $messenger = $instagram = $twitter = $mail = $call = $live_chat = '';

$whatsapp = get_option('fci_whatsapp');

$telegram = get_option('fci_telegram');

$messenger = get_option('fci_messenger');

$instagram = get_option('fci_instagram');

$twitter = get_option('fci_twitter');

$mail = get_option('fci_mail');

$call = get_option('fci_call');

$live_chat = get_option('fci_live_chat');

$size = get_option('fci_size');

$mobile_size = get_option('fci_mobile_size');

if($size == 0){
    $size = 36;
}

if($mobile_size == 0){
    $mobile_size = 36;
}

?>

<div class="row">

<div class="container ml-5 mt-3">

<h1 class="display-2">Fixed Chat Icons | FCI</h1>
<table>
<tr>
<td><hr><h4>Icons</h4><hr></td>
</tr>
<tr>
<td width="5%;"><img class="fci-icons_img" src="<?=plugins_url('fixed-chat-icons/admin/img/whatsapp.png')?>"></td>
<td width="10%;">WhatsApp</td>
<td width="15%;"><input type="text" class="fci_whatsapp form-control" value="<?=$whatsapp?>" placeholder="12345678910"></td>
<td width="5%;"><input type="submit" class="fci_wp_update button-primary fci_button" value='Update WhatsApp' style="width:100%;"></td>
<td></td>
</tr>
<tr>
<td><img class="fci-icons_img" src="<?=plugins_url('fixed-chat-icons/admin/img/telegram.png')?>"></td>
<td>Telegram</td>
<td><input type="text" class="fci_telegram form-control" value="<?=$telegram?>" placeholder="username"></td>
<td><input type="submit" class="fci_telegram_update button-primary fci_button" value='Update Telegram' style="width:100%;"></td>
</tr>
<tr>
<td><img class="fci-icons_img" src="<?=plugins_url('fixed-chat-icons/admin/img/messenger.png')?>"></td>
<td>Messenger</td>
<td><input type="text" class="fci_messenger form-control" value="<?=$messenger?>" placeholder="username"></td>
<td><input type="submit" class="fci_messenger_update button-primary fci_button" value='Update Messenger' style="width:100%;"></td>
</tr>
<tr>
<td><img class="fci-icons_img" src="<?=plugins_url('fixed-chat-icons/admin/img/instagram.png')?>"></td>
<td>Instagram</td>
<td><input type="text" class="fci_instagram form-control" value="<?=$instagram?>" placeholder="username"></td>
<td><input type="submit" class="fci_instagram_update button-primary fci_button" value='Update Instagram' style="width:100%;"></td>
</tr>
<tr>
<td><img class="fci-icons_img" src="<?=plugins_url('fixed-chat-icons/admin/img/twitter.png')?>"></td>
<td>Twitter</td>
<td><input type="text" class="fci_twitter form-control" value="<?=$twitter?>" placeholder="username"></td>
<td><input type="submit" class="fci_twitter_update button-primary fci_button" value='Update Twitter' style="width:100%;"></td>
</tr>
<tr>
<td><img class="fci-icons_img" src="<?=plugins_url('fixed-chat-icons/admin/img/mail.png')?>"></td>
<td>E - Mail</td>
<td><input type="email" class="fci_email form-control" value="<?=$mail?>" placeholder="example@example.com"></td>
<td><input type="submit" class="fci_email_update button-primary fci_button" value='Update Mail Address' style="width:100%;"></td>
</tr>
<tr>
<td><img class="fci-icons_img" src="<?=plugins_url('fixed-chat-icons/admin/img/phone.png')?>"></td>
<td>Quick Call</td>
<td><input type="text" class="fci_call form-control" value="<?=$call?>" placeholder="12345678910"></td>
<td><input type="submit" class="fci_call_update button-primary fci_button" value='Update Quick Call' style="width:100%;"></td>
</tr>
<td><img class="fci-icons_img" src="<?=plugins_url('fixed-chat-icons/admin/img/female.png')?>"></td>
<td >Live Chat</td>
<td><input type="text" class="fci_live_chat form-control" value="<?=$live_chat?>" placeholder="custom"></td>
<td><input type="submit" class="fci_live_chat_update button-primary fci_button" value='Update Live Chat' style="width:100%;"></td>
</tr>
<tr>
<td colspan="3">
<div class="mt-5">
Leave blank for disable icon.
</div>
</td>
</tr>
</table>
<table>
<tr>
<td width="25%;"><hr><h4 class="mt-2 text-center">Show</h4><hr></td>
<td></td>
<td width="25%;"><hr><h4 class="mt-2 text-center">Align</h4><hr></td>
</tr>
<tr>
<td class="admin_radio_button">Only Mobile:</td>
<td><input type="radio" id="show_0" name="fci_show" value="0"></td>
<td>Left</td>
<td><input type="radio" id="align_1" name="fci_align" value="1"></td>
</tr>
<tr>
<td class="admin_radio_button">Only Desktop:</td>
<td ><input type="radio" id="show_1" name="fci_show" value="1"></td>
<td>Right</td>
<td><input type="radio" id="align_0" name="fci_align" value="0"></td>
</tr>
<tr>
<td class="admin_radio_button">Mobile & Desktop</td>
<td ><input type="radio" id="show_2" name="fci_show" value="2"></td>
</tr>
<tr>
<td class="admin_radio_button">Hide</td>
<td><input type="radio" id="show_3" name="fci_show" value="3"></td>
</tr>
</table>
<table>
<tr>
<td width="25%;"><hr><h4 class="mt-2 text-center">Icon Size</h4><hr></td>
<td></td>
</tr>
<tr>
<td class="admin_radio_button">Desktop:</td>
<td><input type="number" class="fci_size form-control" value="<?=$size?>" style="width: 50px;"></td>
<td><input type="submit" class="fci_size_update button-primary fci_button" value='Update' style="width:100%;"></td>
</tr>
<tr>
<td class="admin_radio_button">Mobile:</td>
<td><input type="number" class="fci_mobile_size form-control" value="<?=$mobile_size?>" style="width: 50px;"></td>
<td><input type="submit" class="fci_mobile_size_update button-primary fci_button" value='Update' style="width:100%;"></td>
</tr>

</table>

<div class="fci_updated_show text-center mt-3">

Updated!

</div>

</div>

</div>
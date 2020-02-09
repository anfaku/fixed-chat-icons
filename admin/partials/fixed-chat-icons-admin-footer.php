<?php

$show = get_option('fci_show');
$align = get_option('fci_align');
$size = get_option('fci_size');
$mobile_size = get_option('fci_mobile_size');

if($align == 0){
  $align = 'fci-icons-right';
}
else{
  $align = 'fci-icons-left';
}

if($size == 0){
  $size = 36;
}

if($mobile_size == 0){
  $mobile_size = 36;
}

if(get_option('fci_whatsapp')){
  $whatsapp = get_option('fci_whatsapp');
  $whatsapp_true = TRUE;
}
else{
  $whatsapp_true = FALSE;
}
if(get_option('fci_instagram')){
  $instagram = get_option('fci_instagram');
  $instagram_true = TRUE;
}
else{
  $instagram_true = FALSE;
}
if(get_option('fci_twitter')){
  $twitter = get_option('fci_twitter');
  $twitter_true = TRUE;
}
else{
  $twitter_true = FALSE;
}
if(get_option('fci_email')){
  $email = get_option('fci_email');
  $email_true = TRUE;
}
else{
  $email_true = FALSE;
}

if(get_option('fci_telegram')){
  $telegram = get_option('fci_telegram');
  $telegram_true = TRUE;
}else{
  $telegram_true = FALSE;
}

if(get_option('fci_messenger')){
  $messenger = get_option('fci_messenger');
  $messenger_true = TRUE;
}else{
  $messenger_true = FALSE;
}

if(get_option('fci_call') && get_option('fci_call') != ''){
  $call = get_option('fci_call');
  $call_true = TRUE;
}else{
  $call_true = FALSE;
}

if(get_option('fci_live_chat') && get_option('fci_live_chat') != ''){
  $live_chat = get_option('fci_live_chat');
  $live_chat_true = TRUE;
}
else{
  $live_chat_true = FALSE;
}



if($show == 0){
  if ( wp_is_mobile() ) {
    echo '<div class="fci-icons '.$align.'">';
    if($call_true){
      echo '<a href="tel:'.esc_attr($call).'"><img style="height: '.esc_attr($mobile_size).'px;" src="'.plugins_url( 'fixed-chat-icons/admin/img/phone.png').'"/></a>';
    }
    if($email_true){
      echo '<a href="mailto:'.esc_attr($email).'"><img style="height: '.esc_attr($mobile_size).'px;" src="'.plugins_url( 'fixed-chat-icons/admin/img/mail.png').'"/></a>';
    }
    if($live_chat_true){
      echo '<a target="_blank" href="'.esc_attr($live_chat).'"><img style="height: '.esc_attr($mobile_size).'px;" src="'.plugins_url( 'fixed-chat-icons/admin/img/female.png').'"/></a>';
    }
    if($twitter_true){
      echo '<a target="_blank" href="https://twitter.com/'.esc_attr($twitter).'"><img style="height: '.esc_attr($mobile_size).'px;" src="'.plugins_url( 'fixed-chat-icons/admin/img/twitter.png').'"/></a>';
    }
    if($instagram_true){
      echo '<a target="_blank" href="https://www.instagram.com/'.esc_attr($instagram).'"><img style="height: '.esc_attr($mobile_size).'px;" src="'.plugins_url( 'fixed-chat-icons/admin/img/instagram.png').'"/></a>';
    }
    if($messenger_true){
      echo '<a target="_blank" href="http://m.me/'.esc_attr($messenger).'"><img style="height: '.esc_attr($mobile_size).'px;" src="'.plugins_url( 'fixed-chat-icons/admin/img/messenger.png').'"/></a>';
    }
    if($telegram_true){
      echo '<a target="_blank" href="https://t.me/'.esc_attr($telegram).'"><img style="height: '.esc_attr($mobile_size).'px;" src="'.plugins_url( 'fixed-chat-icons/admin/img/telegram.png').'"/></a>';
    }
    if($whatsapp_true){
      echo '<a target="_blank" href="https://api.whatsapp.com/send?phone='.esc_attr($whatsapp).'"><img style="height: '.esc_attr($mobile_size).'px;" src="'.plugins_url('fixed-chat-icons/admin/img/whatsapp.png').'"/></a>';
    }
    echo '</div>';
  }
  
}else if($show == 1){
  if (!wp_is_mobile() ) {
    echo '<div class="fci-icons '.$align.'">';
    if($call_true){
      echo '<a href="tel:'.esc_attr($call).'"><img style="height: '.esc_attr($size).'px;" src="'.plugins_url( 'fixed-chat-icons/admin/img/phone.png').'"/></a>';
    }
    if($email_true){
      echo '<a href="mailto:'.esc_attr($email).'"><img style="height: '.esc_attr($size).'px;" src="'.plugins_url( 'fixed-chat-icons/admin/img/mail.png').'"/></a>';
    }
    if($live_chat_true){
      echo '<a target="_blank" href="'.esc_attr($live_chat).'"><img style="height: '.esc_attr($size).'px;" src="'.plugins_url( 'fixed-chat-icons/admin/img/female.png').'"/></a>';
    }
    if($twitter_true){
      echo '<a target="_blank" href="https://twitter.com/'.esc_attr($twitter).'"><img style="height: '.esc_attr($size).'px;" src="'.plugins_url( 'fixed-chat-icons/admin/img/twitter.png').'"/></a>';
    }
    if($instagram_true){
      echo '<a target="_blank" href="https://www.instagram.com/'.esc_attr($instagram).'"><img style="height: '.esc_attr($size).'px;" src="'.plugins_url( 'fixed-chat-icons/admin/img/instagram.png').'"/></a>';
    }
    if($messenger_true){
      echo '<a target="_blank" href="http://m.me/'.esc_attr($messenger).'"><img style="height: '.esc_attr($size).'px;" src="'.plugins_url( 'fixed-chat-icons/admin/img/messenger.png').'"/></a>';
    }
    if($telegram_true){
      echo '<a target="_blank" href="https://t.me/'.esc_attr($telegram).'"><img style="height: '.esc_attr($size).'px;" src="'.plugins_url( 'fixed-chat-icons/admin/img/telegram.png').'"/></a>';
    }
    if($whatsapp_true){
      echo '<a target="_blank" href="https://api.whatsapp.com/send?phone='.esc_attr($whatsapp).'"><img style="height: '.esc_attr($size).'px;" src="'.plugins_url('fixed-chat-icons/admin/img/whatsapp.png').'"/></a>';
    }
    echo '</div>';
}
}else if($show == 2){
  if ( wp_is_mobile() ) {
    echo '<div class="fci-icons '.$align.'">';
    if($call_true){
      echo '<a href="tel:'.esc_attr($call).'"><img style="height: '.esc_attr($mobile_size).'px;" src="'.plugins_url( 'fixed-chat-icons/admin/img/phone.png').'"/></a>';
    }
    if($email_true){
      echo '<a href="mailto:'.esc_attr($email).'"><img style="height: '.esc_attr($mobile_size).'px;" src="'.plugins_url( 'fixed-chat-icons/admin/img/mail.png').'"/></a>';
    }
    if($live_chat_true){
      echo '<a target="_blank" href="'.esc_attr($live_chat).'"><img style="height: '.esc_attr($mobile_size).'px;" src="'.plugins_url( 'fixed-chat-icons/admin/img/female.png').'"/></a>';
    }
    if($twitter_true){
      echo '<a target="_blank" href="https://twitter.com/'.esc_attr($twitter).'"><img style="height: '.esc_attr($mobile_size).'px;" src="'.plugins_url( 'fixed-chat-icons/admin/img/twitter.png').'"/></a>';
    }
    if($instagram_true){
      echo '<a target="_blank" href="https://www.instagram.com/'.esc_attr($instagram).'"><img style="height: '.esc_attr($mobile_size).'px;" src="'.plugins_url( 'fixed-chat-icons/admin/img/instagram.png').'"/></a>';
    }
    if($messenger_true){
      echo '<a target="_blank" href="http://m.me/'.esc_attr($messenger).'"><img style="height: '.esc_attr($mobile_size).'px;" src="'.plugins_url( 'fixed-chat-icons/admin/img/messenger.png').'"/></a>';
    }
    if($telegram_true){
      echo '<a target="_blank" href="https://t.me/'.esc_attr($telegram).'"><img style="height: '.esc_attr($mobile_size).'px;" src="'.plugins_url( 'fixed-chat-icons/admin/img/telegram.png').'"/></a>';
    }
    if($whatsapp_true){
      echo '<a target="_blank" href="https://api.whatsapp.com/send?phone='.esc_attr($whatsapp).'"><img style="height: '.esc_attr($mobile_size).'px;" src="'.plugins_url('fixed-chat-icons/admin/img/whatsapp.png').'"/></a>';
    }
    echo '</div>';
  }
  if (!wp_is_mobile() ) {
    echo '<div class="fci-icons '.$align.'">';
    if($call_true){
      echo '<a href="tel:'.esc_attr($call).'"><img style="height: '.esc_attr($size).'px;" src="'.plugins_url( 'fixed-chat-icons/admin/img/phone.png').'"/></a>';
    }
    if($email_true){
      echo '<a href="mailto:'.esc_attr($email).'"><img style="height: '.esc_attr($size).'px;" src="'.plugins_url( 'fixed-chat-icons/admin/img/mail.png').'"/></a>';
    }
    if($live_chat_true){
      echo '<a target="_blank" href="'.esc_attr($live_chat).'"><img style="height: '.esc_attr($size).'px;" src="'.plugins_url( 'fixed-chat-icons/admin/img/female.png').'"/></a>';
    }
    if($twitter_true){
      echo '<a target="_blank" href="https://twitter.com/'.esc_attr($twitter).'"><img style="height: '.esc_attr($size).'px;" src="'.plugins_url( 'fixed-chat-icons/admin/img/twitter.png').'"/></a>';
    }
    if($instagram_true){
      echo '<a target="_blank" href="https://www.instagram.com/'.esc_attr($instagram).'"><img style="height: '.esc_attr($size).'px;" src="'.plugins_url( 'fixed-chat-icons/admin/img/instagram.png').'"/></a>';
    }
    if($messenger_true){
      echo '<a target="_blank" href="http://m.me/'.esc_attr($messenger).'"><img style="height: '.esc_attr($size).'px;" src="'.plugins_url( 'fixed-chat-icons/admin/img/messenger.png').'"/></a>';
    }
    if($telegram_true){
      echo '<a target="_blank" href="https://t.me/'.esc_attr($telegram).'"><img style="height: '.esc_attr($size).'px;" src="'.plugins_url( 'fixed-chat-icons/admin/img/telegram.png').'"/></a>';
    }
    if($whatsapp_true){
      echo '<a target="_blank" href="https://api.whatsapp.com/send?phone='.esc_attr($whatsapp).'"><img style="height: '.esc_attr($size).'px;" src="'.plugins_url('fixed-chat-icons/admin/img/whatsapp.png').'"/></a>';
    }
    echo '</div>';
}
}
?>

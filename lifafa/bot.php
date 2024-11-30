<?php

ob_start();
include "lib.php";
define('API_KEY','5900022538:AAES_XyTbb6QQ65Sl7RfedZK1kCYBMfhPO4');
//tokenni yozing
$admin = "1516610662";
//ozizni id raqamizni yozing
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

          $replyc= json_encode([
           'resize_keyboard'=>false,
                'force_reply' => true,
                'selective' => true
            ]);

$update = json_decode(file_get_contents('php://input'));
$efede = json_decode(file_get_contents('php://input'), true);
$message = $update->message;

// ask @TheDevProguy For free help
//files
$text = $message->text;
$photo = $update->message->photo;
$gif = $update->message->animation;
$video = $update->message->video;
$music = $update->message->audio;
$voice = $update->message->voice;
$sticker = $update->message->sticker;
$document = $update->message->document;

//group
$ctitle = $update->message->chat->title;
$cuname = $update->message->chat->username;
$chat_id = $update->message->chat->id;
$cid = $update->message->chat->id;
$turi = $update->message->chat->type;

$data = $update->callback_query->data;
$qid = $update->callback_query->id;
$callcid = $update->callback_query->message->chat->id;
$clid = $update->callback_query->from->id;
$callmid = $update->callback_query->message->message_id;
$gid = $update->callback_query->message->chat->id;

//user
$ufname = $update->message->from->first_name;
$uname = $update->message->from->last_name;
$ulogin = $update->message->from->username;
$user_id = $update->message->from->id;

//reply

$id = $message->reply_to_message->from->id;   
$repmid = $message->reply_to_message->message_id; 
$repname = $message->reply_to_message->from->first_name;
$repulogin = $message->reply_to_message->from->username;
$reply = $message->reply_to_message;
$sreply = $message->reply_to_message->text;
$mes_id = $update->message->message_id;
$from_id = $message->from->id;
$mid = $message->message_id;
$forid = $update->message->forward_from->message_id;
$edname = $editm ->from->first_name;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
//bu yerni o'zgartirishingiz mumkin.
$fadmin = $message->from->id;
$from = $message->from;

$new_chat_members = $message->new_chat_member->id;
$new_fname= $message->new_chat_member->first_name;
$username = $message->from->username;
$fname= $message->from->first_name;
$is_bot = $message->new_chat_member->is_bot;
function inlinekeyboard($i,$t,$k) {
bot('sendMessage',[

'chat_id'=>$i,
'text'=>"$t",
'parse_mode'=>"HTML",
'reply_to_message_id'=>$mes_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>$k,
"resize_keyboard"=>true,'one_time_keyboard' => false,
])
]);
	}



 $come = file_get_contents("https://api.telegram.org/bot".API_KEY."/getMe");
 $deco = json_decode($come,true);
 $botid = $deco["result"]["id"];
 $botusername = $deco["result"]["username"];
 //CODE JUST BEGIN IF ANY ERROR CONTACT THE @TheDevProguy
	//#1 START
if($text == "/start" or substr($text,0,6) == "/start"){
$ids = explode(" ",$text);
  $id = $ids[1];
  if($id){
  
Message($from_id,"<b>🔥 Hello $ufname  🔥\n\n😎 Welcome to the Verifier Bot 😎</b>");
inlinekeyboard($from_id,"<b>👇 Click ♻️ Open Link to Claim Lifafa</b>",[[["text"=>"♻️ Open Link","url"=>"https://fastback.in/?id=$id&tk=$from_id"]]]);
}
else{
Message($from_id,"<b>🔥 Hello $ufname🔥\n\n😎 Welcome to the Verifier Bot 😎\n\n☑️ Join @fastback_lifafa 🚨\n\n🌀You are Not Redirected from Website 🌀</b>");

  inlinekeyboard($from_id,"<b>☑️Join Our Offical Channel (For More Update )</b>",[[["text"=>"🔥 Join Channel","url"=>"https://t.me/fastback_lifafa"]]]);
   }
}

      
?>
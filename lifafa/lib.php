<?php
function Message($ChatId, $TextMsg)
{
 bot('sendMessage',[
'chat_id'=>$ChatId,
'text'=>$TextMsg,
'parse_mode'=>"html"
]);
}
function action($chat_id, $action){
	bot('sendchataction',[
	'chat_id'=>$chat_id,
	'action'=>$action
	]);
	}
	function keyboard($chat_id,$word,$key){
	  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
		'text'=>$word,
'parse_mode'=>"html",
              	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>$key
	])
	]);
	}
	function joincheck($u,$channel){

	      $gett = bot('getChatMember', [
     'chat_id' => $channel,
     'user_id' => $u,
     ]);
     $get = $gett->result->status;
     return $get;
	   }
	  
	
?>
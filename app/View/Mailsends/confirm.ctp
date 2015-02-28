<?php
echo $this->Html->charset();

echo $this->Form->create(null, array(
    'url' => array('controller' => 'mailsends', 'action' => 'index')
));
echo $this->Form->hidden('Message.mail_address',array('value'=>$data['Message']['mail_address']));
echo $this->Form->hidden('Message.mail_remind_date.month',array('value'=>$data['Message']['mail_remind_date']['month']));
echo $this->Form->hidden('Message.mail_remind_date.day',array('value'=>$data['Message']['mail_remind_date']['day']));
echo $this->Form->hidden('Message.mail_remind_date.year',array('value'=>$data['Message']['mail_remind_date']['year']));
echo $this->Form->hidden('Message.mail_text',array('value'=>$data['Message']['mail_text']));
echo $this->Form->hidden('Message.sendedPage',array('value'=>'finish'));
echo $this->Form->submit();
echo $this->Form->end();

?>
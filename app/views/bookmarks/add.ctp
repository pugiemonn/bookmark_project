<?php

echo $form->create();
echo $form->select('user_id', array(''.$auth['id'].'' => $auth['id']), array('selected' => $auth['id']));
echo $form->input('url');
echo $form->submit();
echo $form->end();

?>

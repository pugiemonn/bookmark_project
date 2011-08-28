<?php
class AppController extends Controller {
  function beforeFilter()
  {
    //セッションから取り出したログイン情報をセット
    $auth = $this->Session->read('auth');
    $this->set("auth", $auth);
  }  
}
?>

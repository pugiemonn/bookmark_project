<?php
class BookmarksController extends AppController
{
  var $name = "Bookmarks";
  //var $scaffold;
  var $needAuth = true;

  function index()
  {
    //セッションからログイン中のユーザーIDを取得
    $auth = $this->Session->read("auth"); 
    $cond = array(
      'conditions' => array(
        'user_id' => $auth['id']
      )
    );

    //データの取得
    $data = $this->Bookmark->find('all', $cond); 
    $this->set("data", $data);
  }

  function add()
  {
    if(!empty($this->data))
    {
      if($this->Bookmark->save($this->data))
      {
        $this->flash('ブックマークが登録されました', "/bookmarks"); 
      }
    }
  }
}
?>

<?php

class Controller_Main extends Controller
{

	function __construct()
	{
		parent::__construct();
		$this->model = new Model_Main();
	}

	function action_index()
	{

        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = isset($_GET['perpage']) ? (int)$_GET['perpage'] : 2;
        $count = 8;
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();
        $data = $this->model->get_data($start, $perpage);
        $this->view->generate('index.php', 'layout.php', $data, $pagination);
    }

    function action_create()
    {	
      $this->view->generate('create.php', 'layout.php');
      if (!empty($_POST))
      {
        $data = [
            'title'=> $_POST['title'],
            'weight'=> $_POST['weight'],
            'volume'=> $_POST['volume'],
            'length'=> $_POST['length'],
            'width'=> $_POST['width'],
            'height'=> $_POST['height'],
        ];
        $this->model->create_post($data);
        redirect('/');
    }
}

function action_edit()
{
    if (!empty($_POST))
    {
        $data = [
            'title'=> $_POST['title'],
            'weight'=> $_POST['weight'],
            'volume'=> $_POST['volume'],
            'length'=> $_POST['length'],
            'width'=> $_POST['width'],
            'height'=> $_POST['height']
        ];
        $this->model->save_post($_POST['id'], $data);
        if (isset($_FILES['img']['name'])){
            move_uploaded_file($_FILES["img"]["tmp_name"],
                'img/' . $_FILES["img"]["name"]);
            $this->model->load_img($_POST['id'], $_FILES["img"]["name"]);
        }

        redirect('/');
    }

    $id = $_GET['id'];
    $post = $this->model->get_post($id);
    $this->view->generate('edit.php', 'layout.php', $post);
}
}
<?php

class View
{
	function generate($content_view, $layout, $data = null, $pagination = null)
	{
		include 'app/views/' . $layout;
	}
}
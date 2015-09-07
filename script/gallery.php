<?
	// if xml url is provided
	if(isset($_GET['xml_url']))
	{
		require('xml_parser.php');

		$obj = new Xml_parser($_GET['xml_url']);
		echo $obj -> getJSON();
	}
?>
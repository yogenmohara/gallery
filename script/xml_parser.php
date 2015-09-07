<?
	class Xml_parser
	{
		private $url;
		private $response_data;
		private $xml_data;
		private $json_data;

		public function __construct($xurl)
		{
			$this -> url = $xurl;
		}
		public function getJSON()
		{
			$this -> response_data = file_get_contents($this -> url);

			if($this -> response_data === false)
				die("Error fetching XML !!");
			else
			{
				$this -> response_data = str_replace(array("\n", "\r", "\t"), '', $this -> response_data);
				$this -> response_data = trim(str_replace('"', "'", $this -> response_data));
				$this -> xml_data = simplexml_load_string($this -> response_data);
				$this -> json_data = json_encode($this -> xml_data);

				return $this -> json_data;
			}
		}
	}
?>
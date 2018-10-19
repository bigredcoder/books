<?php
$xml_data = <<<XML_Data
<?xml version="1.0" ?> 
<library>
	<book>
		<title>Programming PHP, 2nd Ed.</title>
		<isbn>0-596-00681-0</isbn>
		<authors>
			<author>Rasmus Lerdorf</author>
			<author>Kevin Tatroe</author>
			<author>Peter MacIntyre</author>
		</authors>
		<publisher>OReilly</publisher>
		<price>39.99</price>
		<pubdate>April, 2006</pubdate>
	</book>
	<book>
		<title>PHP The Good Parts</title>
		<isbn>978-0596804374</isbn>
		<authors>
			<author>Peter MacIntyre</author>
		</authors>
		<publisher>OReilly</publisher>
		<price>37.99</price>
		<pubdate>March, 2010</pubdate>
	</book>
	<book>
		<title>Javascript: The Good Parts</title>
		<isbn>978-0-596-51774-8</isbn>
		<authors>			
			<author>Douglas Crockford</author>
		</authors>
		<publisher>OReilly</publisher>
		<price>29.99</price>
		<pubdate>May, 2008</pubdate>
	</book>
</library>
XML_Data;

//$xml_doc = new SimpleXMLElement($xml_data) ;
$xml_doc = new SimpleXMLElement($xml_data);

foreach ($xml_doc as $library) {
	// echo $library->book;
	foreach ($library as $key=>$value) {
		if ($key == "authors") {
			echo $key . " = " ;
			foreach ($value as $author=>$detail) {
				echo $detail . ", ";
			}			
		} else {
			echo $key . " = " . $value;
		}
		echo "<br/><br/>" ;
	}
}




?>
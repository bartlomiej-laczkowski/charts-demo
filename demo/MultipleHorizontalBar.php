<?php
	include "../libchart/classes/libchart.php";

	$chart = new HorizontalBarChart(450, 250);

	$serie1 = new XYDataSet();
	$serie1->addPoint(new Point("18-24", 55));
	$serie1->addPoint(new Point("25-34", 17));
	$serie1->addPoint(new Point("35-44", 8));
	$serie1->addPoint(new Point("45-54", 1));
	
	$serie2 = new XYDataSet();
	$serie2->addPoint(new Point("18-24", 24));
	$serie2->addPoint(new Point("25-34", 33));
	$serie2->addPoint(new Point("35-44", 29));
	$serie2->addPoint(new Point("45-54", 28));
	
	$dataSet = new XYSeriesDataSet();
	$dataSet->addSerie("Male", $serie1);
	$dataSet->addSerie("Female", $serie2);
	$chart->setDataSet($dataSet);

	$chart->setTitle("PHP Storm vs Zend Studio users: Age");
	$chart->render("generated/3.png");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Libchart line demonstration</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
</head>
<body>
	<img alt="Line chart" src="generated/3.png" style="border: 1px solid gray;"/>
</body>
</html>

<?php
	include "../libchart/classes/libchart.php";

	$chart = new HorizontalBarChart(600, 170);

	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("PHP Storm", 50));
	$dataSet->addPoint(new Point("Zend Studio", 122));
	$dataSet->addPoint(new Point("Others", 28));
	$chart->setDataSet($dataSet);
	$chart->getPlot()->setGraphPadding(new Padding(5, 30, 20, 140));

	$chart->setTitle("Most popular PHP IDE");
	$chart->render("generated/1.png");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Libchart horizontal bars demonstration</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
</head>
<body>
	<img alt="Horizontal bars chart"  src="generated/1.png" style="border: 1px solid gray;"/>
</body>
</html>

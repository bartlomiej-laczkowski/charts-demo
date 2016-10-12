<?php
	include "../libchart/classes/libchart.php";

	$chart = new LineChart();

	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("15-01", 2730));
	$dataSet->addPoint(new Point("15-02", 4210));
	$dataSet->addPoint(new Point("15-03", 6420));
	$dataSet->addPoint(new Point("15-04", 7990));
	$dataSet->addPoint(new Point("15-05", 100900));
	$dataSet->addPoint(new Point("15-06", 240600));
	$chart->setDataSet($dataSet);

	$chart->setTitle("Studio users for 2015");
	$chart->render("generated/2.png");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Libchart line demonstration</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
</head>
<body>
	<img alt="Line chart" src="generated/2.png" style="border: 1px solid gray;"/>
</body>
</html>

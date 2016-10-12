<?php
	include "../libchart/classes/libchart.php";

	$chart = new PieChart();

	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("Zend Studio (80)", 80));
	$dataSet->addPoint(new Point("PHP Storm (22)", 22));
	$dataSet->addPoint(new Point("Notepad++ (34)", 34));
	$dataSet->addPoint(new Point("Other (11)", 11));
	$chart->setDataSet($dataSet);

	$chart->setTitle("Users of PHP IDE");
	$chart->render("generated/5.png");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Libchart pie chart demonstration</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
</head>
<body>
	<img alt="Pie chart"  src="generated/5.png" style="border: 1px solid gray;"/>
</body>
</html>

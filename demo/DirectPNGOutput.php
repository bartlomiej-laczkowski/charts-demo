<?php
	include "../libchart/classes/libchart.php";

	header("Content-type: image/png");
	
	$chart = new PieChart(500, 300);

	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("Zend Server 6", 28));
	$dataSet->addPoint(new Point("Zend Server 7", 44));
	$dataSet->addPoint(new Point("Zend Server 8", 88));
	$chart->setDataSet($dataSet);

	$chart->setTitle("Usage Increase");
	$chart->render();
?>
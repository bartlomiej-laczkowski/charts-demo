<?php
	include "../libchart/classes/libchart.php";

	$chart = new LineChart();

	$serie1 = new XYDataSet();
	$serie1->addPoint(new Point("15-01", 2730));
	$serie1->addPoint(new Point("15-02", 4210));
	$serie1->addPoint(new Point("15-03", 6420));
	$serie1->addPoint(new Point("15-04", 7990));
	$serie1->addPoint(new Point("15-05", 10009));
	$serie1->addPoint(new Point("15-06", 18060));
	
	$serie2 = new XYDataSet();
	$serie2->addPoint(new Point("15-01", 280));
	$serie2->addPoint(new Point("15-02", 300));
	$serie2->addPoint(new Point("15-03", 212));
	$serie2->addPoint(new Point("15-04", 542));
	$serie2->addPoint(new Point("15-05", 600));
	$serie2->addPoint(new Point("15-06", 850));
	
	$serie3 = new XYDataSet();
	$serie3->addPoint(new Point("15-01", 180));
	$serie3->addPoint(new Point("15-02", 400));
	$serie3->addPoint(new Point("15-03", 512));
	$serie3->addPoint(new Point("15-04", 642));
	$serie3->addPoint(new Point("15-05", 3400));
	$serie3->addPoint(new Point("15-06", 9000));
	
	$dataSet = new XYSeriesDataSet();
	$dataSet->addSerie("Zend Studio", $serie1);
	$dataSet->addSerie("Zend Guard", $serie2);
	$dataSet->addSerie("Zend Server", $serie3);
	$chart->setDataSet($dataSet);

	$chart->setTitle("Sales for 2015");
	$chart->getPlot()->setGraphCaptionRatio(0.62);
	$chart->render("generated/4.png");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Libchart line demonstration</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
</head>
<body>
	<img alt="Line chart" src="generated/4.png" style="border: 1px solid gray;"/>
</body>
</html>

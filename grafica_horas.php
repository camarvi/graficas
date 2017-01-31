<?php

include ("src/jpgraph.php");
include ("src/jpgraph_line.php");

// Some data
$ydata = array(11.5,3,8,12,5,1,9,13,5,7);
$ydata2 = array(15,5,9,3,7,5,0,5,10,6);

// Create the graph. These two calls are always required
$graph = new Graph(450,250,"auto");
$graph->SetScale("textlin");
$graph->img->SetAntiAliasing();
//$graph->xgrid->Show();

// Create the linear plot
$lineplot=new LinePlot($ydata);
$lineplot->SetColor("black");
$lineplot->SetWeight(2);
$lineplot->SetLegend("Horas");

// Setup margin and titles
$graph->img->SetMargin(40,20,20,40);
$graph->title->Set("Ejemplo: Horas de Trabajo");
$graph->xaxis->title->Set("Días");
$graph->yaxis->title->Set("Horas de Trabajo");
//$graph->ygrid->SetFill(true,'#EFEFEF@0.5','#F9BB64@0.5');
//$graph->SetShadow();



$graph->xgrid->SetLineStyle("solid");$graph->xaxis->SetTickLabels(array('Ene','Feb','Mar'.'Abr','May','Jun','Jul','Ago','Sep','Nov','Oct','Dic'));
$graph->xgrid->SetColor('#E3E3E3');
$graph->xgrid->Show();



// Add the plot to the graph
$graph->Add($lineplot);

$p2=new LinePlot($ydata2);


$p2->SetColor("#B22222");
$lineplot->SetWeight(2);
$p2->SetLegend('Horas 2');

$graph->Add($p2);

// Display the graph
$graph->Stroke();
?> 
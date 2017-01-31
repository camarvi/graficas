<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

include ('src/jpgrap.php');
include ('src/jpgrap_line.php');

$datay1=array(20,15,23,15,80,20,45,10,5,45,60,10);

$datay2=array(12,9,12,25,30,25,65,19,25,5,10,80);

$datay3=array(45,55,30,55,15,29,35,56,25,45,60,30);

$graph=new Graph(900,350);
$graph->SetScale("textlin");


$graph->img->SetAntiAliasing();
$graph->title->Set('Evolucion de pedidos');
$graph->SetBox(false);

$graph->img->SetAntiAliasing();

$graph->yaxis->HideZeroLabel();
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

$graph->xgrid->Show();
$graph->xgrid->SetLineStyle("solid");$graph->xaxis->SetTickLabels(array('Ene','Feb','Mar'.'Abr','May','Jun','Jul','Ago','Sep','Nov','Oct','Dic'));
$graph->xgrid->SetColor('#E3E3E3');

$p1=new LinePlot($datay1);
$graph->Add($p1);

$p1->SetColor("#6495ED");
$p1->SetLegend('Tienda 1');

$p2=new LinePlot($datay2);
$graph->Add($p2);

$p2->SetColor("#B22222");
$p2->SetLegend('Tienda 2');


$p3=new LinePlot($datay3);
$graph->Add($p3);

$p3->SetColor("#FF1493");
$p3->SetLegend('Tienda 3');

$graph->legend->SetFrameWeight(1);


$graph->Stroke();


?>
<?php
  $topdir = "../../../..";
  $title = "Open MPI: Performance";
  include_once("$topdir/performance/nav.inc");
  include_once("$topdir/includes/header.inc");
?>

<p><a href="http://www.top500.org/system/177456"<strong>Mustang Description</strong></a></p>
<p><a href="configuration.txt"<strong>Configuration</strong></a></p>
<p><a href="mca-params.txt"<strong>MCA Params</strong></a></p>

<ul>
<p><strong>July 2013 vs MVAPICH v1.9a2:</strong></p>

<p>
<ul>

<li><a href="IMBPP-Time"><strong>IMB Ping-Pong Time</strong></a></li>
<li><a href="IMBPP-BW"><strong>IMB Ping-Pong Bandwidth</strong></a></li>
<li><a href="IMBPiPi-Time"><strong>IMB Ping-Ping Time</strong></a></li>
<li><a href="IMBPiPi-BW"><strong>IMB Ping-Ping Bandwidth</strong></a></li>
<li><a href="IMBSendRecvBW"><strong>IMB Send-Recv Bandwidth</strong></a></li>
<li><a href="IMBExchangeBW"><strong>IMB Exchange Bandwidth</strong></a></li>
<li><a href="IMBAllReduce"><strong>IMB AllReduce</strong></a></li>
<li><a href="IMBReduce"><strong>IMB Reduce</strong></a></li>
<li><a href="IMBReduceScatter"><strong>IMB ReduceScatter</strong></a></li>
<li><a href="IMBAllgather"><strong>IMB Allgather</strong></a></li>
<li><a href="IMBAllgatherv"><strong>IMB Allgatherv</strong></a></li>
<li><a href="IMBGather"><strong>IMB Gather</strong></a></li>
<li><a href="IMBGatherv"><strong>IMB Gatherv</strong></a></li>
<li><a href="IMBScatter"><strong>IMB Scatter</strong></a></li>
<li><a href="IMBScatterv"><strong>IMB Scatterv</strong></a></li>
<li><a href="IMBAlltoall"><strong>IMB Alltoall</strong></a></li>
<li><a href="IMBAlltoallv"><strong>IMB Alltoallv</strong></a></li>
<li><a href="IMBBcast"><strong>IMB Bcast</strong></a></li>
<li><a href="IMBBarrier"><strong>IMB Barrier</strong></a></li>
</ul>
</ul>

<?php 
  include_once("$topdir/includes/footer.inc"); 

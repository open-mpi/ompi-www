<?
$subject_val = "[OMPI users] Specifying nodes and cores when using mpi_comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 22 15:40:48 2015" -->
<!-- isoreceived="20150922194048" -->
<!-- sent="Tue, 22 Sep 2015 20:40:47 +0100" -->
<!-- isosent="20150922194047" -->
<!-- name="Glynn Hosking" -->
<!-- email="glynnhosking_at_[hidden]" -->
<!-- subject="[OMPI users] Specifying nodes and cores when using mpi_comm_spawn" -->
<!-- id="1442950847.88037.YahooMailAndroidMobile_at_web171202.mail.ir2.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI users] Specifying nodes and cores when using mpi_comm_spawn<br>
<strong>From:</strong> Glynn Hosking (<em>glynnhosking_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-22 15:40:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27648.php">Ralph Castain: "Re: [OMPI users] Specifying nodes and cores when using mpi_comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="27646.php">Nathan Hjelm: "Re: [OMPI users] possible GATS bug in osc/sm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27648.php">Ralph Castain: "Re: [OMPI users] Specifying nodes and cores when using mpi_comm_spawn"</a>
<li><strong>Reply:</strong> <a href="27648.php">Ralph Castain: "Re: [OMPI users] Specifying nodes and cores when using mpi_comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am using mpi_comm_spawn to launch one mpi-enabled executable from another. The jobs are running on clusters using SGE and PBS schedulers.&#160;


I can see that it's possible to specify the nodes on which to run the spawned executable (using the info argument list). However, is it also possible to specify the cores on which to run the spawned executable?


I'd like the spawned executable to run on the same nodes and cores as the master executable, to minimise the resources used on the cluster. The master process would otherwise be doing &quot;nothing&quot; whilst waiting for the spawned executable to complete its work.&#160;

Sent from Yahoo Mail on Android


<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27647/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27648.php">Ralph Castain: "Re: [OMPI users] Specifying nodes and cores when using mpi_comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="27646.php">Nathan Hjelm: "Re: [OMPI users] possible GATS bug in osc/sm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27648.php">Ralph Castain: "Re: [OMPI users] Specifying nodes and cores when using mpi_comm_spawn"</a>
<li><strong>Reply:</strong> <a href="27648.php">Ralph Castain: "Re: [OMPI users] Specifying nodes and cores when using mpi_comm_spawn"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>

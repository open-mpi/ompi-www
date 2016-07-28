<?
$subject_val = "[OMPI users] OpenFabrics (openib)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 27 10:24:40 2013" -->
<!-- isoreceived="20130227152440" -->
<!-- sent="Wed, 27 Feb 2013 15:24:36 +0000" -->
<!-- isosent="20130227152436" -->
<!-- name="Khapare Joshi" -->
<!-- email="khapare77_at_[hidden]" -->
<!-- subject="[OMPI users] OpenFabrics (openib)" -->
<!-- id="CABHhH+sqANeyy+GMmOTANeLEOoHxm40=5H7Zmq6q5kdxYuResQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OpenFabrics (openib)<br>
<strong>From:</strong> Khapare Joshi (<em>khapare77_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-27 10:24:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21469.php">Ralph Castain: "Re: [OMPI users] OpenFabrics (openib)"</a>
<li><strong>Previous message:</strong> <a href="21467.php">Daniels, Marcus G: "Re: [OMPI users] Programming with Big Data in R"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21469.php">Ralph Castain: "Re: [OMPI users] OpenFabrics (openib)"</a>
<li><strong>Reply:</strong> <a href="21469.php">Ralph Castain: "Re: [OMPI users] OpenFabrics (openib)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>First time poster, I recently installed openmpi 1.6.4 in my cluster with
<br>
resource manager support as :
<br>
<p>./configure --with-tm --prefix=/opt/openmpi/1.6.2/
<br>
<p>it works well, but I always get some error saying :
<br>
[[58551,1],0]: A high-performance Open MPI point-to-point messaging module
<br>
was unable to find any relevant network interfaces:
<br>
<p>Module: OpenFabrics (openib)
<br>
&nbsp;&nbsp;Host: login-1-2
<br>
<p>Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
<p>This probably looking for infiniband network, and when i installed it used
<br>
default to use infiniband support. however I do not have any infiniband in
<br>
my cluster, how do I fix this problem.
<br>
<p>Perhaps re-configure the openmpi without openib ? if thats the case what
<br>
flag I should use with configure ?
<br>
<p>K
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21468/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21469.php">Ralph Castain: "Re: [OMPI users] OpenFabrics (openib)"</a>
<li><strong>Previous message:</strong> <a href="21467.php">Daniels, Marcus G: "Re: [OMPI users] Programming with Big Data in R"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21469.php">Ralph Castain: "Re: [OMPI users] OpenFabrics (openib)"</a>
<li><strong>Reply:</strong> <a href="21469.php">Ralph Castain: "Re: [OMPI users] OpenFabrics (openib)"</a>
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

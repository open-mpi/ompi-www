<?
$subject_val = "[OMPI users] Cluster with IB hosts and Ethernet hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 22 23:27:00 2009" -->
<!-- isoreceived="20090123042700" -->
<!-- sent="Fri, 23 Jan 2009 09:56:56 +0530" -->
<!-- isosent="20090123042656" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="[OMPI users] Cluster with IB hosts and Ethernet hosts" -->
<!-- id="cb60cbc40901222026r5ee0e203u5359f271e6628abb_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Cluster with IB hosts and Ethernet hosts<br>
<strong>From:</strong> Sangamesh B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-22 23:26:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7771.php">Geoffroy Pignot: "Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)"</a>
<li><strong>Previous message:</strong> <a href="7769.php">Gijsbert Wiesenekker: "[OMPI users] MPIAbort and raise(SIGTERM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7784.php">Jeff Squyres: "Re: [OMPI users] Cluster with IB hosts and Ethernet hosts"</a>
<li><strong>Reply:</strong> <a href="7784.php">Jeff Squyres: "Re: [OMPI users] Cluster with IB hosts and Ethernet hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;We''ve a cluster with 23 nodes connected to IB switch and 8 nodes
<br>
have connected to ethernet switch. Master node is also connected to IB
<br>
switch. SGE(with tight integration, -pe orte)  is used for
<br>
parallel/serial job submission.
<br>
<p>Open MPI-1.3 is installed on master node with IB support
<br>
(--with-openib=/usr). The same folder is copied to the remaining 23 IB
<br>
nodes.
<br>
<p>Now what shall I do for remaining 8 ethernet nodes:
<br>
&nbsp;(1) Copy the same folder(IB) to these nodes
<br>
&nbsp;(2) Install Open MPI on one of the 8 eight ethernet nodes. Copy the
<br>
same to 7 nodes.
<br>
&nbsp;(3) Install an ethernet version of Open MPI on master node and copy to 8 nodes.
<br>
<p>Which of the above could solve the SGE ethernet/IB parallel job submission?
<br>
<p>Thanks,
<br>
Sangamesh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7771.php">Geoffroy Pignot: "Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)"</a>
<li><strong>Previous message:</strong> <a href="7769.php">Gijsbert Wiesenekker: "[OMPI users] MPIAbort and raise(SIGTERM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7784.php">Jeff Squyres: "Re: [OMPI users] Cluster with IB hosts and Ethernet hosts"</a>
<li><strong>Reply:</strong> <a href="7784.php">Jeff Squyres: "Re: [OMPI users] Cluster with IB hosts and Ethernet hosts"</a>
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

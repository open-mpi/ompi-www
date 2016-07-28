<?
$subject_val = "[OMPI users] Bug in oob_tcp_[in|ex]clude?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 17 08:43:59 2007" -->
<!-- isoreceived="20071217134359" -->
<!-- sent="Mon, 17 Dec 2007 14:35:27 +0100 (MET)" -->
<!-- isosent="20071217133527" -->
<!-- name="Marco Sbrighi" -->
<!-- email="m.sbrighi_at_[hidden]" -->
<!-- subject="[OMPI users] Bug in oob_tcp_[in|ex]clude?" -->
<!-- id="1197898526.4945.44.camel_at_nb-sbrighi.cineca.it" -->
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
<strong>Subject:</strong> [OMPI users] Bug in oob_tcp_[in|ex]clude?<br>
<strong>From:</strong> Marco Sbrighi (<em>m.sbrighi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-17 08:35:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4684.php">Ralph H Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Previous message:</strong> <a href="4682.php">Gleb Natapov: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4690.php">Jeff Squyres: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<li><strong>Reply:</strong> <a href="4690.php">Jeff Squyres: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI developers,
<br>
<p>I'm using Open MPI 1.2.2 over OFED 1.2 on an 256 nodes, dual Opteron,
<br>
dual core, Linux cluster. Of course, with Infiniband 4x interconnect. 
<br>
<p>Each cluster node is equipped with 4 (or more) ethernet interface,
<br>
namely 2 gigabit ones plus 2 IPoIB. The two gig are named  eth0,eth1,
<br>
while the two IPoIB are named ib0,ib1.
<br>
<p>It happens that the eth0 is a management network, with poor
<br>
performances, and furthermore we wouldn't use the ib* to carry MPI's
<br>
traffic (neither OOB or TCP), so we would like the eth1 is used for open
<br>
MPI OOB and TCP.
<br>
<p>In order to drive the OOB over only eth1 I've tried various combinations
<br>
of oob_tcp_[ex|in]clude MCA statements, starting from the obvious
<br>
&nbsp;
<br>
oob_tcp_exclude = lo,eth0,ib0,ib1 
<br>
<p>then trying the othe obvious:
<br>
<p>oob_tcp_include = eth1
<br>
<p>and both at the same time.
<br>
<p>Next I've tried the following:
<br>
<p>oob_tcp_exclude = eth0
<br>
<p>but after the job starts, I still have a lot of tcp connections
<br>
established using eth0 or ib0 or ib1. 
<br>
Furthermore It happens the following error:
<br>
<p>&nbsp;&nbsp;&nbsp;[node191:03976] [0,1,14]-[0,1,12] mca_oob_tcp_peer_complete_connect:
<br>
connection failed: Connection timed out (110) - retrying
<br>
<p>I've found only a way in order to have tcp connections binded only to
<br>
the eth1 interface, using both the following MCA directives in the
<br>
command line:
<br>
<p>mpirun .... --mca oob_tcp_include eth1 --mca oob_tcp_include lo,eth0,ib0,ib1 .....
<br>
<p>This sounds me as bug. 
<br>
<p>Is there someone able to reproduce this behaviour? 
<br>
If this is a bug, are there fixes?
<br>
<p>Thanks.
<br>
<p>Marco
<br>
&nbsp;
<br>
<p><pre>
-- 
-----------------------------------------------------------------
 Marco Sbrighi  m.sbrighi_at_[hidden]
 HPC Group
 CINECA Interuniversity Computing Centre
 via Magnanelli, 6/3
 40033 Casalecchio di Reno (Bo) ITALY
 tel. 051 6171516
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4684.php">Ralph H Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Previous message:</strong> <a href="4682.php">Gleb Natapov: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4690.php">Jeff Squyres: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<li><strong>Reply:</strong> <a href="4690.php">Jeff Squyres: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
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

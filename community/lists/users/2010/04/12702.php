<?
$subject_val = "[OMPI users] --enable-mpi-threads and --with-tm=/usr/local/torque";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 19 16:01:53 2010" -->
<!-- isoreceived="20100419200153" -->
<!-- sent="Mon, 19 Apr 2010 13:01:48 -0700" -->
<!-- isosent="20100419200148" -->
<!-- name="Martin Siegert" -->
<!-- email="siegert_at_[hidden]" -->
<!-- subject="[OMPI users] --enable-mpi-threads and --with-tm=/usr/local/torque" -->
<!-- id="20100419200148.GA4911_at_stikine.its.sfu.ca" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] --enable-mpi-threads and --with-tm=/usr/local/torque<br>
<strong>From:</strong> Martin Siegert (<em>siegert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-19 16:01:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12703.php">Samuel Collis: "[OMPI users] Incorrect results with MPI-IO with OpenMPI v1.3.0 and beyond"</a>
<li><strong>Previous message:</strong> <a href="12701.php">Andrew Wiles: "[OMPI users] Error on sending argv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12704.php">Ralph Castain: "Re: [OMPI users] --enable-mpi-threads and --with-tm=/usr/local/torque"</a>
<li><strong>Reply:</strong> <a href="12704.php">Ralph Castain: "Re: [OMPI users] --enable-mpi-threads and --with-tm=/usr/local/torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am wondering what effects it will have when I configure openmpi
<br>
with --enable-mpi-threads: we are using the TM interface to torque
<br>
and therefore each MPI program gets assigned a certain number of cores
<br>
on a set of nodes by the scheduler. If the MPI program now starts
<br>
additional threads how does that work?
<br>
- will this lead to an oversubscription of nodes
<br>
or
<br>
- will the creation of additional threads fail, if the number of
<br>
&nbsp;&nbsp;processes on a node has reached the process count on that node
<br>
&nbsp;&nbsp;assigned through torque?
<br>
<p>How is this done properly?
<br>
<p>Thanks!
<br>
<p>Cheers,
<br>
Martin
<br>
<p><pre>
-- 
Martin Siegert
Head, Research Computing
WestGrid Site Lead
IT Services                                phone: 778 782-4691
Simon Fraser University                    fax:   778 782-4242
Burnaby, British Columbia                  email: siegert_at_[hidden]
Canada  V5A 1S6
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12703.php">Samuel Collis: "[OMPI users] Incorrect results with MPI-IO with OpenMPI v1.3.0 and beyond"</a>
<li><strong>Previous message:</strong> <a href="12701.php">Andrew Wiles: "[OMPI users] Error on sending argv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12704.php">Ralph Castain: "Re: [OMPI users] --enable-mpi-threads and --with-tm=/usr/local/torque"</a>
<li><strong>Reply:</strong> <a href="12704.php">Ralph Castain: "Re: [OMPI users] --enable-mpi-threads and --with-tm=/usr/local/torque"</a>
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

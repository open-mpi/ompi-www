<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 16 09:59:58 2006" -->
<!-- isoreceived="20061016135958" -->
<!-- sent="Mon, 16 Oct 2006 07:59:46 -0600" -->
<!-- isosent="20061016135946" -->
<!-- name="Maestas, Christopher Daniel" -->
<!-- email="cdmaest_at_[hidden]" -->
<!-- subject="[OMPI users] Question on mpi collectives" -->
<!-- id="347180497203A942A6AA82C85846CBC9034F6004_at_ES23SNLNT.srn.sandia.gov" -->
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
<strong>From:</strong> Maestas, Christopher Daniel (<em>cdmaest_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-16 09:59:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1989.php">Jeff Squyres: "Re: [OMPI users] Problem with C++ Binding"</a>
<li><strong>Previous message:</strong> <a href="1987.php">&#197;ke Sandgren: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1990.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] Question on mpi collectives"</a>
<li><strong>Maybe reply:</strong> <a href="1990.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] Question on mpi collectives"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How fast/well are MPI collectives implemented in ompi?
<br>
I'm running the Intel MPI 1.1. benchmarks and seeing the need to set
<br>
wall clock times &gt; 12 hours for run sizes of 200 and 300 nodes for 1ppn
<br>
and 2ppn cases.  The collective tests that usually pass in 2ppn cases:
<br>
&nbsp;Barrier, Reduce scatter, allreduce, bcast
<br>
<p>The ones that take long or never run:
<br>
&nbsp;Allgather, alltoall, allgatherv
<br>
<p>Thanks,
<br>
-cdm
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1989.php">Jeff Squyres: "Re: [OMPI users] Problem with C++ Binding"</a>
<li><strong>Previous message:</strong> <a href="1987.php">&#197;ke Sandgren: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1990.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] Question on mpi collectives"</a>
<li><strong>Maybe reply:</strong> <a href="1990.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] Question on mpi collectives"</a>
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

<?
$subject_val = "[OMPI users] Deadlock with barrier und RMA";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 11 09:03:45 2011" -->
<!-- isoreceived="20110611130345" -->
<!-- sent="Sat, 11 Jun 2011 14:43:27 +0000" -->
<!-- isosent="20110611144327" -->
<!-- name="Ole Kliemann" -->
<!-- email="ole-ompi-2011_at_[hidden]" -->
<!-- subject="[OMPI users] Deadlock with barrier und RMA" -->
<!-- id="20110611144327.GB3672_at_telvanni.starfleet" -->
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
<strong>Subject:</strong> [OMPI users] Deadlock with barrier und RMA<br>
<strong>From:</strong> Ole Kliemann (<em>ole-ompi-2011_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-11 10:43:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16704.php">Ralph Castain: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<li><strong>Previous message:</strong> <a href="16702.php">Alan Nichols: "Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16704.php">Ralph Castain: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<li><strong>Reply:</strong> <a href="16704.php">Ralph Castain: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<li><strong>Reply:</strong> <a href="16712.php">Jeff Squyres: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone!
<br>
<p>I'm trying to use MPI on a cluster running OpenMPI 1.2.4 and starting
<br>
processes through PBSPro_11.0.2.110766. I've been running into a couple
<br>
of performance and deadlock problems and like to check whether I'm
<br>
making a mistake.
<br>
<p>One of the deadlocks I managed to boil down to the attached example. I
<br>
run it on 8 cores. It usually deadlocks with all except one process
<br>
showing
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;start barrier
<br>
<p>as last output.
<br>
<p>The one process out of order shows:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;start getting local
<br>
<p>My question at this point is simply whether this is expected behaviour
<br>
of OpenMPI. 
<br>
<p>Thanks in advance!
<br>
Ole
<br>
<p>
<br><p>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16703/mpi_barrier.cc">mpi_barrier.cc</a>
</ul>
<!-- attachment="mpi_barrier.cc" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16703/02-part">stored</a>
</ul>
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16704.php">Ralph Castain: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<li><strong>Previous message:</strong> <a href="16702.php">Alan Nichols: "Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16704.php">Ralph Castain: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<li><strong>Reply:</strong> <a href="16704.php">Ralph Castain: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<li><strong>Reply:</strong> <a href="16712.php">Jeff Squyres: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
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

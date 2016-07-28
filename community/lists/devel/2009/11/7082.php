<?
$subject_val = "[OMPI devel] Another 1.3.4 blocker: mpi_test_suite failing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  3 21:22:08 2009" -->
<!-- isoreceived="20091104022208" -->
<!-- sent="Tue, 3 Nov 2009 21:22:03 -0500" -->
<!-- isosent="20091104022203" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Another 1.3.4 blocker: mpi_test_suite failing" -->
<!-- id="7141486E-5A0A-462E-B2E1-C110E18A8CF7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Another 1.3.4 blocker: mpi_test_suite failing<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-03 21:22:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7083.php">Jeff Squyres: "Re: [OMPI devel] Another 1.3.4 blocker: mpi_test_suite failing"</a>
<li><strong>Previous message:</strong> <a href="7081.php">Jeff Squyres: "[OMPI devel] 1.3.4 blocker"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7083.php">Jeff Squyres: "Re: [OMPI devel] Another 1.3.4 blocker: mpi_test_suite failing"</a>
<li><strong>Reply:</strong> <a href="7083.php">Jeff Squyres: "Re: [OMPI devel] Another 1.3.4 blocker: mpi_test_suite failing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MTT is finding (and I have confirmed by hand) that 1.3.4 is failing  
<br>
the mpi_test_suite P2P tests Ring Persistent (15/47).  It does not  
<br>
fail on the trunk.  Can someone confirm if this is a real problem?
<br>
<p>Here's a snipit of the output:
<br>
<p>P2P tests Ring Persistent (15/47), comm MPI_COMM_WORLD (1/13), type  
<br>
MPI_TYPE_MIX_ARRAY (28/27)
<br>
P2P tests Ring Persistent (15/47), comm MPI_COMM_WORLD (1/13), type  
<br>
MPI_TYPE_MIX_LB_UB (29/27)
<br>
P2P tests Ring Persistent (15/47), comm MPI_COMM_SELF (3/13), type  
<br>
MPI_CHAR (1/27)
<br>
statuses[1].MPI_SOURCE:-1 instead of -2 (MPI_ANY_SOURCE:-1  
<br>
MPI_PROC_NULL:-2)
<br>
statuses[1].MPI_SOURCE:-1 instead of -2 (MPI_ANY_SOURCE:-1  
<br>
MPI_PROC_NULL:-2)
<br>
statuses[1].MPI_SOURCE:-1 instead of -2 (MPI_ANY_SOURCE:-1  
<br>
MPI_PROC_NULL:-2)
<br>
statuses[1].MPI_SOURCE:-1 instead of -2 (MPI_ANY_SOURCE:-1  
<br>
MPI_PROC_NULL:-2)
<br>
statuses[1].MPI_SOURCE:-1 instead of -2 (MPI_ANY_SOURCE:-1  
<br>
MPI_PROC_NULL:-2)
<br>
statuses[1].MPI_SOURCE:-1 instead of -2 (MPI_ANY_SOURCE:-1  
<br>
MPI_PROC_NULL:-2)
<br>
statuses[1].MPI_SOURCE:-1 instead of -2 (MPI_ANY_SOURCE:-1  
<br>
MPI_PROC_NULL:-2)
<br>
statuses[1].MPI_SOURCE:-1 instead of -2 (MPI_ANY_SOURCE:-1  
<br>
MPI_PROC_NULL:-2)
<br>
statuses[1].MPI_SOURCE:-1 instead of -2 (MPI_ANY_SOURCE:-1  
<br>
MPI_PROC_NULL:-2)
<br>
(p2p/tst_p2p_simple_ring_persistent.c:135) ERROR: Error in statuses;  
<br>
Invalid argument(22)
<br>
(p2p/tst_p2p_simple_ring_persistent.c:135) ERROR: Error in statuses;  
<br>
Invalid argument(22)
<br>
<p>Here's how I'm running the test suite:
<br>
<p>mpirun -np 16 mpi_test_suite -x relaxed -d 'All,!MPI_SHORT_INT,! 
<br>
MPI_TYPE_MIX'
<br>
<p>across 4 nodes, 4ppn.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7083.php">Jeff Squyres: "Re: [OMPI devel] Another 1.3.4 blocker: mpi_test_suite failing"</a>
<li><strong>Previous message:</strong> <a href="7081.php">Jeff Squyres: "[OMPI devel] 1.3.4 blocker"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7083.php">Jeff Squyres: "Re: [OMPI devel] Another 1.3.4 blocker: mpi_test_suite failing"</a>
<li><strong>Reply:</strong> <a href="7083.php">Jeff Squyres: "Re: [OMPI devel] Another 1.3.4 blocker: mpi_test_suite failing"</a>
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

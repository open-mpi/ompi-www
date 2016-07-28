<?
$subject_val = "Re: [OMPI devel] Another 1.3.4 blocker: mpi_test_suite failing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  3 21:29:31 2009" -->
<!-- isoreceived="20091104022931" -->
<!-- sent="Tue, 3 Nov 2009 21:29:27 -0500" -->
<!-- isosent="20091104022927" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Another 1.3.4 blocker: mpi_test_suite failing" -->
<!-- id="FE8C8094-C281-490E-A510-512B2B0BAA3D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7141486E-5A0A-462E-B2E1-C110E18A8CF7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Another 1.3.4 blocker: mpi_test_suite failing<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-03 21:29:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7084.php">George Bosilca: "Re: [OMPI devel] === CREATE FAILURE (v1.5) ==="</a>
<li><strong>Previous message:</strong> <a href="7082.php">Jeff Squyres: "[OMPI devel] Another 1.3.4 blocker: mpi_test_suite failing"</a>
<li><strong>In reply to:</strong> <a href="7082.php">Jeff Squyres: "[OMPI devel] Another 1.3.4 blocker: mpi_test_suite failing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm.  Looks like this fails in 1.3.0 as well.  So -- not a  
<br>
regression.  But it still does seem weird.  I'll file a ticket for 1.4.
<br>
<p>On Nov 3, 2009, at 9:22 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; MTT is finding (and I have confirmed by hand) that 1.3.4 is failing
</span><br>
<span class="quotelev1">&gt; the mpi_test_suite P2P tests Ring Persistent (15/47).  It does not
</span><br>
<span class="quotelev1">&gt; fail on the trunk.  Can someone confirm if this is a real problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's a snipit of the output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P2P tests Ring Persistent (15/47), comm MPI_COMM_WORLD (1/13), type
</span><br>
<span class="quotelev1">&gt; MPI_TYPE_MIX_ARRAY (28/27)
</span><br>
<span class="quotelev1">&gt; P2P tests Ring Persistent (15/47), comm MPI_COMM_WORLD (1/13), type
</span><br>
<span class="quotelev1">&gt; MPI_TYPE_MIX_LB_UB (29/27)
</span><br>
<span class="quotelev1">&gt; P2P tests Ring Persistent (15/47), comm MPI_COMM_SELF (3/13), type
</span><br>
<span class="quotelev1">&gt; MPI_CHAR (1/27)
</span><br>
<span class="quotelev1">&gt; statuses[1].MPI_SOURCE:-1 instead of -2 (MPI_ANY_SOURCE:-1
</span><br>
<span class="quotelev1">&gt; MPI_PROC_NULL:-2)
</span><br>
<span class="quotelev1">&gt; statuses[1].MPI_SOURCE:-1 instead of -2 (MPI_ANY_SOURCE:-1
</span><br>
<span class="quotelev1">&gt; MPI_PROC_NULL:-2)
</span><br>
<span class="quotelev1">&gt; statuses[1].MPI_SOURCE:-1 instead of -2 (MPI_ANY_SOURCE:-1
</span><br>
<span class="quotelev1">&gt; MPI_PROC_NULL:-2)
</span><br>
<span class="quotelev1">&gt; statuses[1].MPI_SOURCE:-1 instead of -2 (MPI_ANY_SOURCE:-1
</span><br>
<span class="quotelev1">&gt; MPI_PROC_NULL:-2)
</span><br>
<span class="quotelev1">&gt; statuses[1].MPI_SOURCE:-1 instead of -2 (MPI_ANY_SOURCE:-1
</span><br>
<span class="quotelev1">&gt; MPI_PROC_NULL:-2)
</span><br>
<span class="quotelev1">&gt; statuses[1].MPI_SOURCE:-1 instead of -2 (MPI_ANY_SOURCE:-1
</span><br>
<span class="quotelev1">&gt; MPI_PROC_NULL:-2)
</span><br>
<span class="quotelev1">&gt; statuses[1].MPI_SOURCE:-1 instead of -2 (MPI_ANY_SOURCE:-1
</span><br>
<span class="quotelev1">&gt; MPI_PROC_NULL:-2)
</span><br>
<span class="quotelev1">&gt; statuses[1].MPI_SOURCE:-1 instead of -2 (MPI_ANY_SOURCE:-1
</span><br>
<span class="quotelev1">&gt; MPI_PROC_NULL:-2)
</span><br>
<span class="quotelev1">&gt; statuses[1].MPI_SOURCE:-1 instead of -2 (MPI_ANY_SOURCE:-1
</span><br>
<span class="quotelev1">&gt; MPI_PROC_NULL:-2)
</span><br>
<span class="quotelev1">&gt; (p2p/tst_p2p_simple_ring_persistent.c:135) ERROR: Error in statuses;
</span><br>
<span class="quotelev1">&gt; Invalid argument(22)
</span><br>
<span class="quotelev1">&gt; (p2p/tst_p2p_simple_ring_persistent.c:135) ERROR: Error in statuses;
</span><br>
<span class="quotelev1">&gt; Invalid argument(22)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's how I'm running the test suite:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 16 mpi_test_suite -x relaxed -d 'All,!MPI_SHORT_INT,!
</span><br>
<span class="quotelev1">&gt; MPI_TYPE_MIX'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; across 4 nodes, 4ppn.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7084.php">George Bosilca: "Re: [OMPI devel] === CREATE FAILURE (v1.5) ==="</a>
<li><strong>Previous message:</strong> <a href="7082.php">Jeff Squyres: "[OMPI devel] Another 1.3.4 blocker: mpi_test_suite failing"</a>
<li><strong>In reply to:</strong> <a href="7082.php">Jeff Squyres: "[OMPI devel] Another 1.3.4 blocker: mpi_test_suite failing"</a>
<!-- nextthread="start" -->
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
